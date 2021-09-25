@extends('dashboard.app')
@section('content')
<div class="container pl-5 pr-5 pt-2">
    <div class="pull-left text-center">
        <h2>Restaran malumotlari qo'shish</h2>
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
    <form action="{{route('call.update', $restcall->id)}}" method="POST" class="pt-2 mb-5 mt-3" enctype="multipart/form-data">
        @csrf
       @method('PUT')
        <div class="form-row d-flex">
            <div class="form-group col-md-6">
                <label >Joylashuv</label>
                    <input type="text" name="location" class="form-control mb-1 w-75" value="{{$restcall->location}}" placeholder="Joylashuv">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control w-75" value="{{$restcall->email}}" placeholder="Email">
            </div>
            <div class="form-group  col-md-6 pl-5">
                <label>Ish vaqti</label>
                <input type="text" name="timelesson" class="form-control w-50 mb-1" value="{{$restcall->timelesson}}" placeholder="Ish vaqti">
               
                <div >
                    <label>Telefon</label>
                    <input type="text" name="call" class="form-control w-50" value="{{$restcall->call}}" placeholder="Telefon">
                </div>
            </div>
            
        </div>
        
        <div class="d-flex justify-content-center mt-3">
            <button type="submit" class="btn btn-primary mt-3">Sign in</button>
        </div>
    </form>
    {{-- Form end --}}
</div>

    
@endsection