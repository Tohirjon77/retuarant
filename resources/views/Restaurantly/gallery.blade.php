@extends('restaurantly.app')
@section('content')
<main id="main">
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Inner Page</h2>
        <ol>
          <li><a href="{{route('restaurent.index')}}">Gallery</a></li>
          <li>Inner Page</li>
        </ol>
      </div>

    </div>
  </section>
     <!-- ======= Gallery Section ======= -->
     <section id="gallery" class="gallery">

        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Gallery</h2>
            <p>Some photos from Our Restaurant</p>
          </div>
        </div>
  
        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
  
          <div class="row no-gutters">
            @foreach ($galleries as $item)
          
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="{{asset($item->image)}}" class="venobox" data-gall="gallery-item">
                  <img style="height: 250px; width: 370px" src="{{asset($item->image)}}" alt="" class="img-fluid">
                </a>
              </div>
            </div>
            @endforeach
          </div>
  
        </div>
      </section><!-- End Gallery Section -->
  
@endsection