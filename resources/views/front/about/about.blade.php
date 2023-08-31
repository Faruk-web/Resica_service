@extends('front.master')
@section('title')
    About us
@endsection
@section('body')
 <!--About Three Start-->
 <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url({{asset('front')}}/assets/images/resica/about.png);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>About</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">About</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->
        <section class="why-choose-one">
        <div class="container">
            <div class="row">
            <div class="blog-details__content">
                    <ul class="blog-details__meta list-unstyled">
                        <li>
                            <a href="blog-details.html"></i>About</a>
                        </li>
                        <li>
                            <a href="blog-details.html"></i>Us</a>
                        </li>
                    </ul>
                    <br>
                    <h3 class="blog-details__title">ResicareSA Values</h3>
                    <p class="blog-details__text-1">

                        ResicareSA is a registered provider of Specialist Disability Accommodation (SDA). Participants who are eligible for SDA receive funding for their accommodation as part of their plan. The overall aim of SDA is to provide participants with more choice when it comes to their housing options. This includes deciding where they live and who they live with.

                        Our goal is to provide the support you need to live the way you choose. We do this by customising your care so that you can live as independently as possible. It may be that you need help to get ready for the day or assistance with eating or drinking. We can also assist with getting you to appointments. This includes social, recreational, educational, and medical appointments.
                        </p>
                </div>
            </div>
        </div>
    </section>
        <!--Counter Two Start-->
        <section class="counter-two">
            <div class="container">
                <div class="row">
                    <!--Counter Two Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="counter-two__single">
                            <div class="counter-two__count count-box">
                                <h3 class="count-text" data-stop="82" data-speed="1500">00</h3>
                                <span>k</span>
                            </div>
                            <p class="counter-two__text">Projects
                                <br> completed</p>
                        </div>
                    </div>
                    <!--Counter Two End-->
                    <!--Counter Two Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="counter-two__single counter-two__single-2">
                            <div class="counter-two__count count-box">
                                <h3 class="count-text" data-stop="170" data-speed="1500">00</h3>
                            </div>
                            <p class="counter-two__text">Honorable
                                <br> awards</p>
                        </div>
                    </div>
                    <!--Counter Two End-->
                    <!--Counter Two Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="counter-two__single counter-two__single-3">
                            <div class="counter-two__count count-box">
                                <h3 class="count-text" data-stop="80" data-speed="1500">00</h3>
                                <span>k</span>
                            </div>
                            <p class="counter-two__text">Satisfied
                                <br> customers</p>
                        </div>
                    </div>
                    <!--Counter Two End-->
                    <!--Counter Two Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="counter-two__single counter-two__single-2 counter-two__single-4">
                            <div class="counter-two__count count-box">
                                <h3 class="count-text" data-stop="680" data-speed="1500">00</h3>
                            </div>
                            <p class="counter-two__text">Professional
                                <br> team</p>
                        </div>
                    </div>
                    <!--Counter Two End-->
                </div>
            </div>
        </section>
        <!--Counter Two End -->

        <!--Testimonial One Start-->
        <section class="testimonial-one">
            <div class="testimonial-one__inner">
                <div class="testimonial-one__bg" style="background-image: url({{asset('front')}}/assets/images/backgrounds/testimonial-one-bg.jpg);"></div>
                <div class="container">
                    <div class="row">

                        <div class="col-xl-12">
                            <div class="testimonial-one__right">
                                <div class="testimonial-one__img-1">
                                    <img src="{{asset('front')}}/assets/images/testimonial/testimonial-one-img-1.jpg" alt="">
                                    <div class="testimonial-one__img-2">
                                        <img src="{{asset('front')}}/assets/images/testimonial/testimonial-one-img-2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                                    "loop": true,
                                    "autoplay": true,
                                    "margin": 30,
                                    "nav": false,
                                    "dots": false,
                                    "smartSpeed": 500,
                                    "autoplayTimeout": 10000,
                                    "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                                    "responsive": {
                                        "0": {
                                            "items": 1
                                        },
                                        "768": {
                                                "items": 1
                                            },
                                            "992": {
                                                "items": 1
                                            },
                                            "1200": {
                                                "items": 1
                                            }
                                        }
                                }'>
                                    <!--Testimonial One Single Start-->
                                    <div class="item">
                                        <div class="testimonial-one__single">
                                            <div class="testimonial-one__client-info-and-quote">
                                                <div class="testimonial-one__client-info">
                                                    <h3>Respect</h3>
                                                    {{-- <p>Co Founder</p> --}}
                                                </div>
                                                <div class="testimonial-one__quote">
                                                    <span class="icon-quote"></span>
                                                </div>
                                            </div>
                                            <p class="testimonial-one__text">It is due to their excellent service,
                                                competitive pricing and customer support. It’s through refresing to get
                                                such
                                                a personal touch. Duis aute irure dolor in reprehenderit esse cillum.
                                            </p>
                                        </div>
                                    </div>
                                    <!--Testimonial One Single End-->
                                    <!--Testimonial One Single Start-->
                                    <div class="item">
                                        <div class="testimonial-one__single">
                                            <div class="testimonial-one__client-info-and-quote">
                                                <div class="testimonial-one__client-info">
                                                    <h3>Honesty</h3>
                                                    {{-- <p>Co Founder</p> --}}
                                                </div>
                                                <div class="testimonial-one__quote">
                                                    <span class="icon-quote"></span>
                                                </div>
                                            </div>
                                            <p class="testimonial-one__text">It is due to their excellent service,
                                                competitive pricing and customer support. It’s through refresing to get
                                                such
                                                a personal touch. Duis aute irure dolor in reprehenderit esse cillum.
                                            </p>
                                        </div>
                                    </div>
                                    <!--Testimonial One Single End-->
                                    <!--Testimonial One Single Start-->
                                    <div class="item">
                                        <div class="testimonial-one__single">
                                            <div class="testimonial-one__client-info-and-quote">
                                                <div class="testimonial-one__client-info">
                                                    <h3>Confidentiality</h3>
                                                    {{-- <p>Co Founder</p> --}}
                                                </div>
                                                <div class="testimonial-one__quote">
                                                    <span class="icon-quote"></span>
                                                </div>
                                            </div>
                                            <p class="testimonial-one__text">It is due to their excellent service,
                                                competitive pricing and customer support. It’s through refresing to get
                                                such
                                                a personal touch. Duis aute irure dolor in reprehenderit esse cillum.
                                            </p>
                                        </div>
                                    </div>
                                    <!--Testimonial One Single End-->
                                    <div class="item">
                                        <div class="testimonial-one__single">
                                            <div class="testimonial-one__client-info-and-quote">
                                                <div class="testimonial-one__client-info">
                                                    <h3>Development & Improvement</h3>
                                                    {{-- <p>Co Founder</p> --}}
                                                </div>
                                                <div class="testimonial-one__quote">
                                                    <span class="icon-quote"></span>
                                                </div>
                                            </div>
                                            <p class="testimonial-one__text">It is due to their excellent service,
                                                competitive pricing and customer support. It’s through refresing to get
                                                such
                                                a personal touch. Duis aute irure dolor in reprehenderit esse cillum.
                                            </p>
                                        </div>
                                    </div>
                                    <!--Testimonial One Single End-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial One End-->

        <!--Video Two Start-->
        <section class="video-two">
            <div class="video-two__bg jarallax" data-jarallax="" data-speed="0.2" data-imgposition="50% 0%" style="background-image: url({{asset('front')}}/assets/images/backgrounds/video-two-bg.jpg);"></div>
            <div class="container">
                <div class="video-two__inner">
                    <div class="video-two__rounded-text">
                        <a href="https://www.youtube.com/watch?v=ci1KeMZzxbw" class="video-two__curved-circle-box video-popup">
                            <div class="curved-circle-2">
                                Watch Our agency portfolio Video
                            </div><!-- /.curved-circle -->
                            <div class="video-two__icon">
                                <span class="fa fa-play"></span>
                            </div>
                        </a>
                    </div>
                    <h3 class="video-two__title"> Disability Accommodation</h3>
                </div>
            </div>
        </section>
        <!--Video Two End -->

        <!--Team One Start-->
        <section class="team-one">
            <div class="container">
                <div class="section-title text-center">
                    {{-- <p class="section-title__tagline"><span>//</span> our smart people <span>//</span> --}}
                    {{-- </p> --}}
                    <h2 class="section-title__title">Welcome to the family </h2>
                </div>
                <div class="row">
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{asset('front')}}/assets/images/team/team-1-1.jpg" alt="">
                                </div>
                                <div class="team-one__share-btn">
                                    <a href="team-details.html"><span class="fas fa-share-alt"></span></a>
                                    <ul class="list-unstyled team-one__social">
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__name-box">
                                    <h3><a href="team-details.html">Aftab Cheema</a></h3>
                                    <p>Manager</p>
                                </div>
                                <div class="team-one__arrow">
                                    <a href="team-details.html"><span class="icon-right-lg-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="200ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{asset('front')}}/assets/images/team/team-1-2.jpg" alt="">
                                </div>
                                <div class="team-one__share-btn">
                                    <a href="team-details.html"><span class="fas fa-share-alt"></span></a>
                                    <ul class="list-unstyled team-one__social">
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__name-box">
                                    <h3><a href="team-details.html">Beth Mildenhall</a></h3>
                                    <p>Engagment and intake officer</p>
                                </div>
                                <div class="team-one__arrow">
                                    <a href="team-details.html"><span class="icon-right-lg-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="300ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{asset('front')}}/assets/images/team/team-1-3.jpg" alt="">
                                </div>
                                <div class="team-one__share-btn">
                                    <a href="team-details.html"><span class="fas fa-share-alt"></span></a>
                                    <ul class="list-unstyled team-one__social">
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__name-box">
                                    <h3><a href="team-details.html">Haroon Anjum</a></h3>
                                    <p>Finance and Payroll manager</p>
                                </div>
                                <div class="team-one__arrow">
                                    <a href="team-details.html"><span class="icon-right-lg-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="300ms">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{asset('front')}}/assets/images/team/team-1-3.jpg" alt="">
                                </div>
                                <div class="team-one__share-btn">
                                    <a href="team-details.html"><span class="fas fa-share-alt"></span></a>
                                    <ul class="list-unstyled team-one__social">
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__name-box">
                                    <h3><a href="team-details.html">Victoria Mildenhall</a></h3>
                                    <p>HR and Admin Assistatnt</p>
                                </div>
                                <div class="team-one__arrow">
                                    <a href="team-details.html"><span class="icon-right-lg-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                </div>
            </div>
        </section>
        <!--Team One End-->

@endsection
