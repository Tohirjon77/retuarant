@extends('dashboard.app')
@section('content')
    <div class="d-flex justify-content-center flex-column p-3">
        <h2 class="pb-5">Jamoa azolari jadvali</h2>
        <div class="d-flex justify-content-between mt-3 mb-3">
            <a href="{{route('team.create')}}" type="button" class=" w-25 btn btn-primary mb-2 pt-2 d-inline">Azo qo'shish</a>
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
        <table border="1px" class="table table-bordered bordered-primary w-100 ">
            <thead >
            <tr >
                <th>ID</th>
                <th>Nom</th>
                <th>Lavozim</th>
                <th>Tavsif</th>

                <th>Rasm</th>
                <th>Youtube</th>
                <th>Facebook</th>
                <th>Kiritilgan vaqt</th>
                <th>Amallar</th>
            </tr>
            </thead>
            <tbody>
            
                @foreach ($communityMembers as $key=>$item)
                
                    <tr>
                        <td>{{$communityMembers->firstItem() + $key}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->position}}</td>
                        <td class="ower">{{$item->description}}</td>
                        <td><img width="100px" src="{{asset($item->image)}}" alt=""></td>
                        <td>{{$item->created_at}}</td>
                        <td width="85px" class="d-flex justify-content-center ">
                            <form class="w-100" action="{{route('team.destroy', $item->id)}}" method="POST" >
                                <a class="btn btn-danger  mb-1 ml-2" href="{{route('team.show', $item->id)}}"><i class="far fa-eye"></i></a>
                                <a class="btn btn-primary  mb-1 ml-2" href="{{route('team.edit',$item->id)}}"><i class="far fa-edit"></i></a>
                                @csrf
                                @method('delete')
                                <button  type="submit" class="btn btn-secondary ml-2 "><i class="fas fa-trash-alt pr-1"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        
            </tbody>
        </table>
        <div class="pull-left d-flex align-items-end flex-column">
        
            <div class="d-block">
                {{$communityMembers->links()}}
            </div>
        </div>


</div>

@endsection