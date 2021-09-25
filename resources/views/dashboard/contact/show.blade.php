@extends('dashboard.app')
@section('content')
<div class="container pl-5 pr-5 pt-2">
    <div class="pull-left text-center">
        <h2>Contact malumotlari</h2>
    </div>
    <div class="container d-flex flex-row-reverse ">
        <a class="btn btn-primary" href="{{ route('contact.index') }}"> Qaytish</a>
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
                <label >Ism:</label>
                <h6>  {{$contact->name}}</h6>
                <label>Email: </label> <h6>{{$contact->email}}</h6>
                <label> Telefon: </label>
                <h6> {{$contact->phone}}</h6>
                <label> Sana: </label>
                <h6> {{$contact->date}}</h6>
                <label> Vaqt: </label>
                <h6> {{$contact->time}}</h6>
            </div>
            <div class="form-group  col-md-6 pl-5">
                <label> Odam soni: </label>
                <h6> {{$contact->people}}</h6>
                <label>Xabar: </label>
                <h6> {{$contact->message}}</h6>
               
                <div >
                    <label>Xabar yozilgan vaqt: </label>
                    <h6> {{$contact->created_at}}</h6>
                </div>
            </div>
            
        </div>
</div>

    
@endsection