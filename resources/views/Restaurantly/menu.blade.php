@extends('restaurantly.app')
@section('content')
<main id="main">
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Inner Page</h2>
        <ol>
          <li><a href="{{route('restaurent.index')}}">Menu</a></li>
          <li>Inner Page</li>
        </ol>
      </div>

    </div>
  </section>
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
            <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Menu</h2>
                <p>Check Our Tasty Menu</p>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                <ul id="menu-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    @foreach ($categories as $item)
                    <li data-filter=".filter-{{$item->name_uz}}">{{$item->name_uz}}</li>
                    @endforeach
                </ul>
                </div>
            </div>
            <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
               @foreach ($product as $item)
                  <div class="col-lg-6 menu-item filter-{{$item->cat_name}}">
                    <img src="{{asset($item->image)}}" class="menu-img" alt="">
                    <div class="menu-content">
                        <a href="#">{{$item->name_uz}}</a><span>$5.95</span>
                    </div>
                    <div class="menu-ingredients">
                       {{$item->description_uz}}
                    </div>
                    </div>
                @endforeach
            </div>
            </div>
        </section><!-- End Menu Section -->
    
<!-- ======= Specials Section ======= -->
<section id="specials" class="specials">
    <div class="container menu" data-aos="fade-up">

      <div class="section-title">
        <h2>Specials</h2>
        <p>Check Our Specials</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="110">
        <div class="col-lg-3">
          <ul id="menu-fliters" class="nav nav-tabs d-flex flex-column rounded-0 border-right border-warning">
            @foreach ($categories as $cat)
            <li data-toggle="tab" data-filter=".filter-{{$cat->name_uz}}" class="nav-item ">
              {{$cat->name_uz}}
            </li>
            @endforeach
          </ul>
        </div>
        <div class="col-lg-9 mt-4 mt-lg-0">
          <div class="tab-content">
            < class="tab-pane active show" id="tab-1">
              {{-- @foreach ($categories as $cat)

              <div class="row menu-item filter-{{$cat->name_uz}}">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>{{$cat->name_uz}}</h3>
                  <p class="font-italic">{{$cat->description_uz}}</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="{{asset('reststyle/assets/img/specials-1.png')}}" alt="" class="img-fluid">
                </div>



              <div class="row menu-item filter-{{$cat->name_uz}}">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>{{$cat->name_uz}}</h3>
                  <p class="font-italic">{{$cat->description_uz}}</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="{{asset('reststyle/assets/img/specials-1.png')}}" alt="" class="img-fluid">
                </div>
              </div>
              @endforeach
              
            </div> --}}
            <div class="tab-pane" id="tab-2">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Et blanditiis nemo veritatis excepturi</h3>
                  <p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                  <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="{{asset('reststyle/assets/img/specials-2.png')}}" alt="" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Specials Section -->



        @endsection