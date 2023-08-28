@extends('front.master')

@section('title')
    Home
@endsection
@section('body')
    <!-- Main Sllider Start -->
    <section class="main-slider">
        <div class="main-slider__phone">
            <a href="tel:926668880000">+92 (666) 888 0000</a>
        </div>
        <div class="main-slider__mail">
            <a href="mailto:hello@company.com">hello@company.com</a>
        </div>
        <div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": true, "nav": false, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

            <div class="item main-slider__slide-1">
                <div class="main-slider__bg" style="background-image: url({{ asset('front') }}/assets/images/backgrounds/slider-1-1.jpg);">
                </div><!-- /.slider-one__bg -->
                <div class="container">
                    <div class="main-slider__content">
                        <p class="main-slider__star">*</p>
                        <div class="main-slider__text-box">
                            <p class="main-slider__text">Duis aute lorem ipsum is simply free <br> text available in
                                the market today <br> reprehen.</p>
                        </div>
                        <h2 class="main-slider__title">the brand <br> <span>uniqueness</span> <a href="about.html" class="main-slider__btn"><i class="icon-right-arrow1"></i></a></h2>
                    </div>
                </div>
            </div>

            <div class="item main-slider__slide-2">
                <div class="main-slider__bg" style="background-image: url({{ asset('front') }}/assets/images/backgrounds/slider-1-2.jpg);">
                </div><!-- /.slider-one__bg -->
                <div class="container">
                    <div class="main-slider__content">
                        <p class="main-slider__star">*</p>
                        <div class="main-slider__text-box">
                            <p class="main-slider__text">Duis aute lorem ipsum is simply free <br> text available in
                                the market today <br> reprehen.</p>
                        </div>
                        <h2 class="main-slider__title">the brand <br> <span>uniqueness</span> <a href="about.html" class="main-slider__btn"><i class="icon-right-arrow1"></i></a></h2>
                    </div>
                </div>
            </div>

            <div class="item main-slider__slide-3">
                <div class="main-slider__bg" style="background-image: url({{ asset('front') }}/assets/images/backgrounds/slider-1-3.jpg);">
                </div><!-- /.slider-one__bg -->
                <div class="container">
                    <div class="main-slider__content">
                        <p class="main-slider__star">*</p>
                        <div class="main-slider__text-box">
                            <p class="main-slider__text">Duis aute lorem ipsum is simply free <br> text available in
                                the market today <br> reprehen.</p>
                        </div>
                        <h2 class="main-slider__title">the brand <br> <span>uniqueness</span> <a href="about.html" class="main-slider__btn"><i class="icon-right-arrow1"></i></a></h2>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!--Main Sllider Start -->

    <!--Services One Start-->
    <section class="services-one">
        <div class="container">
            <div class="row">
                <!--Services One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="services-one__single">
                        <div class="services-one__img-box">
                            <div class="services-one__img">
                                <img src="{{ asset('front') }}/assets/images/services/services-1-1.jpg" alt="">
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="services-details.html">Website design</a>
                                </h3>
                                <div class="services-one__icon">
                                    <span class="icon-layer"></span>
                                </div>
                            </div>
                            <div class="services-one__hover-content">
                                <h3 class="services-one__hover-title"><a href="website-development.html">Website
                                        design</a>
                                </h3>
                                <p class="services-one__hover-text">This present moment is perfect simply due to the
                                    fact.</p>
                                <div class="services-one__hover-arrow">
                                    <a href="website-development.html"><span class="icon-down-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="services-one__single">
                        <div class="services-one__img-box">
                            <div class="services-one__img">
                                <img src="{{ asset('front') }}/assets/images/services/services-1-2.jpg" alt="">
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="services-details.html">App development</a>
                                </h3>
                                <div class="services-one__icon">
                                    <span class="icon-cellphone"></span>
                                </div>
                            </div>
                            <div class="services-one__hover-content">
                                <h3 class="services-one__hover-title"><a href="app-development.html">App
                                        development</a>
                                </h3>
                                <p class="services-one__hover-text">This present moment is perfect simply due to the
                                    fact.</p>
                                <div class="services-one__hover-arrow">
                                    <a href="app-development.html"><span class="icon-down-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="services-one__single">
                        <div class="services-one__img-box">
                            <div class="services-one__img">
                                <img src="{{ asset('front') }}/assets/images/services/services-1-3.jpg" alt="">
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="services-details.html">Digital
                                        marketing</a>
                                </h3>
                                <div class="services-one__icon">
                                    <span class="icon-megaphone"></span>
                                </div>
                            </div>
                            <div class="services-one__hover-content">
                                <h3 class="services-one__hover-title"><a href="digital-marketing.html">Digital
                                        marketing</a>
                                </h3>
                                <p class="services-one__hover-text">This present moment is perfect simply due to the
                                    fact.</p>
                                <div class="services-one__hover-arrow">
                                    <a href="digital-marketing.html"><span class="icon-down-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services One Single End-->
            </div>
        </div>
    </section>
    <!--Services One End-->

    <!--About One Start-->
    <section class="about-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5">
                    <div class="about-one__left">
                        <div class="about-one__img-box">
                            <div class="about-one__img">
                                <img src="{{ asset('front') }}/assets/images/resources/about-one-img-1.png" alt="">
                            </div>
                            <div class="about-one__icon">
                                <span class="icon-idea"></span>
                            </div>
                            <div class="about-one__shape-1 shape-mover">
                                <img src="{{ asset('front') }}/assets/images/shapes/about-one-shape-1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="about-one__right">
                        <div class="section-title text-left">
                            <p class="section-title__tagline"><span>//</span> our introduction <span>//</span>
                            </p>
                            <h2 class="section-title__title">Leading the best design
                                agency in town</h2>
                        </div>
                        <p class="about-one__text-1">The professional approach to development.</p>
                        <p class="about-one__text-2">There are many variations of simply free text passages of
                            available but the majority have suffered alteration in some form, by injected hum
                            randomised words which don't slightly.</p>
                        <ul class="about-one__points list-unstyled">
                            <li>
                                <div class="about-one__icon-and-title">
                                    <div class="about-one__points-icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="about-one__points-title">
                                        <h3>Our mission</h3>
                                    </div>
                                </div>
                                <p class="about-one__points-text">Lorem ipsum text dolor sited not <br> is
                                    consectetur
                                    notted.</p>
                            </li>
                            <li>
                                <div class="about-one__icon-and-title">
                                    <div class="about-one__points-icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="about-one__points-title">
                                        <h3>Our vision</h3>
                                    </div>
                                </div>
                                <p class="about-one__points-text">Lorem ipsum text dolor sited not <br> is
                                    consectetur
                                    notted.</p>
                            </li>
                        </ul>
                        <div class="about-one__progress">
                            <h4 class="about-one__progress-title">Marketing</h4>
                            <div class="bar">
                                <div class="bar-inner count-bar" data-percent="77%">
                                    <div class="count-text">77%</div>
                                </div>
                            </div>
                        </div>
                        <div class="about-one__btn-and-user-box">
                            <div class="about-one__btn-box">
                                <a href="about.html" class="about-one__btn thm-btn">Find out more</a>
                            </div>
                            <div class="about-one__user-box">
                                <div class="about-one__user-img">
                                    <img src="{{ asset('front') }}/assets/images/resources/abot-one-user-img-1.jpg" alt="">
                                </div>
                                <div class="about-one__user-content">
                                    <h4>Mike hardson</h4>
                                    <p>Founder of the Company</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About One End-->

    <!--Feature One Start-->
    <section class="feature-three">
        <div class="feature-three__wrap">
            <ul class="list-unstyled feature-three__list">
                <li>
                    <div class="feature-three__title-box">
                        <h2 class="feature-three__title"> <span>*</span> Transofrm Ideas</h2>
                    </div>
                </li>
                <li>
                    <div class="feature-three__title-box">
                        <h2 class="feature-three__title"> <span>*</span> Inspired Creativity</h2>
                    </div>
                </li>
                <li>
                    <div class="feature-three__title-box">
                        <h2 class="feature-three__title"> <span>*</span> Design Craft</h2>
                    </div>
                </li>
                <li>
                    <div class="feature-three__title-box">
                        <h2 class="feature-three__title"> <span>*</span> Transofrm Ideas</h2>
                    </div>
                </li>
                <li>
                    <div class="feature-three__title-box">
                        <h2 class="feature-three__title"> <span>*</span> Inspired Creativity</h2>
                    </div>
                </li>
                <li>
                    <div class="feature-three__title-box">
                        <h2 class="feature-three__title"> <span>*</span> Design Craft</h2>
                    </div>
                </li>
                <li>
                    <div class="feature-three__title-box">
                        <h2 class="feature-three__title"> <span>*</span> Transofrm Ideas</h2>
                    </div>
                </li>
                <li>
                    <div class="feature-three__title-box">
                        <h2 class="feature-three__title"> <span>*</span> Inspired Creativity</h2>
                    </div>
                </li>
                <li>
                    <div class="feature-three__title-box">
                        <h2 class="feature-three__title"> <span>*</span> Design Craft</h2>
                    </div>
                </li>
                <li>
                    <div class="feature-three__title-box">
                        <h2 class="feature-three__title"> <span>*</span> Transofrm Ideas</h2>
                    </div>
                </li>
                <li>
                    <div class="feature-three__title-box">
                        <h2 class="feature-three__title"> <span>*</span> Inspired Creativity</h2>
                    </div>
                </li>
                <li>
                    <div class="feature-three__title-box">
                        <h2 class="feature-three__title"> <span>*</span> Design Craft</h2>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--Feature One End-->

    <!--Portfolio One Start-->
    <section class="portfolio-one">
        <div class="container">
            <div class="row">
                <!--Portfolio One Single Start-->
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="portfolio-one__single">
                        <div class="portfolio-one__img-box">
                            <div class="portfolio-one__img">
                                <img src="{{ asset('front') }}/assets/images/project/portfolio-1-1.jpg" alt="">
                            </div>
                            <div class="portfolio-one__content">
                                <p class="portfolio-one__sub-title">Digital, Agency</p>
                                <h3 class="portfolio-one__title"><a href="portfolio-details.html">Asus marketing</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Portfolio One Single End-->
                <!--Portfolio One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="portfolio-one__single">
                        <div class="portfolio-one__img-box">
                            <div class="portfolio-one__img">
                                <img src="{{ asset('front') }}/assets/images/project/portfolio-1-2.jpg" alt="">
                            </div>
                            <div class="portfolio-one__content">
                                <p class="portfolio-one__sub-title">Digital, Agency</p>
                                <h3 class="portfolio-one__title"><a href="portfolio-details.html">Asus marketing</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Portfolio One Single End-->
                <!--Portfolio One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="portfolio-one__single">
                        <div class="portfolio-one__img-box">
                            <div class="portfolio-one__img">
                                <img src="{{ asset('front') }}/assets/images/project/portfolio-1-3.jpg" alt="">
                            </div>
                            <div class="portfolio-one__content">
                                <p class="portfolio-one__sub-title">Digital, Agency</p>
                                <h3 class="portfolio-one__title"><a href="portfolio-details.html">Asus marketing</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Portfolio One Single End-->
                <!--Portfolio One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="portfolio-one__single">
                        <div class="portfolio-one__img-box">
                            <div class="portfolio-one__img">
                                <img src="{{ asset('front') }}/assets/images/project/portfolio-1-4.jpg" alt="">
                            </div>
                            <div class="portfolio-one__content">
                                <p class="portfolio-one__sub-title">Digital, Agency</p>
                                <h3 class="portfolio-one__title"><a href="portfolio-details.html">Asus marketing</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Portfolio One Single End-->
                <!--Portfolio One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="portfolio-one__single">
                        <div class="portfolio-one__img-box">
                            <div class="portfolio-one__img">
                                <img src="{{ asset('front') }}/assets/images/project/portfolio-1-5.jpg" alt="">
                            </div>
                            <div class="portfolio-one__content">
                                <p class="portfolio-one__sub-title">Digital, Agency</p>
                                <h3 class="portfolio-one__title"><a href="portfolio-details.html">Asus marketing</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Portfolio One Single End-->
                <!--Portfolio One Single Start-->
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="portfolio-one__single">
                        <div class="portfolio-one__img-box">
                            <div class="portfolio-one__img">
                                <img src="{{ asset('front') }}/assets/images/project/portfolio-1-6.jpg" alt="">
                            </div>
                            <div class="portfolio-one__content">
                                <p class="portfolio-one__sub-title">Digital, Agency</p>
                                <h3 class="portfolio-one__title"><a href="portfolio-details.html">Asus marketing</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Portfolio One Single End-->
            </div>
        </div>
    </section>
    <!--Portfolio One End-->

    <!--Testimonial One Start-->
    <section class="testimonial-one">
        <div class="testimonial-one__inner">
            <div class="testimonial-one__bg" style="background-image: url({{ asset('front') }}/assets/images/backgrounds/testimonial-one-bg.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="testimonial-one__left">
                            <div class="section-title text-left">
                                <p class="section-title__tagline"><span>//</span> our testimonials <span>//</span>
                                </p>
                                <h2 class="section-title__title">What they’re
                                    talking about us</h2>
                            </div>
                            <p class="testimonial-one__left-text">How to pursue pleasure rationally encounter
                                consequences
                                that painful again is there anyone who loves.</p>
                            <div class="testimonial-one__ratting-box">
                                <div class="testimonial-one__ratting">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                                <p>4.9 Average rating</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="testimonial-one__right">
                            <div class="testimonial-one__img-1">
                                <img src="{{ asset('front') }}/assets/images/testimonial/testimonial-one-img-1.jpg" alt="">
                                <div class="testimonial-one__img-2">
                                    <img src="{{ asset('front') }}/assets/images/testimonial/testimonial-one-img-2.jpg" alt="">
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
                                                <h3>Sarah brown</h3>
                                                <p>Co Founder</p>
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
                                                <h3>David koper</h3>
                                                <p>Co Founder</p>
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
                                                <h3>Alisha martin</h3>
                                                <p>Co Founder</p>
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

    <!--Team One Start-->
    <section class="team-one">
        <div class="container">
            <div class="section-title text-center">
                <p class="section-title__tagline"><span>//</span> our smart people <span>//</span>
                </p>
                <h2 class="section-title__title">Meet the team behind the
                    <br> agency success</h2>
            </div>
            <div class="row">
                <!--Team One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ asset('front') }}/assets/images/team/team-1-1.jpg" alt="">
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
                                <h3><a href="team-details.html">Mike hardson</a></h3>
                                <p>Developer</p>
                            </div>
                            <div class="team-one__arrow">
                                <a href="team-details.html"><span class="icon-right-lg-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ asset('front') }}/assets/images/team/team-1-2.jpg" alt="">
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
                                <h3><a href="team-details.html">Aleesha brown</a></h3>
                                <p>Designer</p>
                            </div>
                            <div class="team-one__arrow">
                                <a href="team-details.html"><span class="icon-right-lg-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ asset('front') }}/assets/images/team/team-1-3.jpg" alt="">
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
                                <h3><a href="team-details.html">Kevin martin</a></h3>
                                <p>Manager</p>
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

    <!--Award One Start-->
    <section class="award-one">
        <div class="container">
            <div class="award-one__inner">
                <ul class="award-one__list list-unstyled">
                    <li>
                        <h3 class="award-one__title">2016 Awards</h3>
                        <p class="award-one__text">New stretegy
                            <br> Visualization</p>
                    </li>
                    <li>
                        <h3 class="award-one__title">2018 Awards</h3>
                        <p class="award-one__text">Animation quality
                            <br> Mobile excellence</p>
                        <p class="award-one__sub-title">Site of the day</p>
                        <p class="award-one__text-2">Won award</p>
                    </li>
                    <li>
                        <h3 class="award-one__title">2020 Awards</h3>
                        <p class="award-one__text">New stretegy
                            <br> Visualization</p>
                    </li>
                    <li>
                        <h3 class="award-one__title">2022 Awards</h3>
                        <p class="award-one__text">Animation quality
                            <br> Mobile excellence</p>
                        <p class="award-one__sub-title">Site of the day</p>
                        <p class="award-one__text-2">Won award</p>
                    </li>
                    <li>
                        <h3 class="award-one__title">2023 Awards</h3>
                        <p class="award-one__text">New stretegy
                            <br> Visualization</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Award One End-->

    <!--Why Choose One Start-->
    <section class="why-choose-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="why-choose-one__left">
                        <div class="section-title text-left">
                            <p class="section-title__tagline"><span>//</span> our benefits <span>//</span>
                            </p>
                            <h2 class="section-title__title">Why you should choose
                                our agency</h2>
                        </div>
                        <p class="why-choose-one__text">Proin est lacus, sagittis lobortis iaculise get.</p>
                        <p class="why-choose-one__text-2">There are many variations of passages of available but the
                            majority have suffered. Alteration in some form, lipsum is simply free text by injected
                            humou or randomised words even believable.</p>
                        <ul class="why-choose-one__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-success"></span>
                                </div>
                                <div class="text">
                                    <p>Leader of
                                        <br> creative agency</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-job-promotion"></span>
                                </div>
                                <div class="text">
                                    <p>Highest quality
                                        <br> development</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="why-choose-one__right">
                        <div class="why-choose-one__img wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <img src="{{ asset('front') }}/assets/images/resources/why-choose-one-img-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Why Choose One End-->

    <!--Counter One Start-->
    <section class="counter-one">
        <div class="counter-one__bg" style="background-image: url({{ asset('front') }}/assets/images/backgrounds/counter-one-bg.jpg);">
        </div>
        <div class="container">
            <div class="row">
                <!--Counter One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="counter-one__single">
                        <div class="counter-one__icon">
                            <span class="icon-new-project"></span>
                        </div>
                        <div class="counter-one__count count-box">
                            <h3 class="count-text" data-stop="82" data-speed="1500">00</h3>
                            <span>k</span>
                        </div>
                        <p class="counter-one__text">Projects completed</p>
                    </div>
                </div>
                <!--Counter One Single End-->
                <!--Counter One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="counter-one__single counter-one__single-two">
                        <div class="counter-one__icon">
                            <span class="icon-trophy"></span>
                        </div>
                        <div class="counter-one__count count-box">
                            <h3 class="count-text" data-stop="170" data-speed="1500">00</h3>
                        </div>
                        <p class="counter-one__text">Honorable awards</p>
                    </div>
                </div>
                <!--Counter One Single End-->
                <!--Counter One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="counter-one__single">
                        <div class="counter-one__icon">
                            <span class="icon-recommend"></span>
                        </div>
                        <div class="counter-one__count count-box">
                            <h3 class="count-text" data-stop="80" data-speed="1500">00</h3>
                            <span>k</span>
                        </div>
                        <p class="counter-one__text">Satisfied customers</p>
                    </div>
                </div>
                <!--Counter One Single End-->
                <!--Counter One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="counter-one__single counter-one__single-four">
                        <div class="counter-one__icon">
                            <span class="icon-consulting"></span>
                        </div>
                        <div class="counter-one__count count-box">
                            <h3 class="count-text" data-stop="680" data-speed="1500">00</h3>
                        </div>
                        <p class="counter-one__text">Professional team</p>
                    </div>
                </div>
                <!--Counter One Single End-->
            </div>
        </div>
    </section>
    <!--Counter One End-->

    <!--Contact One Start-->
    <section class="contact-one">
        <div class="contact-one__shape-5 float-bob-x">
            <img src="{{ asset('front') }}/assets/images/shapes/contact-one-shape-5.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="contact-one__left">
                        <div class="contact-one__shape-1 float-bob-x">
                            <img src="{{ asset('front') }}/assets/images/shapes/contact-one-shape-1.png" alt="">
                        </div>
                        <div class="contact-one__shape-3">
                            <img src="{{ asset('front') }}/assets/images/shapes/contact-one-shape-3.png" alt="">
                        </div>
                        <div class="contact-one__shape-4">
                            <img src="{{ asset('front') }}/assets/images/shapes/contact-one-shape-4.png" alt="">
                        </div>
                        <div class="contact-one__img">
                            <img src="{{ asset('front') }}/assets/images/resources/contact-one-img-1.jpg" alt="">
                            <div class="contact-one__shape-2">
                                <img src="{{ asset('front') }}/assets/images/shapes/contact-one-shape-2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="contact-one__right">
                        <div class="section-title text-left">
                            <p class="section-title__tagline"><span>//</span> contact us <span>//</span>
                            </p>
                            <h2 class="section-title__title">Let’s work together</h2>
                        </div>
                        <div class="contact-one__form-box">
                            <form action="{{ asset('front') }}/assets/inc/sendemail.php" class="contact-one__form contact-form-validated" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact-one__form-input-box">
                                            <input type="text" placeholder="Your name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact-one__form-input-box">
                                            <input type="email" placeholder="Email address" name="email">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact-one__form-input-box">
                                            <input type="text" placeholder="Phone" name="Phone">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact-one__form-input-box">
                                            <select class="selectpicker" aria-label="Default select example">
                                                <option selected="">Select service</option>
                                                <option value="1">Select service 01</option>
                                                <option value="2">Select service 02</option>
                                                <option value="3">Select service 03</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact-one__form-input-box text-message-box">
                                            <textarea name="message" placeholder="Write  a message"></textarea>
                                        </div>
                                        <div class="contact-one__btn-box">
                                            <button type="submit" class="thm-btn contact-one__btn">Send a
                                                Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact One End-->

    <!--Blog One Start-->
    <section class="blog-one">
        <div class="container">
            <div class="section-title text-left">
                <p class="section-title__tagline"><span>//</span> our recent posts <span>//</span>
                </p>
                <h2 class="section-title__title">Check our latest news &
                    <br> articles from the blog</h2>
            </div>
            <div class="row">
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="{{ asset('front') }}/assets/images/blog/blog-1-1.jpg" alt="">
                            </div>
                            <div class="blog-one__date">
                                <p>16 apr</p>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <p><span class="fas fa-tags"></span>Design</p>
                                </li>
                                <li>
                                    <p><span class="fas fa-comments"></span>2 Comments</p>
                                </li>
                            </ul>
                            <div class="blog-one__title-box">
                                <h3 class="blog-one__title"><a href="blog-details.html">Trending code settings for
                                        a</a>
                                </h3>
                                <h3 class="blog-one__title"><a href="blog-details.html">nice portfolio</a></h3>
                            </div>
                            <div class="blog-one__btn-box">
                                <a href="blog-details.html"><span class="icon-right-lg-arrow"></span></a>
                                <a href="blog-details.html" class="blog-one__btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="blog-one__single blog-one__single-2">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="{{ asset('front') }}/assets/images/blog/blog-1-2.jpg" alt="">
                            </div>
                            <div class="blog-one__date">
                                <p>16 apr</p>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <p><span class="fas fa-tags"></span>Design</p>
                                </li>
                                <li>
                                    <p><span class="fas fa-comments"></span>2 Comments</p>
                                </li>
                            </ul>
                            <div class="blog-one__title-box">
                                <h3 class="blog-one__title"><a href="blog-details.html">It’s through refresing
                                        to</a>
                                </h3>
                                <h3 class="blog-one__title"><a href="blog-details.html">get such a personal</a></h3>
                            </div>
                            <div class="blog-one__btn-box">
                                <a href="blog-details.html"><span class="icon-right-lg-arrow"></span></a>
                                <a href="blog-details.html" class="blog-one__btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="blog-one__single blog-one__single-3">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="{{ asset('front') }}/assets/images/blog/blog-1-3.jpg" alt="">
                            </div>
                            <div class="blog-one__date">
                                <p>16 apr</p>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <p><span class="fas fa-tags"></span>Design</p>
                                </li>
                                <li>
                                    <p><span class="fas fa-comments"></span>2 Comments</p>
                                </li>
                            </ul>
                            <div class="blog-one__title-box">
                                <h3 class="blog-one__title"><a href="blog-details.html">Due to their excellent
                                        service</a>
                                </h3>
                                <h3 class="blog-one__title"><a href="blog-details.html">competitive pricing</a></h3>
                            </div>
                            <div class="blog-one__btn-box">
                                <a href="blog-details.html"><span class="icon-right-lg-arrow"></span></a>
                                <a href="blog-details.html" class="blog-one__btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
            </div>
        </div>
    </section>
    <!--Blog One End-->

    <!--CTA One Start-->
    <section class="cta-one">
        <div class="container">
            <div class="cta-one__inner">
                <div class="cta-one__inner-content">
                    <div class="cta-one__shape-1 float-bob-y">
                        <img src="{{ asset('front') }}/assets/images/shapes/cta-one-shape-1.png" alt="">
                    </div>
                    <h3 class="cta-one__title">Let’s start working together.<br> <span>Get in touch</span> with us!
                    </h3>
                </div>
                <div class="cta-one__arrow">
                    <a href="contact.html"><span class="icon-right-lg-arrow"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!--CTA One End-->

    <!--Brand One Start-->
    <section class="brand-one">
        <div class="container">
            <h4 class="brand-one__title">1K+ Brands Trust Us</h4>
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                "0": {
                    "spaceBetween": 30,
                    "slidesPerView": 1
                },
                "375": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "575": {
                    "spaceBetween": 30,
                    "slidesPerView": 3
                },
                "767": {
                    "spaceBetween": 50,
                    "slidesPerView": 4
                },
                "991": {
                    "spaceBetween": 50,
                    "slidesPerView": 5
                },
                "1199": {
                    "spaceBetween": 100,
                    "slidesPerView": 5
                }
            }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('front') }}/assets/images/brand/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('front') }}/assets/images/brand/brand-1-2.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('front') }}/assets/images/brand/brand-1-3.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('front') }}/assets/images/brand/brand-1-4.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('front') }}/assets/images/brand/brand-1-5.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('front') }}/assets/images/brand/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('front') }}/assets/images/brand/brand-1-2.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('front') }}/assets/images/brand/brand-1-3.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('front') }}/assets/images/brand/brand-1-4.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{ asset('front') }}/assets/images/brand/brand-1-5.png" alt="">
                    </div><!-- /.swiper-slide -->
                </div>
            </div>
        </div>
    </section>
    <!--Brand One End-->
@endsection
