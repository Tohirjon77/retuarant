@extends('dashboard.app')
@section('content')
<div class="container pl-5 pr-5 pt-2">
    <div class="pull-left text-center">
        <h2>Azoni tahrirlash</h2>
    </div>
    <div class="container d-flex flex-row-reverse ">
        <a class="btn btn-primary" href="{{ route('team.index') }}"> Qaytish</a>
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
    <form action="{{route('team.update', $member->id)}}" method="POST" class="pt-2 mb-5" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nom</label>
                <input type="text" name="name" class="form-control" value="{{$member->name}}" placeholder="Nomi">
            </div>
            <div class="form-group col-md-6">
                <label>Lavozimi</label>
                <input type="text" name="position" class="form-control" value="{{$member->position}}" placeholder="Lavozim">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label >Tavfsilotlar</label>
                <textarea class="d-block w-100 p-2"  name="description" rows="6">{{$member->description}}</textarea>
            </div>
            <div class="form-group col-md-6">
                <label>Rasm</label>
                <input type="file" multiple name="image" class="form-control" placeholder="image">
                <img width="200px" src="{{asset($member->image)}}" alt="">
            </div>
        </div>
        
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary mt-3">Sign in</button>
        </div>
    </form>
    {{-- Form end --}}
</div>

    
@endsection