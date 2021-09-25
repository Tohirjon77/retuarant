@extends('dashboard.app')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-center flex-column p-1">
            <h2 class="text-center">Mahsulotlar jadvali</h2>
            <div class="d-flex justify-content-between mt-3 mb-3">
                <a href="{{route('products.create')}}" type="button" class=" w-25 btn btn-primary mb-2 pt-2 d-inline">Mahsulot qo'shish</a>
                <nav class="d-inline  navbar navbar-light bg-light d-flex flex-row-reverse">
                    <form class="form-inline" action="{{route('products.search')}}" method="get">
                        <input class="form-control mr-sm-2" type="search" name="query" placeholder="Mahsulot qidirish" aria-label="Search">
                        <button class="btn btn-primary my-2 my-sm-0" type="submit" name="submit"> <i class="fas fa-search"></i></button>
                    </form>
                </nav>
            </div>
            <div class="d-flex justify-content-center">
                @if ($message = Session::get('success'))
                    <div class="alert alert-warning w-25 pt-4 text-center">
                        <p>{{ $message }}</p>
                    </div>
                @endif 
            </div>
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom uz</th>
                        <th width="250px">Tavsif uz</th>
                        <th width="200px">Tarkibi uz</th>
                        <th width="100px">Rasm</th>
                        <th>Narx</th>
                        <th>Categoriya nomi</th>
                        <th>Holati</th>
                        <th>Kiritilgan vaqt</th>
                        <th>Amallar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $key=>$item)
                        <tr>
                            <th >{{$products->firstItem() + $key}}</th>
                            <td>{{$item->name_uz}}</td>
                            <td>{{$item->description_uz}}</td>
                            <td>{{$item->structura_uz}}</td>
                            <td><img width="100px" src="{{asset($item->image)}}" alt=""></td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->cat_name}}</td>
                            <td>{{$item->status}}</td>
                            <td>{{$item->created_at}}</td>
                            <td><form action="{{route('products.destroy', $item->id)}}" method="POST">
                                    <a href="{{route('products.show', $item->id)}}" class="btn btn-success"><i class="far fa-eye"></i></a>
                                    <a href="{{route('products.edit', $item->id)}}" class="btn btn-primary m-1"><i class="fas fa-pencil-alt"></i></a>
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger " type="submit" name="submit"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
           
            <div class="pull-left d-flex align-items-end flex-column">
                <p> 0{{$products->firstItem()}} dan 0{{$products->lastItem()}} gacha. Umumiy {{$products->total()}} data</p>
                <div class="d-block">
                    {{$products->links()}}
                </div>
            </div>
        </div>
    </div>

@endsection