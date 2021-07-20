@extends('layouts.master')

@section('content')
<div class="col-md-6 offset-md-3 mt-5 display-4">
    <div>
    <a href="{{ route('country.add')}}">Add Country</a>
    </div>
    <div>
    <a href="{{ route('city.add') }}">Add City</a>
    </div>
</div>
    
 @endsection
        
  