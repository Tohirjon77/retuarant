@extends('dashboard.app')
@section('content')

    <div  class="d-flex justify-content-center flex-column p-3">
        <h2 class="pb-3">Bog'lanish uchun malumotlar</h2>
        <div class="d-flex justify-content-between mt-3 mb-3">
            <a href="\restaurant/book a table" type="button" class=" w-25 btn btn-primary mb-2 pt-2 d-inline">Malumot qo'shish</a>
            {{-- <nav class="d-inline  navbar navbar-light bg-light d-flex flex-row-reverse">
                <form class="form-inline" action="{{route('galleries.search')}}" method="get">
                    <input class="form-control mr-sm-2" type="search" name="query" placeholder="Azo qidirish" aria-label="Search">
                    <button class="btn btn-primary my-2 my-sm-0" type="submit" name="submit"> <i class="fas fa-search"></i></button>
                </form>
            </nav> --}}
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
                <th>Ism</th>
                <th>Email</th>
                <th>Telefon</th>
                <th>Sana</th>
                <th>Vaqti</th>
                <th>Odam soni</th>
                <th  width="320px">Message</th>
                <th width="100px">Kiritilgan vaqt</th>
                <th width="60px" >Amallar</th>
            </tr>
            </thead>
            <tbody>
            
                @foreach ($contact as $key=>$item)
                
                    <tr>
                        <td>{{$contact->firstItem() + $key}}</td>
                        <td>{{$item->name}}</td>
                        <td >{{$item->email}}</td>
                        <td >{{$item->phone}}</td>
                        <td >{{$item->date}}</td>
                        <td >{{$item->time}}</td>
                        <td >{{$item->people}}</td>
                        <td >{{$item->message}}</td>
                        <td>{{$item->created_at}}</td>
                        <td width="55px" class="d-flex justify-content-center  border-0">
                            <form class="pl-4 row " action="{{route('contact.destroy', $item->id)}}" method="POST" >
                                <a class="btn btn-danger mb-2 " href="{{route('contact.show', $item->id)}}"><i class="far fa-eye"></i></a>
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
                {{$contact->links()}}
            </div>
        </div>


</div>

@endsection