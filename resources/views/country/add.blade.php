@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3 mt-5">
        <h1 class="text-center">Country Entry</h1>
        <form action="">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter a Country Name" class="form-control">
            </div>
            <div class="form-group">
                <label for="about">About</label>
                <textarea name="about" id="about" class="form-control ckeditor"></textarea>
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
</script>