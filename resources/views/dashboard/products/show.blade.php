@extends('dashboard.app')
@section('content')
    
<div class="container w-75 pt-2">
    <div class="row">
        <div class="col margin-tb">
            <div class="pull-left text-center">
                <h2>Mahsulotni ko'rish</h2>
            </div>
            <div class="container d-flex flex-row-reverse ">
                <a class="btn btn-primary" href="{{ route('products.index') }}">Qaytish</a>
            </div>
        </div>
    </div>
    <div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nomi: uz</label>
                <div>{{$product->name_uz}}</div>
            </div>
            <div class="form-group col-md-6">
                <label>Nomi: ru</label>
                <div>{{$product->name_ru}}</div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label >Tavsifi: uz</label>
                <div>{{$product->description_uz}}</div>
            </div>
            <div class="form-group col-md-6">
                <label>Tavsifi: ru</label>
                <div>{{$product->description_ru}}</div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Tarkibi: uz</label>
                <div>{{$product->structura_uz}}</div>
            </div>
            <div class="form-group col-md-6">
                <label >Tarkibi: ru</label>
                <div>{{$product->structura_ru}}</div>
            </div>
        </div>
        
        <div class="form-row d-flex">
            <div class="form-group w-50">
                <div>
                    <strong>Image:</strong>
                    <img width="200px" src="{{asset($product->image)}}" alt="">
                </div>
            </div>
            <div class="d-flex flex-column pl-1">
                <div class="form-group">
                    <label>Narx</label>
                    <div>{{$product->price}}</div>
                </div>
                <div class="form-group ">
                    <label>Kategoriya</label>
                    <div>{{$product->cat_name}}</div>
                </div>
                <div class="form-group">
                    <label for="inputState">Holati</label>
                    <div>{{$product->status}}</div>
                </div>
            </div>
        </div>
    </div>

@endsection