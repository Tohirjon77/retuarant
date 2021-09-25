@extends('dashboard.app')
@section('content')
    
    <section class="content ">
        <div class="container-fluid w-75 d-flex flex-column justify-content-center">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Azoni ko'rish</h2>
                    </div>
                    <div class="container d-flex flex-row-reverse ">
                        <a class="btn btn-primary" href="{{ route('team.index') }}">Ortga</a>
                    </div>
                </div>
            </div>
            <div class="row pt-5 d-flex justify-content-between">
                <div class="col">
                    <div class="form-group text-dark d-flex flex-column">
                        <strong class="fs-5 ">Rasm:</strong>
                        <img width="300px" src="{{asset($team->image)}}" alt="">
                    </div>
                </div>
                <div class="col d-flex flex-column ">
                    <div>
                        <div class="form-group text-dark d-flex flex-column ">
                            <strong  class="fs-5">Lavozimi: </strong>
                            <h5 class="d-block"> {{ $team->position }}</h5>
                        </div>
                    </div>
                    <div >
                        <div class="form-group text-dark d-flex flex-column">
                            <strong class="fs-5">Tavsif:  </strong>
                            <h5> {{ $team->description }}</h5>
                        </div>
                    </div>
                    <div>
                        <div class="form-group text-dark d-flex flex-column">
                            <strong class="fs-5">Kiritilgan vaqti: </strong>
                            <h5> {{ $team->created_at }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

@endsection