@extends('dashboard.app')
@section('content')
<div class="container pl-5 pr-5 pt-2">
    <div class="pull-left text-center">
        <h2>Categoriyalar tavsifi</h2>
    </div>
    <div class="container d-flex flex-row-reverse ">
        <a class="btn btn-primary" href="{{ route('cat_desc.index') }}"> Qaytish</a>
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
    <form action="{{route('cat_desc.store')}}" method="POST" class="pt-2 mb-5 mt-3" enctype="multipart/form-data">
        @csrf
       
        <div class="form-row d-flex">
            <div class="form-group  col-md-6 pl-5">
                <label >Nom</label> <br>
                <input type="text" name="name" class="form-control mb-1 w-75" placeholder="Nom:">
                <label>Holat</label> <br>
                <select type="text" name="status" class="custom-select w-75">
                    <option selected >Active</option>
                    <option value="No Active">No Activ</option>
                </select>               
                <div >
                    <label>Kategoriya nomi</label> <br>
                    <select type="text" name="cat_name" class="custom-select w-75">
                        @foreach ($categories as $item)
                            <option selected autocomplete="off" placeholder="Kategoriya nomi:">Kategoriya</option>
                            <option value="{{$item->name_uz}}">{{$item->name_uz}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group col-md-6">
                    <label>Tavsif</label>
                    <textarea class="d-block w-100" type="text" name="description" rows="7" placeholder="Tavsif:"></textarea>
                </div>
        </div>
        <div class="d-flex justify-content-center mt-3">
            <button type="submit" class="btn btn-primary mt-3">Sign in</button>
        </div>
    </form>
    {{-- Form end --}}
</div>

    
@endsection
