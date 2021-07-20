<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CountryController extends Controller
{
    public function addCountry()
    {
        return view('country.add');
    }

    public function submitCountry(Request $request)
    { //validation
        $rules = [
            'name' => 'required|unique:countries,name',
            'about' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //insert data
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