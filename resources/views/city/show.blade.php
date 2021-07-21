
</script>@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-12 mt-5">
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
            
            <table class="table table-bordered table-hover" id="cityTable">
                <thead>
                    <tr>
                        <th>Serial</th>
                        <th>City Name</th>
                        <th>About</th>
                        <th>No. Of City Dwellers</th>
                        <th>Location</th>
                        <th>Weather</th>
                        <th>Country</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cities as $city)
                    <tr>
                     <td>{{$loop->index+1}}</td>
                     <td>{{$city->name}}</td>
                     <td>{!! $city->about !!}</td>
                     <td>{{ $city->number_of_dwellers }}</td>
                     <td>{{ $city->location }}</td>
                     <td>{{ $city->weather }}</td>
                     <td>{{$city->country->name}}</td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
         </div>
         {{$cities->links()}}
     </div>
     
     <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
     <script>
     $(document).ready(function() {
         $('#cityTable').DataTable();
     } );
     </script>
@endsection
