@extends('layouts.main')

@section('content')

 <!-- ##### Hero Area Start ##### -->
 <section class="hero-area p-0">
    <div class="hero-slides owl-carousel p-0">

        <!-- Single Hero Slide -->
        <div class="single-hero-slide d-flex align-items-center" style="height: 650px;">
            <!-- Slide Img -->
            <div class="slide-img bg-img" style="background-image: url(/img/img_header5.jpg);   background-size: cover; filter: brightness(70%);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12 text-center">
                        <!-- Slide Content -->
                        <div class="hero-slides-content p-0">
                            <h2 data-animation="fadeInUp" data-delay="500ms">Contact Us</h2>
                            <p style="font-size: 28px;">Get in touch with us to learn more about the Kriyakala</p>


                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</section>
<!-- ##### Hero Area End ##### -->

<!-- ##### Book Now Area Start ##### -->
<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-sm-12 col-lg-6">
            <h2 class="title">Send us a note</h2>
            <form class="mt-4">
                <div class="form-group">
                  <input type="email" class="form-control"  placeholder="Name *">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control"  placeholder="Email Address *">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control"  placeholder="Subject">
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Comment or Message *"></textarea>
                  </div>

                <button type="submit" class="btn palatin-btn bg-salmon border-0 ">Send Message</button>
              </form>
        </div>

        <div class="col-12 col-sm-12 col-lg-6 bg-dark text-center mt-5">
            <h2 class="title text-white mt-5">More information</h2>
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-6 mt-5">
                    <i class="fa fa-map-marker color-salmon" style="font-size: 30px;" aria-hidden="true"></i>
                    <h5 class="mt-3 text-white font-weight-bold">Physical Address</h5>
                    <p class="text-white">Jl. Wijaya Kusuma no. 1, Enggal, Rawalaut, Bandar Lampung 35127 </p>
                </div>

                <div class="col-12 col-sm-12 col-lg-6 mt-5">
                    <i class="fa fa-clock-o color-salmon" style="font-size: 30px;" aria-hidden="true"></i>
                    <h5 class="mt-3 text-white font-weight-bold">Opening Hours</h5>
                    <p class="text-white mt-3" style="line-height: 10px;">Tuesday - Friday 11.00 - 20.00 </p>
                        <p class="text-white" style="line-height: 10px;">Saturday - Sunday 10.00 - 21.00</p>
                        <p class="text-white" style="line-height: 10px;">Monday Closed</p>
                </div>

                <div class="col-12 col-sm-12 col-lg-6 mt-5">
                    <i class="fa fa-envelope color-salmon" style="font-size: 30px;" aria-hidden="true"></i>
                    <h5 class="mt-3 text-white font-weight-bold">Email Address</h5>
                    <p class="text-white">info@kriyakala.id </p>
                </div>

                <div class="col-12 col-sm-12 col-lg-6 mt-5">
                    <i class="fa fa-whatsapp color-salmon" style="font-size: 30px;" aria-hidden="true"></i>
                    <h5 class="mt-3 text-white font-weight-bold">WhatsApp</h5>
                    <p class="text-white">+62 822-8016-0572</p>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="container mb-5" style="margin-top: 100px;">
    <div class="row text-center">
        <div class="col-12">
            <h2 class="title">What peoples say about us</h2>
        </div>
    </div>
    <div class="row text-center mt-5">
        <div class="col-1">
            <button class="button left mt-5" onclick="leftScroll()">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </button>
        </div>

        <div class="col-10">
            <div class="cover">
                <div class="scroll-images">
                    <div class="col-12 col-lg-3 comment-container mr-3 mr-3">
                        <div class="child mt-2">
                            <div class="d-flex align-items-center">
                                <img src="https://lh3.googleusercontent.com/a-/ALV-UjVdRLKEEQBnWeV68PurUOql42OjDXaj1K_Nw1aPJjSSq5o=s120-c-rp-mo-br100" alt="" style="width: 40px;">
                                <div class="ml-2">
                                    <div class="comment-title-name">Wawa Suzanna </div>
                                    <div class="comment-date">2023-12-15</div>
                                </div>
                            </div>
                            <div class="text-left mt-2">
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            </div>
                            <p class="comment-content mt-2">Tempatnya keren, bersih, nyaman, wangiii</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 comment-container mr-3">
                        <div class="child mt-2">
                            <div class="d-flex align-items-center">
                                <img src="https://lh3.googleusercontent.com/a/ACg8ocIHStoMmFfU2eQyXLxPPe9lKvGrYVv99tYD7856MQ90=s120-c-rp-mo-br100" alt="" style="width: 40px;">
                                <div class="ml-2">
                                    <div class="comment-title-name">Adila Kartami Putri</div>
                                    <div class="comment-date">2023-12-15</div>
                                </div>
                            </div>
                            <div class="text-left mt-2">
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            </div>
                            <p class="comment-content mt-2">pelayanan baguss, tempatnya bersih dan nyaman. very recommended</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 comment-container mr-3">
                        <div class="child mt-2">
                            <div class="d-flex align-items-center">
                                <img src="https://lh3.googleusercontent.com/a-/ALV-UjXIfGiQ_X0k27A_9fwKo0PB4JtN91KkSMlH-7pA5ZJr9w=s120-c-rp-mo-br100" alt="" style="width: 40px;">
                                <div class="ml-2">
                                    <div class="comment-title-name">Sausan Istiviona </div>
                                    <div class="comment-date">2023-12-14</div>
                                </div>
                            </div>
                            <div class="text-left mt-2">
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            </div>
                            <p class="comment-content mt-2">ac nya ditambah lagi kak biar dingin 💫</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 comment-container mr-3">
                        <div class="child mt-2">
                            <div class="d-flex align-items-center">
                                <img src="https://lh3.googleusercontent.com/a/ACg8ocLuleHI0o8oSU5AtJbFk2o7UjAIn_O9tHrt9DyXHBS0=s120-c-rp-mo-br100" alt="" style="width: 40px;">
                                <div class="ml-2">
                                    <div class="comment-title-name">rahman areef </div>
                                    <div class="comment-date">2023-12-14</div>
                                </div>
                            </div>
                            <div class="text-left mt-2">
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            </div>
                            <p class="comment-content mt-2">Tempatnya bagus, suasanya baik.. dan hasil photonya yg pasti memuaskan..</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 comment-container mr-3">
                        <div class="child mt-2">
                            <div class="d-flex align-items-center">
                                <img src="https://lh3.googleusercontent.com/a/ACg8ocKMzqCAd0seOUAsC8DkMT0gZ-wWQiViUW0OTG5Q31yt=s120-c-rp-mo-br100" alt="" style="width: 40px;">
                                <div class="ml-2">
                                    <div class="comment-title-name">Sadam Rizki</div>
                                    <div class="comment-date">2023-12-14</div>
                                </div>
                            </div>
                            <div class="text-left mt-2">
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            </div>
                            <p class="comment-content mt-2">Mantap nih tempatnya bisa buat santai2 dan fotonya juga keren.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 comment-container mr-3">
                        <div class="child mt-2">
                            <div class="d-flex align-items-center">
                                <img src="https://lh3.googleusercontent.com/a/ACg8ocKTS8r9Mt16Cu4_TX6xA_60Q1_fsns8Z7g7BnEtoF2E=s120-c-rp-mo-br100" alt="" style="width: 40px;">
                                <div class="ml-2">
                                    <div class="comment-title-name">fatchur rozi</div>
                                    <div class="comment-date">2023-12-15</div>
                                </div>
                            </div>
                            <div class="text-left mt-2">
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            </div>
                            <p class="comment-content mt-2">Tempatnya nyaman , fotonya keren2 , good joob</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 comment-container mr-3">
                        <div class="child mt-2">
                            <div class="d-flex align-items-center">
                                <img src="https://lh3.googleusercontent.com/a-/ALV-UjXyvFwARr6-MKZ2hvGOGprPCeN736NsSEzz2MjlLw3mzw=s120-c-rp-mo-br100" alt="" style="width: 40px;">
                                <div class="ml-2">
                                    <div class="comment-title-name">Rendy Apriyansah </div>
                                    <div class="comment-date">2023-12-14</div>
                                </div>
                            </div>
                            <div class="text-left mt-2">
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            </div>
                            <p class="comment-content mt-2">tempatnya bagus dan sangat profesional dalam melakukan pekerjaan mereka</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="col-1">
            <button class="button right mt-5" onclick="rightScroll()">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </button>
        </div>


    </div>

    <div class="row justify-content-center mt-2"><p class="text-dark"><b> Google </b>rating score: <b>5.0</b> of 5, based on <b>55 reviews</b></p>
    </div>

</div>

@endsection
