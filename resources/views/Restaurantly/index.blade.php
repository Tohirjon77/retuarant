@extends('restaurantly.app')
@section('content')
<main id="main">
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Inner Page</h2>
        <ol>
          <li><a href="{{route('restaurent.index')}}">Home</a></li>
          <li>Inner Page</li>
        </ol>
      </div>

    </div>
  </section>
    
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>Restaurantly</span></h1>
          <h2>Delivering great food for more than 18 years!</h2>

          <div class="btns">
            <a href="{{route('restaurent.menu')}}" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
            <a href="{{route('restaurent.booktable')}}" class="btn-book animated fadeInUp scrollto">Book a Table</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-delay="300">
          <a href="https://youtu.be/cqN3n5gRl_U" class="venobox play-btn" data-vbtype="video" data-autoplay="true"></a>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

@endsection