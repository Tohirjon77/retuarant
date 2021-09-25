@extends('dashboard.app')
@section('content')
    <div class="container pt-3">
        <div class="d-flex justify-content-center flex-column p-1">
            <h2 class="text-center mb-4">Rasmlar jadvali jadvali</h2>
            <div class="d-flex justify-content-between mt-3 mb-3">
                <a href="{{route('galleries.create')}}" type="button" class=" w-25 btn btn-primary mb-2 pt-2 d-inline">Gallareya qo'shish</a>
                <nav class="d-inline  navbar navbar-light bg-light d-flex flex-row-reverse">
                    <form class="form-inline" action="{{route('galleries.search')}}" method="get">
                        <input class="form-control mr-sm-2" type="search" name="query" placeholder="Gallareya qidirish" aria-label="Search">
                        <button class="btn btn-primary my-2 my-sm-0" type="submit" name="submit"> <i class="fas fa-search"></i></button>
                    </form>
                </nav>
            </div>
            
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Rasm</th>
                        <th>Gallareya turi</th>
                        <th>Holati</th>
                        <th>Kiritilgan vaqt</th>
                        <th>Amallar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gallery as $key=>$item)
                        <tr>
                            @php
                                $i=1
                            @endphp
                            <th>{{$gallery->firstItem()+$key}}</th>
                            <td><img width="150px" src="{{asset($item->image)}}" alt=""></td>
                            <td>{{$item->picture_type}}</td>
                            <td>{{$item->status}}</td>
                            <td>{{$item->created_at}}</td>
                            <td width="170px"><form action="{{route('galleries.destroy', $item->id)}}" method="POST">
                                    <a href="{{route('galleries.show', $item->id)}}" class="btn btn-success"><i class="far fa-eye"></i></a>
                                    <a href="{{route('galleries.edit', $item->id)}}" class="btn btn-primary m-1"><i class="fas fa-pencil-alt"></i></a>
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
                <div class="d-block">
                    {{$gallery->links()}}
                </div>
            </div>
        </div>
    </div>

@endsection