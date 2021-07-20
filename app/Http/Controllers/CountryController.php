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
    public function ShowAllCountries()
    {
        $data = [];
        $temp = 0;
        $data['number_of_dwellers'] = [];
        $data['countries'] = Country::with('cities')->paginate(10);

        foreach ($data['countries'] as $key => $country) {
            //dd($country);
            foreach ($country->cities as $city) {
                $temp += $city->number_of_dwellers;
            }
            $data['number_of_dwellers'][] = $temp;
            $temp = 0;
        }

        //dd($data['number_of_dwellers']);

        return view('country.show', $data);
    }
    // public function searchCountries($key)
    // {
    //     $countries = Country::where('name', 'like', '%' . $key . '%')->get();
    //     dd($countries);
    //     return view()
    // }
}