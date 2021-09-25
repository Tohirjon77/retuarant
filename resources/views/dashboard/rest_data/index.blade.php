@extends('dashboard.app')
@section('content')

    <div  class="d-flex justify-content-center flex-column p-3">
        <h2 class="pb-3">Restaran malumotlari</h2>
        <div class="d-flex justify-content-between mt-3 mb-3">
            <a href="{{route('rest_data.create')}}" type="button" class=" w-25 btn btn-primary mb-2 pt-2 d-inline">Malumot qo'shish</a>
            <nav class="d-inline  navbar navbar-light bg-light d-flex flex-row-reverse">
                <form class="form-inline" action="{{route('galleries.search')}}" method="get">
                    <input class="form-control mr-sm-2" type="search" name="query" placeholder="Azo qidirish" aria-label="Search">
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
        <table border="1px"  class="text-center table table-bordered bordered-primary w-100 ">
            <thead  class=" ">
            <tr>
                <th>ID</th>
                <th>Tafsilotlar</th>
                <th>Menyular soni</th>
                <th width="150px">Oylik yangi <br> retseplar soni</th>
                <th width="150px">Facebook <br> mijozlar soni</th>
                <th width="100px">Kiritilgan vaqt</th>
                <th width="70px">Amallar</th>
            </tr>
            </thead>
            <tbody>
            
                @foreach ($data as $key=>$item)
                
                    <tr>
                        <td>{{$data->firstItem() + $key}}</td>
                        <td><h5>{{$item->title}}</h5>{{$item->description}}</td>
                        <td >{{$item->menus}}</td>
                        <td >{{$item->month_new_recipe}}</td>
                        <td >{{$item->face_custom}}</td>
                        <td>{{$item->created_at}}</td>
                        <td width="50px" class="d-flex justify-content-center pl-3 border-0">
                            <form class="pl-2 row " action="{{route('rest_data.destroy', $item->id)}}" method="POST" >
                                <a class="btn btn-danger  " href="{{route('rest_data.show', $item->id)}}"><i class="far fa-eye"></i></a>
                                <a class="btn btn-primary mb-1 mt-1" href="{{route('rest_data.edit',$item->id)}}"><i class="far fa-edit"></i></a>
                                @csrf
                                @method('delete')
                                <button  type="submit" class="btn btn-secondary"><i class="fas fa-trash-alt pr-1"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        
            </tbody>
        </table>
        <div class="pull-left d-flex align-items-end flex-column">
        
            <div class="d-block">
                {{$data->links()}}
            </div>
        </div>


</div>

@endsection