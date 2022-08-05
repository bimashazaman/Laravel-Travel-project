<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\FoodArmenia;
use App\Models\Hotel;
use App\Models\HotelCMS;
use App\Models\HotelFacility;
use App\Models\HotelHighlights;
use App\Models\HotelImage;
use App\Models\HotelInfo;
use App\Models\HotelKey;
use App\Models\HotelRoom;
use App\Models\HotelType;
use App\Models\Image;
use App\Models\Region;
use App\Models\ThingsToDo;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class HotelController extends Controller
{

    public function index()
    {
        //get all data with paginate
        $hotels = Hotel::orderby('created_at', 'desc')->simplePaginate(5);
        return view('Backend.Admin.Services.Hotels.view', compact('hotels'));
    }


    public function create()
    {
        $hotelType = HotelType::all();
        $region = Region::all();
        $destination = Destination::all();

        return view('Backend.Admin.Services.Hotels.create', compact('hotelType', 'region', 'destination'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'address' => 'required',
            'stars' => 'required',
            'price' => 'required',
            'overview' => '',
            'free_cancelation' => 'required',
            'images' => 'required',
            'destination_id' => 'required',
            'region_id' => 'required',
            'hotel_type_id' => 'required',
        ]);
        $hotel = Hotel::create([
            'name' => $request->name,
            'overview' => $request->overview,
            'description' => $request->description,
            'address' => $request->address,
            'stars' => $request->stars,
            'price' => $request->price,
            'free_cancelation' => $request->free_cancelation,
            'destination_id' => $request->destination_id,
            'region_id' => $request->region_id,
            'hotel_type_id' => $request->hotel_type_id,

        ]);

        foreach ($request->file('images') as  $image) {

            $imageName = $image->getClientOriginalName();
            $image->move("Hotel/" . $hotel->id . "/", $imageName);
            $image = new Image();
            $image["filename"] = $imageName;
            $image["path"] = "Hotel/" . $hotel->id . "/" . $imageName;
            $image->save();
            $hotel->images()->attach($image->id);
        }
        return redirect()->back()->with("msg", "Created successfully!")
            ->with("success", true);
    }

    function addHotelKey(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            // "tour_id" => "required|integer",
            'key' => 'required',

        ]);
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->with("msg", $validator->errors()->first())
                ->with("fail", true);
        }
        $hotel_key = new HotelKey();
        $hotel_key->fill($request->all());
        $hotel_key["hotel_id"] = $id;
        $hotel_key->save();
        $hotel = Hotel::with('images')
            ->with('images')
            ->with('highlights')
            ->with('hotelInfo')
            ->with('hotelFacilities')
            ->with('rooms')
            ->with('destination')
            ->with('region')
            ->with('hotelType')
            ->with('hotelKeys')
            ->where("id", $id)
            ->whereNull('deleted_at')
            ->first();
        return redirect()
            ->back()
            ->with("msg", "Added successfully!")
            ->with("success", true);

        // return self::success("Tour program added", ["data" => $hotel_key]);
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
            ->with('destination')
            ->with('region')
            ->with('hotelType')
            ->where('id', $id)
            ->first();




        return view('Backend.Admin.Services.Hotels.show', compact('hotel'));
    }

    public function edit($id)
    {
        $hotel = Hotel::find($id);
        $hotelType = HotelType::all();
        $region = Region::all();
        $destination = Destination::all();
        return view('Backend.Admin.Services.Hotels.update', compact('hotel', 'hotelType', 'region', 'destination'));
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
            ->orderby('created_at', 'desc')
            ->whereNull('deleted_at')
            ->simplePaginate(5);
        $hotelType = HotelType::all();
        $region = Region::all();
        $destination = Destination::all();

        $cms = HotelCMS::all();

        return view('Frontend.Hotels.Hotels', compact('hotels', 'hotelType', 'region', 'destination','cms'));
    }

    // get the hotel details in the frontend
    public function getHotelDetails($id)
    {
        $hotels = Hotel::with('images')
            ->with('highlights')
            ->with('hotelInfo')
            ->with('hotelFacilities')
            ->with('rooms')
            ->with('hotelType')
            ->with('hotelKeys')
            ->where('id', $id)
            ->first();

            $foods = FoodArmenia::with('images')
            // ->random()
            // ->take(3)
            ->where('category_id', 1)
            ->inRandomOrder()
            ->simplePaginate(3);

            $room = HotelRoom::find($id);

            $things = ThingsToDo::with('images')
            // ->random()
            // ->take(3)
            // ->where('category_id', 1)
            ->inRandomOrder()
            ->simplePaginate(3);




        return view('Frontend.Hotels.Hotel', compact('hotels', 'foods','things','room'));
    }
}
