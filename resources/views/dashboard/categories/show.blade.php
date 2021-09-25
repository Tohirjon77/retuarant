@extends('dashboard.app')
@section('content')
    
    <section class="content ">
        <div class="container-fluid w-75 d-flex flex-column justify-content-center">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2> Show Category</h2>
                    </div>
                    <div class="container d-flex flex-row-reverse w-75">
                        <a class="btn btn-primary" href="{{ route('categories.index') }}"> Back</a>
                    </div>
                </div>
            </div>
            <div class="row w-75">
                {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group text-dark">
                        <strong class="fs-5 ">Id:</strong>
                        <h5>{{ $category->i }}</h5>
                    </div>
                </div> --}}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group text-dark">
                        <strong class="fs-5 ">Name uz:</strong>
                        <h5>{{ $category->name_uz }}</h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group text-dark">
                        <strong class="fs-5 ">Name ru:</strong>
                        <h5>{{ $category->name_uz }}</h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group text-dark">
                        <strong class="fs-5 ">Description uz:</strong>
                        <h5>{{ $category->description_uz }}</h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group text-dark">
                        <strong class="fs-5 ">Description ru:</strong>
                        <h5>{{ $category->description_ru }}</h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group text-dark">
                        <strong class="fs-5 ">Image:</strong><br>
                        <img class="w-50" src="{{ asset($category->image) }}" alt="ghdfsds">
                    </div>
                </div>
            </div>
        </div>


    </section>

@endsection