@extends('restaurantly.app')
@section('content')
<main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Inner Page</h2>
          <ol>
            <li><a href="{{route('restaurent.index')}}">Chefs</a></li>
            <li>Inner Page</li>
          </ol>
        </div>

      </div>
    </section>
    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
        <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Chefs</h2>
            <p>Our Proffesional Chefs</p>
        </div>

        <div class="row">
            @foreach ($members as $item)
    
            <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
                <img src="{{asset($item->image)}}" class="img-fluid" alt="">
                <div class="member-info">
                <div class="member-info-content">
                    <h4>{{$item->name}}</h4>
                    <span>{{$item->position}}</span>
                </div>
                <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                </div>
                </div>
            </div>
            </div>
            @endforeach

            {{-- <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{asset('reststyle/assets/img/chefs/chefs-2.jpg')}}" class="img-fluid" alt="">
                <div class="member-info">
                <div class="member-info-content">
                    <h4>Sarah Jhonson</h4>
                    <span>Patissier</span>
                </div>
                <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                </div>
                </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
                <img src="{{asset('reststyle/assets/img/chefs/chefs-3.jpg')}}" class="img-fluid" alt="">
                <div class="member-info">
                <div class="member-info-content">
                    <h4>William Anderson</h4>
                    <span>Cook</span>
                </div>
                <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                </div>
                </div>
            </div>
            </div> --}}

        </div>

        </div>
    </section><!-- End Chefs Section -->
@endsection