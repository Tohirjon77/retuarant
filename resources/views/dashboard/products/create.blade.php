@extends('dashboard.app')
@section('content')
<div class="container pl-5 pr-5 pt-2">
    <div class="pull-left text-center">
        <h2>Add New Categories</h2>
    </div>
    <div class="container d-flex flex-row-reverse ">
        <a class="btn btn-primary" href="{{ route('products.index') }}"> Qaytish</a>
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
    <form action="{{route('products.store')}}" method="POST" class="pt-2 mb-5" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nomi: uz</label>
                <input type="text" name="name_uz" class="form-control" placeholder="Nomi uz">
            </div>
            <div class="form-group col-md-6">
                <label>Nomi: ru</label>
                <input type="text" name="name_ru" class="form-control" placeholder="Nomi ru">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label >Tavsifi: uz</label>
                <textarea class="d-block w-100 p-2"  name="description_uz" rows="5"></textarea>
            </div>
            <div class="form-group col-md-6">
                <label>Tavsifi: ru</label>
                <textarea class="d-block w-100 p-2" name="description_ru" rows="5"></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Tarkibi: uz</label>
                <textarea class="d-block w-100 p-2" name="structura_uz" rows="5"></textarea>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Tarkibi: ru</label>
                <textarea class="d-block w-100 p-2" name="structura_ru" rows="5"></textarea>
            </div>
        </div>
        
        <div class="form-row d-flex">
            <div class="form-group w-25 col">
                <div>
                    <strong>Image:</strong>
                    <input type="file" multiple name="image" class="form-control mt-2" placeholder="image">
                </div>
            </div>
            <div class="form-group w-25 col">
                <label>Narx</label>
                <input type="text"  name="price" placeholder="Narx" class="form-control ">
            </div>
            <div class="form-group w-25 col">
                <label>Kategoriya</label>
                <select type="text" name="cat_name" class="custom-select">
                    @foreach ($categories as $item)
                        <option selected autocomplete="off" placeholder="category nomi">Kategoriya</option>
                        <option value="{{$item->name_uz}}">{{$item->name_uz}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group w-25 col">
                <label for="inputState">Holati</label>
                <select type="text" name="status" class="custom-select">
                    <option selected >Active</option>
                    <option value="No Active">No Activ</option>
                </select>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>
    {{-- Form end --}}
</div>

    
@endsection