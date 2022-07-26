<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\HotelFacility;
use App\Models\HotelHighlights;
use App\Models\HotelImage;
use App\Models\HotelInfo;
use App\Models\HotelRoom;
use App\Models\Image;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class HotelController extends Controller
{

    public function index()
    {
        $hotels = Hotel::all();
        return view('Backend.Admin.Services.Hotels.view', compact('hotels'));
    }


    public function create()
    {
        return view('Backend.Admin.Services.Hotels.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'address' => 'required',
            'stars' => 'required',
            'price' => 'required',
            'free_cancelation' => 'required',
            'images' => 'required',
        ]);
        $hotel = Hotel::create([
            'name' => $request->name,
            'description' => $request->description,
            'address' => $request->address,
            'stars' => $request->stars,
            'price' => $request->price,
            'free_cancelation' => $request->free_cancelation,
        ]);

        foreach ($request->file('images') as  $image) {
            $imageOrignalName = $image->getClientOriginalName();
            $imageNameArray = explode('.', $imageOrignalName);
            $imageExtension = end($imageNameArray);
            $newImageName = now()->timestamp . "." . $imageExtension;
            $path = "Hotel/" . $hotel->id . "/";
            $image->move($path, $newImageName);
            $image = new Image();
            $image["filename"] = $newImageName;
            $image["path"] = $path . $newImageName;
            $image->save();
            HotelImage::create([
                'hotel_id' => $hotel->id,
                'image_id' => $image->id,
            ]);
        }
        return redirect()->back()->with("msg", "Created successfully!")
            ->with("success", true);
    }


    public function show($id)
    {
        //show the details of hotel

        $hotel = Hotel::find($id)
            ->with('images')
            ->with('highlights')
            ->with('hotelInfo')
            ->with('hotelFacilities')
            ->with('rooms')
            ->where('id', $id)
            ->first();

        


        return view('Backend.Admin.Services.Hotels.show', compact('hotel'));
    }

    public function edit($id)
    {
        $hotel = Hotel::find($id);
        return view('Backend.Admin.Services.Hotels.update', compact('hotel'));
    }



    public function addHotelHighlights(Request $request, $id)
    {


        $validate = Validator::make($request->all(), [
            // "tour_id" => "required|integer",
            "name" => "required"
        ]);
        if ($validate->fails()) {
            return redirect()
                ->back()
                ->with("msg", $validate->errors()->first())
                ->with("fail", true);

            // return self::failure($validate->errors()->first());
        }
        try {
            $hotel = HotelHighlights::create([
                "name" => $request->name,
                "hotel_id" => $id
            ]);
            // dd($tt);
            $hotel = Hotel::with('images')
                ->with('highlights')
                ->where("id", $id)
                ->whereNull('deleted_at')
                ->first();
            // dd($hotel);
            return redirect()
                ->back()
                ->with("msg", "Created successfully!")
                ->with("success", true);
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with("msg", $e->getMessage())
                ->with("fail", true);
        }
    }




    public function addFacility(Request $request, $id)
    {
    
        $validate = Validator::make($request->all(), [
            // "tour_id" => "required|integer",
            "name" => "required"
        ]);
        if ($validate->fails()) {
            return redirect()
                ->back()
                ->with("msg", $validate->errors()->first())
                ->with("fail", true);

            // return self::failure($validate->errors()->first());
        }
        try {
            $hotel = HotelFacility::create([
                "name" => $request->name,
                "hotel_id" => $id
            ]);
            // dd($tt);
            $hotel = Hotel::with('images')
                ->with('highlights')
                ->where("id", $id)
                ->with('hotelFacilities')
                ->whereNull('deleted_at')
                ->first();
            // dd($hotel);
            return redirect()
                ->back()
                ->with("msg", "Created successfully!")
                ->with("success", true);
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with("msg", $e->getMessage())
                ->with("fail", true);
        }

    }

    public function FacilityDelete($id)
    {
        $facility = HotelFacility::find($id);
        $facility->delete();
        return redirect()->back()->with("msg", "Deleted successfully!")
            ->with("success", true);
    }

    function addHotelRoom(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            // "tour_id" => "required|integer",
            "name" => "required",
            "price" => "required",
            "price2" => "required",

        ]);
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->with("msg", $validator->errors()->first())
                ->with("fail", true);
            // return self::failure($validator->errors()->first());
        }
        $hotel = new HotelRoom();
        $hotel->fill($request->all());
        $hotel["hotel_id"] = $id;

        $hotel->save();
        $tour = Hotel::with('images')
            ->with('highlights')
            ->where("id", $id)
            ->whereNull('deleted_at')
            ->first();
        return redirect()
            ->back()
            ->with("msg", "Added successfully!")
            ->with("success", true)
            ->with('tour', $tour);
    }

    public function deleteHotelRoom($id)
    {
        $hotel = HotelRoom::find($id);
        $hotel->delete();
        return redirect()->back()->with("msg", "Deleted successfully!")
            ->with("success", true);
    }


    public function deleteHotelHighlight($id)
    {
        $hotel = HotelHighlights::find($id);
        $hotel->delete();
        return redirect()
            ->back()
            ->with("msg", "Deleted successfully!")
            ->with("success", true);
    }


    public function addHotelInfo(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            // "tour_id" => "required|integer",
            "name" => "required",
           
        ]);
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->with("msg", $validator->errors()->first())
                ->with("fail", true);
            // return self::failure($validator->errors()->first());
        }
        $hotel = new HotelInfo();
        $hotel->fill($request->all());
        $hotel["hotel_id"] = $id;

        $hotel->save();
        $tour = Hotel::with('images')
            ->with('highlights')
            ->with('hotelFacilities')
            ->where("id", $id)
            ->whereNull('deleted_at')
            ->first();
        return redirect()
            ->back()
            ->with("msg", "Added successfully!")
            ->with("success", true)
            ->with('tour', $tour);
    }

    public function deleteHotelInfo($id)
    {
        $hotel = HotelInfo::find($id);
        $hotel->delete();
        return redirect()
            ->back()
            ->with("msg", "Deleted successfully!")
            ->with("success", true);
    }




    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'stars' => 'required',
            'price' => 'required',
            'free_cancelation' => 'required',
        ]);
        $hotel = Hotel::find($id);
        $hotel->name = $request->name;
        $hotel->address = $request->address;
        $hotel->stars = $request->stars;
        $hotel->price = $request->price;
        $hotel->free_cancelation = $request->free_cancelation;
        $hotel->save();
        return redirect()->back()->with("msg", "Upadated successfully!")
            ->with("success", true);
    }

    public function destroy($id)
    {
        //delete the hotel
        $hotel = Hotel::find($id);
        $hotel->delete();
        return redirect()->back()->with("msg", "Deleted successfully!")
            ->with("success", true);
    }


    // get the hotels in the frontend
    public function getHotels()
    {
        $hotels = Hotel::with('images')
            ->with('highlights')
            ->with('rooms')
            ->whereNull('deleted_at')
            ->get();
        return view('Frontend.Hotels.Hotels', compact('hotels'));
    }

    // get the hotel details in the frontend
    public function getHotelDetails($id)
    {
        $hotels = Hotel::with('images')
        ->with('highlights')
        ->with('hotelInfo')
        ->with('hotelFacilities')
        ->with('rooms')
        ->where('id', $id)
        ->first()
        ;
        return view('Frontend.Hotels.Hotel', compact('hotels'));
    }
}
