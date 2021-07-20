@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3 mt-5">
        <h1 class="text-center mb-5">View Cities</h1>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if (session()->has('message'))
            <div class="alert alert-{{session('type')}} alert-dismissible fade show" role="alert">
                {{session()->get('message')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
            @endif
            
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter a City Name" class="form-control">
            </div>
            <div class="form-group">
                <label for="about">About</label>
                <textarea name="about" id="about" class="form-control ckeditor"></textarea>
            </div>
            <div class="form-group">
                <label for="number_of_dwellers">Number Of Dwellers</label>
                <input type="text" name="number_of_dwellers" id="number_of_dwellers" class="form-control">
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" name="location" id="location" class="form-control">
            </div>
            <div class="form-group">
                <label for="weather">Weather</label>
                <input type="text" name="weather" id="weather" class="form-control">
            </div>
            <div class="form-group">
                <label for="country_id">Countries</label>
                <select name="country_id" id="country_id" class="form-control">
                    @foreach ($countries as $country)
                        <option value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                </select>
                
            </div>
            <button class="btn btn-success" type="submit">Submit</button>
        </form>
    </div>
</div>

    
@endsection

<script src="//cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3 mt-5">
        <h1 class="text-center mb-5">City Entry</h1>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if (session()->has('message'))
            <div class="alert alert-{{session('type')}} alert-dismissible fade show" role="alert">
                {{session()->get('message')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
            @endif
            
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter a City Name" class="form-control">
            </div>
            <div class="form-group">
                <label for="about">About</label>
                <textarea name="about" id="about" class="form-control ckeditor"></textarea>
            </div>
            <div class="form-group">
                <label for="number_of_dwellers">Number Of Dwellers</label>
                <input type="text" name="number_of_dwellers" id="number_of_dwellers" class="form-control">
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" name="location" id="location" class="form-control">
            </div>
            <div class="form-group">
                <label for="weather">Weather</label>
                <input type="text" name="weather" id="weather" class="form-control">
            </div>
            <div class="form-group">
                <label for="country_id">Countries</label>
                <select name="country_id" id="country_id" class="form-control">
                    @foreach ($countries as $country)
                        <option value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                </select>
                
            </div>
            <button class="btn btn-success" type="submit">Submit</button>
        </form>
    </div>
</div>

    
@endsection
