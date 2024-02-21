@extends('layouts.main')

@section('content')
    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area p-0">
        <div class="hero-slides owl-carousel p-0">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center" style="height: 550px;">
                <!-- Slide Img -->
                <div class="slide-img bg-img"
                    style="background-image: url(/img/img_header4.jpg);   background-size: cover; filter: brightness(70%);">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12 text-center">
                            <!-- Slide Content -->
                            <div class="hero-slides-content p-0">
                                <h2 data-animation="fadeInUp" data-delay="500ms">Portfolio</h2>
                                <p style="font-size: 24px;">Here are a few of our creations.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <div class="container mb-5">
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
@endsection
