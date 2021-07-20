<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function addCountry()
    {
        return view('country.add');
    }

    public function submitCountry(Request $request)
    {
        try {
            $country = Country::create([
                'name' => $request->name,
                'about' => $request->about
            ]);
            session()->flash('message', 'Country Added Successfully');
            session()->flash('type', 'success');
        } catch (Exception $e) {
            session()->flash('message', $e->getMessage());
            session()->flash('type', 'danger');
        }

        return redirect()->back();
    }
}