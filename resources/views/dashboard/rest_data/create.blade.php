@extends('dashboard.app')
@section('content')
<div class="container pl-5 pr-5 pt-2">
    <div class="pull-left text-center">
        <h2>Restaran malumotlari qo'shish</h2>
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
    <form action="{{route('rest_data.store')}}" method="POST" class="pt-2 mb-5 mt-3" enctype="multipart/form-data">
        @csrf
        
        <div class="form-row d-flex">
            <div class="form-group col-md-6">
                <label >Tavfsilotlar</label>
                <div class="border p-2">
                <input type="text" name="title" class="form-control mb-2" placeholder="Sarlavha">

                    <textarea class="d-block p-2 w-100"  name="description" placeholder="Matn" rows="6"></textarea>

                </div>
            </div>
            <div class="form-group  col-md-6 pl-5">
                <label>Menyular soni</label>
                <input type="text" name="menus" class="form-control w-50" placeholder="Menyular soni">
                <div class="mt-1 mb-1">
                    <label>Oylik retseplar soni</label>
                    <input type="text" name="month_new_recipe" class="form-control w-50" placeholder="Oylik retsep">
                </div>
                <div >
                    <label>Facebook mijozlar soni</label>
                    <input type="text" name="face_custom" class="form-control w-50" placeholder="Facebook mijozlari">
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