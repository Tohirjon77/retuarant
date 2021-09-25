@extends('dashboard.app')
  
@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          {{-- <h1 class="m-0">Create Categories</h1> --}}
        </div><!-- /.col -->

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <h2>Edit Categories</h2>
        </div>
        <div class="container d-flex flex-row-reverse w-75">
            <a class="btn btn-primary" href="{{ route('categories.index') }}"> Back</a>
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
<form class="container w-75" action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
     <div class="row">
        <div class="form-row d-flex ">
            <div class="form-group col">
                <strong>Name uz:</strong>
                <input type="text" name="name_uz" class="form-control" value="{{$category->name_uz}}">
            </div>
            <div class="form-group col">
                <strong>Name ru:</strong>
                <input type="text" name="name_ru" class="form-control" value="{{$category->name_ru}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description uz:</strong>
                <textarea type="text" name="description_uz" placeholder="Tavsif uz" value="{{$category->description_uz}}" class="form-control"  rows="3">{{$category->description_uz}}</textarea>   
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description ru:</strong>
                <textarea type="text" name="description_ru" placeholder="Tavsif ru" value="{{$category->description_ru}}" class="form-control"  rows="3">{{$category->description_ru}}</textarea>   
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" multiple name="image" class="form-control" placeholder="image">
                <img class="w-50" src="{{asset($category->image)}}" alt="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group d-flex">
                <strong>Status:</strong>
                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="{{$category->status}}" checked>
                    <label class="form-check-label" for="exampleRadios1">
                    {{$category->status}}
                    </label>
                </div>
            </div>
            <div class="form-group d-flex">
                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="Active">
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
       
        <div class="col-xs-12 col-sm-12 col-md-12 text-end">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
</form>
@endsection