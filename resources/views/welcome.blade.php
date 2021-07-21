@extends('layouts.master')

@section('content')
<h3 class="display-4 text-center pt-5 pb-1">
    Country City Management System
</h3>
<p class="text-center py-1">A Web Application for storing and retrieving information of several countries and their cities.</p>
<div class="row mt-5">
    <div class="card col-md-3">
        <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{ route('country.add')}}">Add Country</a>
            </h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>

      <div class="card col-md-3">
        <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{ route('city.add') }}">Add City</a>
            </h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>

      <div class="card col-md-3">
        <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{ route('country.show')}}">All Countries</a>
            </h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>

      <div class="card col-md-3">
        <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{ route('city.show') }}">All Cities</a>
            </h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    
    
</div>
    
 @endsection
        
  