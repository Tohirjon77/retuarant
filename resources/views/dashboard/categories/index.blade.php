@extends('dashboard.app')
@section('content')
    <div class="d-flex justify-content-center flex-column p-3">
    <h2 class="pb-2">Categoriyalar jadvali</h2>
    <a href="categories/create" type="button" class=" w-25 btn btn-primary mb-3 d-block">Categoriya qo'shish</a>
    <nav class="navbar navbar-light bg-light d-flex flex-row-reverse">
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Qidirish" aria-label="Search">
          <button class="btn btn-primary my-2 my-sm-0" type="submit"> <i class="fas fa-search"></i></i></i></button>
        </form>
    </nav>
   <div class="d-flex justify-content-center">
        @if ($message = Session::get('success'))
            <div class="alert alert-warning w-25 pt-4 text-center">
                <p>{{ $message }}</p>
            </div>
        @endif 
   </div>
    <table border="1px" class="table table-bordered bordered-primary w-100 ">
        <thead >
        <tr >
            <th>ID</th>
            <th>Nom uz</th>
            <th>Nom ru</th>
            <th>Tavsif uz</th>
            <th>Tavsif ru</th>
            <th>Rasm</th>
            <th>Holat</th>
            <th>Yaratilgan</th>
            <th>Amallar</th>
        </tr>
        </thead>
        <tbody>
           
            @foreach ($categories as $key=>$item)
            
                <tr>
                    <td>{{$categories->firstItem() + $key}}</td>
                    <td>{{$item->name_uz}}</td>
                    <td>{{$item->name_ru}}</td>
                    <td width="330px">{{$item->description_uz}}</td>
                    <td width="330px">{{$item->description_ru}}</td>
                    <td><img width="80px" src="{{asset($item->image)}}" alt=""></td>
                    <td>{{$item->status}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>
                        
                        <form action="{{route('categories.destroy', $item->id)}}" method="POST" >
                            <a class="btn btn-danger w-75 mb-1 ml-2" href="{{route('categories.show', $item->id)}}"><i class="far fa-eye"></i></a>
                            <a class="btn btn-primary w-75 mb-1 ml-2" href="{{route('categories.edit',$item->id)}}"><i class="far fa-edit"></i></a>
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-secondary w-75 ml-2"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
       
        </tbody>
    </table>
    <div class="pull-left d-flex align-items-end flex-column">
       
        <div class="d-block">
            {{$categories->links()}}
        </div>
    </div>


</div>

@endsection