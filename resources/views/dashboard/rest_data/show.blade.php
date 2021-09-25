@extends('dashboard.app')
@section('content')
    
    <section class="content ">
        <div class="container-fluid w-75 d-flex flex-column justify-content-center">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Restaran malumotlari</h2>
                    </div>
                    <div class="container d-flex flex-row-reverse ">
                        <a class="btn btn-primary" href="{{ route('rest_data.index') }}">Ortga</a>
                    </div>
                </div>
            </div>
            <div class="row pt-5 d-flex justify-content-between">
                <div class="col">
                 
                    <div class="col">
                        <div class="form-group text-dark d-flex flex-column">
                            <strong class="fs-5">Tavsif:  </strong>
                            <h5>{{$data->title}}</h5>
                            <h6> {{ $data->description }}</h6>
                        </div>
                    </div>
                </div>
               
                <div class="col pl-5 d-flex flex-column ">
                    <div>
                        <div class="form-group text-dark d-flex flex-column">
                            <strong class="fs-6">Menyular: </strong>
                            <h6> {{ $data->menus }}</h6>
                        </div>
                    </div>
                    <div>
                        <div class="form-group text-dark d-flex flex-column">
                            <strong class="fs-6">Oylik retseplar soni: </strong>
                            <h6> {{ $data->month_new_recipe }}</h6>
                        </div>
                    </div>
                    <div>
                        <div class="form-group text-dark d-flex flex-column">
                            <strong class="fs-6">Facebookdagi mijozlar: </strong>
                            <h6> {{ $data->face_custom }}</h6>
                        </div>
                    </div>
                    <div>
                        <div class="form-group text-dark d-flex flex-column">
                            <strong class="fs-6">Kiritilgan vaqt: </strong>
                            <h6> {{ $data->created_at }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection