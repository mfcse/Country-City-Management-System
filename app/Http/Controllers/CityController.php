<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CityController extends Controller
{
    public function addCity()
    {
        $data = [];
        $data['countries'] = Country::select('name', 'id')->get();
        //dd($data['countries']);
        return view('city.add', $data);
    }
    public function submitCity(Request $request)
    {


        //validation
        $rules = [
            'name' => 'required|unique:cities,name',
            'about' => 'required',
            'number_of_dwellers' => 'required|numeric',
            'location' => 'required',
            'weather' => 'required',
            'country_id' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            //dd($request->except('_token'));
            return redirect()->back()->withErrors($validator)->withInput();
        }
        //dd($request->all());
        // var_dump($request->country_id);
        // die;
        //insert data
        try {
            $city = City::create([
                'name' => $request->name,
                'about' => $request->about,
                'number_of_dwellers' => $request->number_of_dwellers,
                'location' => $request->location,
                'weather' => $request->weather,
                'country_id' => $request->country_id,
            ]);
            session()->flash('message', 'City Added Successfully');
            session()->flash('type', 'success');
        } catch (Exception $e) {
            session()->flash('message', $e->getMessage());
            session()->flash('type', 'danger');
        }

        return redirect()->back();
    }
    public function ShowAllCity()
    {
        return view('city.show');
    }
}