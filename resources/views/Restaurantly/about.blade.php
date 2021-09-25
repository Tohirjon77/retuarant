@extends('restaurantly.app')
@section('content')
<main id="main">
    <section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
        <h2>Inner Page</h2>
        <ol>
            <li><a href="{{route('restaurent.index')}}">About</a></li>
            <li>Inner Page</li>
        </ol>
        </div>

    </div>
    </section>
<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

    <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
        <div class="about-img">
            <img src="{{asset($galleries->image)}}" alt="">
        </div>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            @foreach ($restdetail as $item)

                <h3 class="text-center ">{{$item->title}}</h3>
                <p>
                    {{$item->description}}
                </p>
            @endforeach
        </div>
    </div>

    </div>
</section><!-- End About Section -->
<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us">
    <div class="container" data-aos="fade-up">

    <div class="section-title">
        <h2>Why Us</h2>
        <p>Why Choose Our Restaurant</p>
    </div>

    <div class="row">
        @foreach ($restdetail as $item)
    
            <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
                <span>{{$item->face_custom}}</span>
                <h4>facebook mijozlari</h4>
                <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
            </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
                <span>{{$item->menus}}</span>
                <h4>Menyular</h4>
                <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
            </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
                <span>{{$item->month_new_recipe}}</span>
                <h4>Oylik yangi retseplar</h4>
                <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
            </div>
            </div>
        @endforeach

    </div>

    </div>
</section><!-- End Why Us Section -->


@endsection