@extends('dashboard.app')
@section('content')
<div class="container pl-5 pr-5 pt-2">
    <div class="pull-left text-center">
        <h2>Malumotni tahrirlash</h2>
    </div>
    <div class="container d-flex flex-row-reverse ">
        <a class="btn btn-primary" href="{{ route('rest_data.index') }}"> Qaytish</a>
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
    <form action="{{route('rest_data.update', $data->id)}}" method="POST" class="pt-2 mb-5" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        {{-- <div class="form-row">
            <div class="form-group col-md-6">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control" value="{{$data->phone}}" placeholder="Nomi">
            </div>
            <div class="form-group pl-5 col-md-6">
                <label>Joylashuvi</label>
                <input type="text" name="location" class="form-control" value="{{$data->location}}" placeholder="Lavozim">
            </div>
        </div> --}}
        <div class="form-row">
            <div class="form-group col-md-6">
                <label >Tavfsilotlar</label>
                <div class="border p-2">
                    <input type="text" name="title" class="form-control mb-2" placeholder="Sarlavha" value="{{$data->title}}">
    
                    <textarea class="d-block w-100 p-2"  name="description" rows="7">{{$data->description}}</textarea>
    
                    </div>
            </div>
            <div class="form-group pl-5  col-md-6">
                <label>Menyular</label>
                <input type="text" multiple name="menus" value="{{$data->menus}}" class="form-control w-50" placeholder="Menyular">
                <div class="form-group ">
                    <label >Oylik retseptlar</label>
                    <input type="text" name="month_new_recipe" value="{{$data->month_new_recipe}}" class="w-50 form-control" placeholder="Retseptlar">
                </div>
                <div class="form-group ">
                    <label>Facebookdagi mijozlar</label>
                    <input type="text"name="face_custom" class="form-control w-50" value="{{$data->face_custom}}" placeholder="Mijozlar soni">
                </div>
            </div>
        </div>
        <div class="form-row">
            
           
        </div>
        
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary mt-3">Sign in</button>
        </div>
    </form>
    {{-- Form end --}}
</div>

    
@endsection