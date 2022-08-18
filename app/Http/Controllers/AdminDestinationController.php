<?php

namespace App\Http\Controllers;

use App\Models\FromDilijan;
use App\Models\FromGyumri;
use App\Models\FromJermuk;
use App\Models\FromStepanakert;
use App\Models\FromTbilisi;
use App\Models\FromYerevan;
use Illuminate\Http\Request;

class AdminDestinationController extends Controller
{
    public function index()
    {
        $yerevan =  FromYerevan::all();
        $dilijan =  FromDilijan::all();
        $gyumri =  FromGyumri::all();
        $jermuk =  FromJermuk::all();
        $stepanakert =  FromStepanakert::all();
        $tbilisi =  FromTbilisi::all();
        return view('Backend.Admin.Destination.view',  compact('yerevan', 'dilijan', 'gyumri', 'jermuk','stepanakert','tbilisi'));
    }

    public function storeYerevan(Request $request)
    {
        //validation
        $this->validate($request, [
            'name' => '',
            'nameTwo' => '',
            'nameThree' => '',
            'nameFour' => '',
            'nameFive' => '',
            'nameSix' => '',
            'nameSeven' => '',
            'nameEight' => '',

        ]);

        try {
        $fromYerevan = new FromYerevan();
        $fromYerevan->name = $request->name;
        $fromYerevan->nameTwo = $request->nameTwo;
        $fromYerevan->nameThree = $request->nameThree;
        $fromYerevan->nameFour = $request->nameFour;
        $fromYerevan->nameFive = $request->nameFive;
        $fromYerevan->nameSix = $request->nameSix;
        $fromYerevan->nameSeven = $request->nameSeven;
        $fromYerevan->nameEight = $request->nameEight;
        $fromYerevan->save();

        return redirect()
        ->back()
        ->with("msg", "Added successfully!")
        ->with("success", true);
        } catch (\Exception $e) {
            return redirect()
            ->back()
            ->with("msg", "Something went wrong!")
            ->with("success", false);
        }
    }

    public function storeDilijans(Request $request)
    {
        //validation
        $this->validate($request, [
            'name' => '',
            'nameTwo' => '',
            'nameThree' => '',
            'nameFour' => '',
            'nameFive' => '',
            'nameSix' => '',
            'nameSeven' => '',
            'nameEight' => '',
        ]);
        try {
        $FromDilija = new FromDilijan();
        $FromDilija->name = $request->name;
        $FromDilija->nameTwo = $request->nameTwo;
        $FromDilija->nameThree = $request->nameThree;
        $FromDilija->nameFour = $request->nameFour;
        $FromDilija->nameFive = $request->nameFive;
        $FromDilija->nameSix = $request->nameSix;
        $FromDilija->nameSeven = $request->nameSeven;
        $FromDilija->nameEight = $request->nameEight;
        $FromDilija->save();
        return redirect()
        ->back()
        ->with("msg", "Added successfully!")
        ->with("success", true);
        } catch (\Exception $e) {
            return redirect()
            ->back()
            ->with("msg", "Something went wrong!")
            ->with("success", false);
        }
    }

    public function storeGyumris(Request $request)
    {
        //validation
        $this->validate($request, [
            'name' => '',
            'nameTwo' => '',
            'nameThree' => '',
            'nameFour' => '',
            'nameFive' => '',
            'nameSix' => '',
            'nameSeven' => '',
            'nameEight' => '',
        ]);
        try {
        $FromGyumri = new FromGyumri();
        $FromGyumri->name = $request->name;
        $FromGyumri->nameTwo = $request->nameTwo;
        $FromGyumri->nameThree = $request->nameThree;
        $FromGyumri->nameFour = $request->nameFour;
        $FromGyumri->nameFive = $request->nameFive;
        $FromGyumri->nameSix = $request->nameSix;
        $FromGyumri->nameSeven = $request->nameSeven;
        $FromGyumri->nameEight = $request->nameEight;
        $FromGyumri->save();
        return redirect()
        ->back()
        ->with("msg", "Added successfully!")
        ->with("success", true);
        } catch (\Exception $e) {
            return redirect()
            ->back()
            ->with("msg", "Something went wrong!")
            ->with("success", false);
        }
    }

    public function storeJermuks(Request $request)
    {
        //validation
        $this->validate($request, [
            'name' => '',
            'nameTwo' => '',
            'nameThree' => '',
            'nameFour' => '',
            'nameFive' => '',
            'nameSix' => '',
            'nameSeven' => '',
            'nameEight' => '',
        ]);
        try {
        $FromJermuk = new FromJermuk();
        $FromJermuk->name = $request->name;
        $FromJermuk->nameTwo = $request->nameTwo;
        $FromJermuk->nameThree = $request->nameThree;
        $FromJermuk->nameFour = $request->nameFour;
        $FromJermuk->nameFive = $request->nameFive;
        $FromJermuk->nameSix = $request->nameSix;
        $FromJermuk->nameSeven = $request->nameSeven;
        $FromJermuk->nameEight = $request->nameEight;
        $FromJermuk->save();
        return redirect()
        ->back()
        ->with("msg", "Added successfully!")
        ->with("success", true);
        } catch (\Exception $e) {
            return redirect()
            ->back()
            ->with("msg", "Something went wrong!")
            ->with("success", false);
        }
    }

    public function storeStepanakerts(Request $request)
    {
        //validation
        $this->validate($request, [
            'name' => '',
            'nameTwo' => '',
            'nameThree' => '',
            'nameFour' => '',
            'nameFive' => '',
            'nameSix' => '',
            'nameSeven' => '',
            'nameEight' => '',
        ]);
        try {
        $FromStepanakert = new FromStepanakert();
        $FromStepanakert->name = $request->name;
        $FromStepanakert->nameTwo = $request->nameTwo;
        $FromStepanakert->nameThree = $request->nameThree;
        $FromStepanakert->nameFour = $request->nameFour;
        $FromStepanakert->nameFive = $request->nameFive;
        $FromStepanakert->nameSix = $request->nameSix;
        $FromStepanakert->nameSeven = $request->nameSeven;
        $FromStepanakert->nameEight = $request->nameEight;
        $FromStepanakert->save();
        return redirect()
        ->back()
        ->with("msg", "Added successfully!")
        ->with("success", true);
        } catch (\Exception $e) {
            return redirect()
            ->back()
            ->with("msg", "Something went wrong!")
            ->with("success", false);
        }
    }

    public function storeTbilisis(Request $request)
    {
        //validation
        $this->validate($request, [
            'name' => '',
            'nameTwo' => '',
            'nameThree' => '',
            'nameFour' => '',
            'nameFive' => '',
            'nameSix' => '',
            'nameSeven' => '',
            'nameEight' => '',
        ]);
        try {
        $FromTbilisi = new FromTbilisi();
        $FromTbilisi->name = $request->name;
        $FromTbilisi->nameTwo = $request->nameTwo;
        $FromTbilisi->nameThree = $request->nameThree;
        $FromTbilisi->nameFour = $request->nameFour;
        $FromTbilisi->nameFive = $request->nameFive;
        $FromTbilisi->nameSix = $request->nameSix;
        $FromTbilisi->nameSeven = $request->nameSeven;
        $FromTbilisi->nameEight = $request->nameEight;
        $FromTbilisi->save();
        return redirect()
        ->back()
        ->with("msg", "Added successfully!")
        ->with("success", true);
        } catch (\Exception $e) {
            return redirect()
            ->back()
            ->with("msg", "Something went wrong!")
            ->with("success", false);
        }
    }
}
