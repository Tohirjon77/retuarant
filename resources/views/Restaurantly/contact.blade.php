@extends('restaurantly.app')
@section('content')
<main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Inner Page</h2>
          <ol>
            <li><a href="{{route('restaurent.index')}}">Contact</a></li>
            <li>Inner Page</li>
          </ol>
        </div>

      </div>
    </section>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Contact</h2>
            <p>Contact Us</p>
        </div>
        </div>

        <div data-aos="fade-up">
            <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d759.7094006991367!2d71.47516382919326!3d40.39029172016057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38bba7424442c279%3A0x17366bbde1ce150b!2sRoxat%20Kafesi!5e0!3m2!1sru!2s!4v1631764738107!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <div class="container" data-aos="fade-up">

        <div class="row mt-5">

            <div class="col-lg-4">
            <div class="info">
                <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Uzbekistan</p>
                </div>

                <div class="open-hours">
                <i class="icofont-clock-time icofont-rotate-90"></i>
                <h4>Open Hours:</h4>
                <p>
                    Monday-Saturday:<br>
                    11:00 AM - 2300 PM
                </p>
                </div>

                <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
                </div>

                <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
                </div>

            </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="{{asset('reststyle/forms/contact.php')}}" method="post" role="form" class="php-email-form">
                <div class="form-row">
                <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                    data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validate"></div>
                </div>
                </div>
                <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                    data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
                </div>
                <div class="form-group">
                <textarea class="form-control" name="message" rows="8" data-rule="required"
                    data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
                </div>
                <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

            </div>

        </div>

        </div>
    </section><!-- End Contact Section -->

@endsection