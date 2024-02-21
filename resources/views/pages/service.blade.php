@extends('layouts.main')

@section('content')

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area p-0">
        <div class="hero-slides owl-carousel p-0">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center" style="height: 450px;">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(/img/img_header3.webp);   background-size: cover; filter: brightness(70%);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12 text-center">
                            <!-- Slide Content -->
                            <div class="hero-slides-content p-0">
                                <h2 data-animation="fadeInUp" data-delay="500ms">Our Services</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Book Now Area Start ##### -->
    <div class="container mt-5 mb-5 shadow">
      <div class="row align-items-center">
        <div class="col-12 col-sm-12 col-lg-6 text-center p-5">
          <h2 class="title">
            Kriyakala Studio
            </h2>
            <p class="content">Looking to capture your precious moments with your loved ones? Kriyakala Studio is the solution! We offer a variety of photography services, from family portraits, graduation photos, group photos, to personal photos. With our team of professional and experienced photographers, we will help you create beautiful and memorable photos.</p>
            <a href="{{ url('/contact') }}" class="text-bold" style="font-weight: bold;">CONTACT US <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>
        <div class="col-12 col-sm-12 col-lg-6">
          <img src="/img/img_kriyakala_studio1.jpg" alt="">
        </div>
      </div>
    </div>

    <div class="container mt-5 shadow">
      <div class="row align-items-center">
        <div class="col-12 col-sm-12 col-lg-6">
          <img src="/img/img_coming_soon.webp" alt="">
        </div>
        <div class="col-12 col-sm-12 col-lg-6 text-center p-5">
          <h2 class="title">
            Kriyakala Coffee
            </h2>
            <p class="content">Welcome to Kriyakala Coffee, where turning your dream home into a digital reality is our specialty. As a digital housing agency, we bring you an experience filled with innovation and convenience.</p>
            <a href="{{ url('/contact') }}" class="text-bold" style="font-weight: bold;">CONTACT US <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>

    <div class="container mb-5 text-center service">
      <h2 class="title text-white text-center">Do you want to learn more about us or do you require us a conversation about a service? Simply give us a shout.</h2>
      <a href="{{ url('/contact') }}" class="btn palatin-btn bg-salmon mt-5 ml-3 border-0 rounded" style="color: white; font-weight: bold;" data-animation="fadeInUp" data-delay="900ms">Contact</a>

    </div>

@endsection
