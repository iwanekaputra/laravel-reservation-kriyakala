@extends('layouts.main')

@section('content')
    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area p-0">
        <div class="hero-slides owl-carousel p-0">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center" style="height: 800px;">
                <!-- Slide Img -->
                <div class="slide-img bg-img"
                    style="background-image: url(/img/img_header1.jpg);   background-size: cover; filter: brightness(70%);">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <!-- Slide Content -->
                            <div class="hero-slides-content p-0">
                                <h2 data-animation="fadeInUp" data-delay="500ms">Because Pictures Speak Lauder Than Words
                                </h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Step into a world where light and grace
                                    converge, where laughter echoes against velvet drapes, and memories bloom into vibrant
                                    works of art. Welcome to Kriyakala, where we sculpt your precious moments into timeless
                                    treasures.</p>
                                <div class="row menu-carousel">
                                    <a href="{{ url('/price-list') }}" class="btn palatin-btn bg-salmon mt-5 ml-3 border-0 "
                                        data-animation="fadeInUp" data-delay="900ms">Price List</a>
                                    <a href="{{ url('/contact') }}" class="btn palatin-btn mt-5 ml-3 bg-dark border-0"
                                        data-animation="fadeInUp" data-delay="900ms">Contact Us</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>
    <!-- ##### Hero Area End ##### -->


    <!-- ##### Book Now Area Start ##### -->
    <div class="book-now-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-sm-6">
                    <img src="/img/img_kriyakala_studio1.jpg" class="book-img" alt="">
                    <p class="book-title">#SERVICES</p>
                    <p class="book-content">
                        Kriyakala Studio</p>
                </div>

                <div class="col-12 col-sm-6">
                    <img src="/img/img_kriyakala_studio2.png" class="book-img" alt="">
                    <p class="book-title">#CANNING NOW</p>
                    <p class="book-content">
                        Kriyakala Coffee</p>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Book Now Area End ##### -->


    <div class="container" style="margin-top: -100px">
        <h2 class="title text-center">Kriyakala's Work</h2>
        <p class="content text-center">A few pieces by Kriyakala Studio</p>
        <div class="row mt-5">
            <div class="col-12 col-lg-4 text-center mt-5">
                <h2 class="title-portfolio">Self foto</h2>
                <div class="row align-items-center">
                    <div class="col-1">
                        <button class="button button-left" onclick="leftScroll('self-foto')">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="col-10">
                        <div class="cover">
                            <div class="scroll-images scroll-self-foto align-items-center">
                                <div class="col-12 col-lg-6 comment-container mr-1 px-2 py-2">
                                    <div class="child mt-2">
                                        <a data-fancybox="gallery-self-foto" href="/img/portfolio/self-foto/IMG_3636.webp">
                                            <img src="/img/portfolio/self-foto/IMG_3636.webp" width="200" height="150"
                                                alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 comment-container mr-1  px-2 py-2">
                                    <div class="child mt-2">
                                        <a data-fancybox="gallery-self-foto" href="/img/portfolio/self-foto/IMG_3637.webp">
                                            <img src="/img/portfolio/self-foto/IMG_3637.webp" width="200" height="150"
                                                alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 comment-container mr-1  px-2 py-2">
                                    <div class="child mt-2">
                                        <a data-fancybox="gallery-self-foto" href="/img/portfolio/self-foto/IMG_3638.webp">
                                            <img src="/img/portfolio/self-foto/IMG_3638.webp" width="200" height="150"
                                                alt="" />
                                        </a>

                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 comment-container mr-1  px-2 py-2">
                                    <div class="child mt-2">
                                        <a data-fancybox="gallery-self-foto" href="/img/portfolio/self-foto/IMG_3639.webp">
                                            <img src="/img/portfolio/self-foto/IMG_3639.webp" width="200" height="150"
                                                alt="" />
                                        </a>

                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 comment-container mr-1  px-2 py-2">
                                    <div class="child mt-2">
                                        <a data-fancybox="gallery-self-foto" href="/img/portfolio/self-foto/IMG_3640.webp">
                                            <img src="/img/portfolio/self-foto/IMG_3640.webp" width="200" height="150"
                                                alt="" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-1">
                        <button class="button right" onclick="rightScroll('self-foto')">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-4 text-center mt-5">
                <h2 class="title-portfolio">Graduation</h2>
                <div class="row align-items-center">
                    <div class="col-1 ">
                        <button class="button button-left" onclick="leftScroll('graduation')">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="col-10">
                        <div class="cover">
                            <div class="scroll-images scroll-graduation align-items-center">
                                <div class="col-12 col-lg-6 comment-container mr-1  px-2 py-2">
                                    <div class="child mt-2">
                                        <a data-fancybox="gallery-graduation"
                                            href="/img/portfolio/graduation/Copy of SYN-00346.webp">
                                            <img src="/img/portfolio/graduation/Copy of SYN-00346.webp" width="200"
                                                height="150" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 comment-container mr-1  px-2 py-2">
                                    <div class="child mt-2">
                                        <a data-fancybox="gallery-graduation"
                                            href="/img/portfolio/graduation/Copy of SYN-00055.webp">
                                            <img src="/img/portfolio/graduation/Copy of SYN-00055.webp" width="200"
                                                height="150" alt="" />
                                        </a>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6 comment-container mr-1  px-2 py-2">
                                    <div class="child mt-2">
                                        <a data-fancybox="gallery-graduation"
                                            href="/img/portfolio/graduation/Copy of SYN-5324.webp">
                                            <img src="/img/portfolio/graduation/Copy of SYN-5324.webp" width="200"
                                                height="150" alt="" />
                                        </a>

                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 comment-container mr-1  px-2 py-2">
                                    <div class="child mt-2">
                                        <a data-fancybox="gallery-graduation"
                                            href="/img/portfolio/graduation/IMG_3645.webp">
                                            <img src="/img/portfolio/graduation/IMG_3645.webp" width="200"
                                                height="150" alt="" />
                                        </a>

                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 comment-container mr-1  px-2 py-2">
                                    <div class="child mt-2">
                                        <a data-fancybox="gallery-graduation"
                                            href="/img/portfolio/graduation/IMG_3655.webp">
                                            <img src="/img/portfolio/graduation/IMG_3655.webp" width="200"
                                                height="150" alt="" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-1">
                        <button class="button right" onclick="rightScroll('graduation')">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-4 text-center mt-5">
                <h2 class="title-portfolio">Family</h2>
                <div class="row align-items-center">
                    <div class="col-1">
                        <button class="button button-left" onclick="leftScroll('family')">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="col-10">
                        <div class="cover">
                            <div class="scroll-images scroll-family align-items-center">
                                <div class="col-12 col-lg-6 comment-container mr-1  px-2 py-2">
                                    <div class="child mt-2">
                                        <a data-fancybox="gallery-family" href="/img/portfolio/family/SYN-00445.webp">
                                            <img src="/img/portfolio/family/SYN-00445.webp" width="200" height="150"
                                                alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 comment-container mr-1  px-2 py-2">
                                    <div class="child mt-2">
                                        <a data-fancybox="gallery-family" href="/img/portfolio/family/SYN-00381.webp">
                                            <img src="/img/portfolio/family/SYN-00381.webp" width="200" height="150"
                                                alt="" />
                                        </a>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6 comment-container mr-1  px-2 py-2">
                                    <div class="child mt-2">
                                        <a data-fancybox="gallery-family" href="/img/portfolio/family/SYN-00520.webp">
                                            <img src="/img/portfolio/family/SYN-00520.webp" width="200" height="150"
                                                alt="" />
                                        </a>

                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 comment-container mr-1  px-2 py-2">
                                    <div class="child mt-2">
                                        <a data-fancybox="gallery-family" href="/img/portfolio/family/SYN-00744.webp">
                                            <img src="/img/portfolio/family/SYN-00744.webp" width="200" height="150"
                                                alt="" />
                                        </a>

                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 comment-container mr-1  px-2 py-2">
                                    <div class="child mt-2">
                                        <a data-fancybox="gallery-family" href="/img/portfolio/family/SYN-00783.webp">
                                            <img src="/img/portfolio/family/SYN-00783.webp" width="200" height="150"
                                                alt="" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-1">
                        <button class="button right" onclick="rightScroll('family')">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-4 text-center mt-5">
                <h2 class="title-portfolio">Group</h2>
                <div class="row align-items-center">
                    <div class="col-1">
                        <button class="button button-left" onclick="leftScroll('group')">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="col-10">
                        <div class="cover">
                            <div class="scroll-images scroll-group align-items-center">
                                <div class="col-12 col-lg-6 comment-container mr-1  px-2 py-2">
                                    <div class="child mt-2">
                                        <a data-fancybox="gallery-group" href="/img/portfolio/grup/IMG_3660.webp">
                                            <img src="/img/portfolio/grup/IMG_3660.webp" width="200" height="150"
                                                alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 comment-container mr-1  px-2 py-2">
                                    <div class="child mt-2">
                                        <a data-fancybox="gallery-group" href="/img/portfolio/grup/IMG_3654.webp">
                                            <img src="/img/portfolio/grup/IMG_3654.webp" width="200" height="150"
                                                alt="" />
                                        </a>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6 comment-container mr-1  px-2 py-2">
                                    <div class="child mt-2">
                                        <a data-fancybox="gallery-group" href="/img/portfolio/grup/KRY-0073.webp">
                                            <img src="/img/portfolio/grup/KRY-0073.webp" width="200" height="150"
                                                alt="" />
                                        </a>

                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 comment-container mr-1  px-2 py-2">
                                    <div class="child mt-2">
                                        <a data-fancybox="gallery-group" href="/img/portfolio/grup/KRY-0076.webp">
                                            <img src="/img/portfolio/grup/KRY-0076.webp" width="200" height="150"
                                                alt="" />
                                        </a>

                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 comment-container mr-1  px-2 py-2">
                                    <div class="child mt-2">
                                        <a data-fancybox="gallery-group" href="/img/portfolio/grup/KRY-0077.webp">
                                            <img src="/img/portfolio/grup/KRY-0077.webp" width="200" height="150"
                                                alt="" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-1">
                        <button class="button right" onclick="rightScroll('group')">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-4 text-center mt-5">
                <h2 class="title-portfolio">Maternity</h2>
                <div class="row align-items-center">
                    <div class="col-1">
                        <button class="button button-left" onclick="leftScroll('maternity')">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="col-10">
                        <div class="cover">
                            <div class="scroll-images scroll-maternity align-items-center">
                                <div class="col-12 col-lg-6 comment-container mr-1  px-2 py-2">
                                    <div class="child mt-2">
                                        <a data-fancybox="gallery-maternity"
                                            href="/img/portfolio/Maternity/IMG_3648.webp">
                                            <img src="/img/portfolio/Maternity/IMG_3648.webp" width="200"
                                                height="150" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 comment-container mr-1  px-2 py-2">
                                    <div class="child mt-2">
                                        <a data-fancybox="gallery-maternity"
                                            href="/img/portfolio/Maternity/IMG_3650.webp">
                                            <img src="/img/portfolio/Maternity/IMG_3650.webp" width="200"
                                                height="150" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 comment-container mr-1  px-2 py-2">
                                    <div class="child mt-2">
                                        <a data-fancybox="gallery-maternity"
                                            href="/img/portfolio/Maternity/IMG_3653.webp">
                                            <img src="/img/portfolio/Maternity/IMG_3653.webp" width="200"
                                                height="150" alt="" />
                                        </a>

                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 comment-container mr-1  px-2 py-2">
                                    <div class="child mt-2">
                                        <a data-fancybox="gallery-maternity"
                                            href="/img/portfolio/Maternity/IMG_3659.webp">
                                            <img src="/img/portfolio/Maternity/IMG_3659.webp" width="200"
                                                height="150" alt="" />
                                        </a>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-1">
                        <button class="button right" onclick="rightScroll('maternity')">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-4 text-center mt-5">
                <h2 class="title-portfolio">Prewedding</h2>
                <div class="row align-items-center">
                    <div class="col-1">
                        <button class="button button-left" onclick="leftScroll('prewedding')">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="col-10">
                        <div class="cover">
                            <div class="scroll-images scroll-prewedding align-items-center">
                                <div class="col-12 col-lg-6 comment-container mr-1  px-2 py-2">
                                    <div class="child mt-2">
                                        <a data-fancybox="gallery-prewedding"
                                            href="/img/portfolio/prewedding/IMG_3644.webp">
                                            <img src="/img/portfolio/prewedding/IMG_3644.webp" width="200"
                                                height="150" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 comment-container mr-1  px-2 py-2">
                                    <div class="child mt-2">
                                        <a data-fancybox="gallery-prewedding"
                                            href="/img/portfolio/prewedding/IMG_3651.webp">
                                            <img src="/img/portfolio/prewedding/IMG_3651.webp" width="200"
                                                height="150" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 comment-container mr-1  px-2 py-2">
                                    <div class="child mt-2">
                                        <a data-fancybox="gallery-prewedding"
                                            href="/img/portfolio/prewedding/IMG_3652.webp">
                                            <img src="/img/portfolio/prewedding/IMG_3652.webp" width="200"
                                                height="150" alt="" />
                                        </a>

                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 comment-container mr-1  px-2 py-2">
                                    <div class="child mt-2">
                                        <a data-fancybox="gallery-prewedding"
                                            href="/img/portfolio/prewedding/IMG_3657.webp">
                                            <img src="/img/portfolio/prewedding/IMG_3657.webp" width="200"
                                                height="150" alt="" />
                                        </a>

                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 comment-container mr-1  px-2 py-2">
                                    <div class="child mt-2">
                                        <a data-fancybox="gallery-prewedding"
                                            href="/img/portfolio/prewedding/KRY-1663.webp">
                                            <img src="/img/portfolio/prewedding/KRY-1663.webp" width="200"
                                                height="150" alt="" />
                                        </a>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-1">
                        <button class="button right" onclick="rightScroll('maternity')">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container p-sm-0 " style="margin-top: 100px;">
        <div class="row">
            <div class="col-6 col-sm-3">
                <img src="/img/portfolio/self-foto/IMG_3636.webp" alt="">
            </div>
            <div class="col-6 col-sm-3">
                <img src="/img/img_kriyakala1.webp" alt="">
            </div>
            <div class="col-12 col-sm-6 mt-5">
                <h2 class="title">Kriyakala Studio</h2>
                <p class="content">We are not just photographers; we are weavers of dreams, capturing the essence of your
                    story with an unmatched blend of elegance and artistry. Whether you envision a solo portrait bathed in
                    ethereal light, a family’s joy overflowing in shared laughter, or the poignant beauty of milestone
                    celebrations, our studio aesthetics come alive to paint your narrative in luminous strokes.</p>
                <a href="{{ url('/portfolio') }}" class="btn palatin-btn bg-dark border-0" data-animation="fadeInUp"
                    data-delay="900ms">Check out more projects</a>

            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 100px">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="title">Our Happy Customer</h2>
                <p class="content">Here are some favorable feedback from happy clients.</p>
            </div>
        </div>
        <div class="row text-center mt-5">
            <div class="col-1">
                <button class="button button-left mt-5" onclick="leftScroll('comment')">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </button>
            </div>

            <div class="col-10">
                <div class="cover">
                    <div class="scroll-images scroll-comment">
                        <div class="col-12 col-lg-3 comment-container mr-3 mr-3">
                            <div class="child mt-2">
                                <div class="d-flex align-items-center">
                                    <img src="https://lh3.googleusercontent.com/a-/ALV-UjVdRLKEEQBnWeV68PurUOql42OjDXaj1K_Nw1aPJjSSq5o=s120-c-rp-mo-br100"
                                        alt="" style="width: 40px;">
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
                                    <img src="https://lh3.googleusercontent.com/a/ACg8ocIHStoMmFfU2eQyXLxPPe9lKvGrYVv99tYD7856MQ90=s120-c-rp-mo-br100"
                                        alt="" style="width: 40px;">
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
                                <p class="comment-content mt-2">pelayanan baguss, tempatnya bersih dan nyaman. very
                                    recommended</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 comment-container mr-3">
                            <div class="child mt-2">
                                <div class="d-flex align-items-center">
                                    <img src="https://lh3.googleusercontent.com/a-/ALV-UjXIfGiQ_X0k27A_9fwKo0PB4JtN91KkSMlH-7pA5ZJr9w=s120-c-rp-mo-br100"
                                        alt="" style="width: 40px;">
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
                                    <img src="https://lh3.googleusercontent.com/a/ACg8ocLuleHI0o8oSU5AtJbFk2o7UjAIn_O9tHrt9DyXHBS0=s120-c-rp-mo-br100"
                                        alt="" style="width: 40px;">
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
                                <p class="comment-content mt-2">Tempatnya bagus, suasanya baik.. dan hasil photonya yg
                                    pasti memuaskan..</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 comment-container mr-3">
                            <div class="child mt-2">
                                <div class="d-flex align-items-center">
                                    <img src="https://lh3.googleusercontent.com/a/ACg8ocKMzqCAd0seOUAsC8DkMT0gZ-wWQiViUW0OTG5Q31yt=s120-c-rp-mo-br100"
                                        alt="" style="width: 40px;">
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
                                <p class="comment-content mt-2">Mantap nih tempatnya bisa buat santai2 dan fotonya juga
                                    keren.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 comment-container mr-3">
                            <div class="child mt-2">
                                <div class="d-flex align-items-center">
                                    <img src="https://lh3.googleusercontent.com/a/ACg8ocKTS8r9Mt16Cu4_TX6xA_60Q1_fsns8Z7g7BnEtoF2E=s120-c-rp-mo-br100"
                                        alt="" style="width: 40px;">
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
                                    <img src="https://lh3.googleusercontent.com/a-/ALV-UjXyvFwARr6-MKZ2hvGOGprPCeN736NsSEzz2MjlLw3mzw=s120-c-rp-mo-br100"
                                        alt="" style="width: 40px;">
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
                                <p class="comment-content mt-2">tempatnya bagus dan sangat profesional dalam melakukan
                                    pekerjaan mereka</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="col-1">
                <button class="button right mt-5" onclick="rightScroll('comment')">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </button>
            </div>


        </div>

        <div class="row justify-content-center mt-2">
            <p class="text-dark"><b> Google </b>rating score: <b>5.0</b> of 5, based on <b>55 reviews</b></p>
        </div>

    </div>

    {{-- <div style="margin-bottom: 200px;"></div> --}}

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area d-flex flex-wrap align-items-center mb-5 mt-5">
        <div class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.9664277261013!2d105.26418997477342!3d-5.422071854132027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40dbea6d07fea1%3A0xf54dab574ad8f15a!2sKriyakala%20Studio!5e0!3m2!1sid!2sid!4v1705930795322!5m2!1sid!2sid"
                class="w-100" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->
@endsection
