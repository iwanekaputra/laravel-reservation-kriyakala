@extends('layouts.main')

@section('content')
  <!-- ##### Hero Area Start ##### -->
  <section class="hero-area p-0">
    <div class="hero-slides owl-carousel p-0">

        <!-- Single Hero Slide -->
        <div class="single-hero-slide d-flex align-items-center" style="height: 450px;">
            <!-- Slide Img -->
            <div class="slide-img bg-img" style="background-image: url(/img/img_header2.jpg);   background-size: cover; filter: brightness(70%);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12 text-center">
                        <!-- Slide Content -->
                        <div class="hero-slides-content p-0">
                            <h2 data-animation="fadeInUp" data-delay="500ms">About Us</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</section>
<!-- ##### Hero Area End ##### -->

<!-- ##### Book Now Area Start ##### -->
<div class="container">
    <div class="row mt-5">
        <div class="col-12 col-sm-6">
            <h2 class="title">Our History</h2>
            <p class="content text-justify">After establishing Kriyakala in October 2023, we concentrated on showcasing the aesthetic appeal of our joint photo studio work with KriyaKala Studio. In order to make the wonderful times in your life seem like they will last forever, we are dedicated to giving everyone the best.</p>
            <p class="content text-justify">In order for everyone to have a home, we will in the future assist the Indonesian family in their quest for a high-quality residence that lives up to their aspirations.</p>

            <div class="row">
                <div class="col-12 col-sm-6 mt-2">
                    <img src="/img/img_kriyakala_studio1.jpg" alt="">
                </div>
                <div class="col-12 col-sm-6 mt-2">
                    <img src="/img/img_kriyakala_studio2.png" alt="">
                </div>
            </div>

        </div>
        <div class="col-12 col-sm-6 mt-2">
            <img src="/img/img_our_history.webp" style="  height: 550px;" alt="">
        </div>
    </div>
</div>
<!-- ##### Book Now Area End ##### -->

<section style="margin-top : 200px;">
    <div class="container-price-list">

    </div>

    <div class="row justify-content-center text-center" style="position: relative; top: -300px;">
        <div class="col-10 col-sm-7">
            <h2 data-animation="fadeInUp" data-delay="500ms" class="container-content-price-list">Would you like to gain priceless experience at Kriyakala Studio? Make a Reservation Now</h2>
            <a href="#" class="btn palatin-btn bg-salmon mt-5 ml-3 border-0" style="border-radius: 5px;" data-animation="fadeInUp" data-delay="900ms">Booking Now</a>

        </div>
    </div>
</section>
@endsection
