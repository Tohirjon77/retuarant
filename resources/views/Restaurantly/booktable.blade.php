@extends('restaurantly.app')
@section('content')
<main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Inner Page</h2>
          <ol>
            <li><a href="{{route('restaurent.index')}}">Book a table</a></li>
            <li>Inner Page</li>
          </ol>
        </div>

      </div>
    </section>
    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
        <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Reservation</h2>
            <p>Book a Table</p>
        </div>

       
        <form action="{{route('contact.store')}}" class="for" method="post" role="form" >
            @csrf
            <div class="mb-3">
                <div class="">
                </div>
                 @if ($message = Session::get('success'))
                        <div class="alert sent-message">
                            <p>{{ $message }}</p>
                        </div>
                    @endif 
                </div>
            <div class="form-row">
            <div class="col-lg-4 col-md-6 form-group">
                <input type="text" name="name"  class="dark form-control" placeholder="Your Name" >
            </div>
            <div class="col-lg-4 col-md-6 form-group">
                <input type="email" class="dark form-control" name="email"  placeholder="Your Email">
            </div>
            <div class="col-lg-4 col-md-6 form-group">
                <input type="text" class="dark form-control" name="phone" placeholder="Your Phone">
            </div>
            <div class="col-lg-4 col-md-6 form-group">
                <input type="text" name="date" class="dark form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            </div>
            <div class="col-lg-4 col-md-6 form-group">
                <input type="text" class="dark form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
                <input type="number" class="dark form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              </div>
            </div>
            <div class="form-group">
            <textarea class="dark form-control" name="message" rows="5" placeholder="Message"></textarea>
            </div>
           
            <div class="text-center rounded"><button type="submit" class="but">Book a Table</button></div>
        </form>

        </div>
    </section><!-- End Book A Table Section -->
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Testimonials</h2>
            <p>What they're saying about us</p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">

            <div class="testimonial-item">
            <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium
                quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="{{asset('reststyle/assets/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            </div>

            <div class="testimonial-item">
            <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="{{asset('reststyle/assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            </div>

            <div class="testimonial-item">
            <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor
                labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="{{asset('reststyle/assets/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            </div>

            <div class="testimonial-item">
            <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim
                dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="{{asset('reststyle/assets/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            </div>

            <div class="testimonial-item">
            <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa
                labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="{{asset('reststyle/assets/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            </div>

        </div>

        </div>
    </section><!-- End Testimonials Section -->
@endsection