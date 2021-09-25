@extends('dashboard.app')
@section('content')
<div class="container pl-5 pr-5 pt-2">
    <div class="pull-left text-center">
        <h2>Restaran malumotlari</h2>
    </div>
    <div class="container d-flex flex-row-reverse ">
        <a class="btn btn-primary" href="{{ route('call.index') }}"> Qaytish</a>
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
    {{-- Form start --}}
   
        <div class="form-row d-flex mt-5">
            <div class="form-group col-md-6">
                <label >Joylashuv:  {{$restcall->location}}</label>
                <h6></h6>
                <label>Email: {{$restcall->email}}</label> <br>
                    <label> Kiritilgan:  {{$restcall->created_at}}</label>
                    <h6></h6>
            </div>
            <div class="form-group  col-md-6 pl-5">
                <label>Ish vaqti:  {{$restcall->timelesson}}</label>
                <h6></h6>
               
                <div >
                    <label>Telefon:  {{$restcall->call}}</label>
                    <h6></h6>
                </div>
            </div>
            
        </div>
        
        <div class="d-flex justify-content-center mt-3">
            <button type="submit" class="btn btn-primary mt-3">Sign in</button>
        </div>
    
</div>

    
@endsection