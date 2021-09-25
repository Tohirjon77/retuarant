@extends('dashboard.app')
  
@section('content')

  

  <!-- Main content -->
  <section class="content">
    <div class="container pt-3">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Gallareyaga rasm qo'shish</h2>
                </div>
                <div class="container mt-3 d-flex flex-row-reverse w-75">
                    <a class="btn btn-primary" href="{{ route('galleries.index') }}">Ortga</a>
                </div>
            </div>
        </div>
     
@if ($errors->any())
    <div class="alert alert-primary">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     
@if ($message = Session::get('success'))
        <div class="alert w-50 alert-primary">
            <p>{{ $message }}</p>
        </div>
    @endif 
<form class="container w-75 pt-5" action="{{ route('galleries.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
     <div class="row d-flex">
        <div class="w-50">
            <div class="form-group">
                <strong>Rasm:</strong>
                <input type="file" multiple name="image" class="form-control" placeholder="image">
            </div>
        </div>
        <div class="d-flex mt-5">
            <div class="form-group d-flex w-50">
                <strong>Gallareya turi:</strong>
                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="picture_type" id="exampleRadios1" value="Restaran" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Restaran
                    </label>
                </div>
                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="picture_type" id="exampleRadios2" value="Oziq ovqat">
                    <label class="form-check-label" for="exampleRadios2">
                        Oziq ovqat
                    </label>
                </div>
            </div>
            <div class="form-group d-flex">
                <strong>Holati:</strong>
                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="Active" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Active
                    </label>
                </div>
                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="No active">
                    <label class="form-check-label" for="exampleRadios2">
                        No active
                    </label>
                </div>
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12 text-end  mt-5">
                <button type="submit" class="btn btn-primary">Saqlash</button>
        </div>
    </div>
     
</form>
@endsection