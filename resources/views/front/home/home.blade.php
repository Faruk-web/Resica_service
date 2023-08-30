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
                                <h3 class="services-one__title"><a href="services-details.html">Our Vision</a>
                                </h3>
                                <div class="services-one__icon">
                                    <span class="icon-layer"></span>
                                </div>
                            </div>
                            <div class="services-one__hover-content">
                                <h3 class="services-one__hover-title"><a href="website-development.html">Our Vision</a>
                                </h3>
                                <p class="services-one__hover-text">We won’t stop until we achieve a society where all people living with disabilities enjoy equality and fairness.
                                </p>
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
                                <h3 class="services-one__title"><a href="services-details.html">Our Mission</a>
                                </h3>
                                <div class="services-one__icon">
                                    <span class="icon-cellphone"></span>
                                </div>
                            </div>
                            <div class="services-one__hover-content">
                                <h3 class="services-one__hover-title"><a href="app-development.html">Our Mission</a>
                                </h3>
                                <p class="services-one__hover-text">We are a strong community of workers providing high quality support to those living with a disability, promoting choice and control. We also support able bodied people needing short term or long term respite. </p>
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
                                <h3 class="services-one__title"><a href="services-details.html">Our Philosophy</a>
                                </h3>
                                <div class="services-one__icon">
                                    <span class="icon-megaphone"></span>
                                </div>
                            </div>
                            <div class="services-one__hover-content">
                                <h3 class="services-one__hover-title"><a href="digital-marketing.html">Our Philosophy</a>
                                </h3>
                                <p class="services-one__hover-text">We embrace the principles of continuous improvement and we are committed to the adoption of quality care delivery practices. </p>
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
    <div class="section-title text-center">
        <h2>NEWS &amp; EVENTS</h2>
    </div>
<!--Testimonial Two Start-->
<section class="testimonial-two">
    <div class="container">
        <div class="testimonial-two__slider">
            <div class="testimonial-two__thumb-outer-box">
                <div class="testimonial-two__thumb-carousel owl-carousel owl-theme">
                    <div class="testimonial-two__thumb-item">
                        <div class="testimonial-two__img-holder-box">
                            <div class="testimonial-two__img-holder">
                                <img src="assets/images/testimonial/testimonial-2-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-two__thumb-item">
                        <div class="testimonial-two__img-holder-box">
                            <div class="testimonial-two__img-holder">
                                <img src="assets/images/testimonial/testimonial-2-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-two__thumb-item">
                        <div class="testimonial-two__img-holder-box">
                            <div class="testimonial-two__img-holder">
                                <img src="assets/images/testimonial/testimonial-2-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonial-two__main-content">
                <div class="testimonial-two__carousel owl-carousel owl-theme">
                    <div class="testimonial-two__item">
                        <div class="testimonial-two__inner-content">
                            <div class="testimonial-two__inner-content-img">
                                <img src="assets/images/testimonial/testimonial-two-content-img-1-1.jpg" alt="">
                            </div>
                            <div class="testimonial-two__inner-content-box">
                                <p class="testimonial-two__text">This is due to their excellent service,
                                    competitive pricing and customer support. It’s throughly refresing to get
                                    such a personal touch.</p>
                                <h3 class="testimonial-two__client-name">Dainl christine <span> . Co
                                        founder</span> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-two__item">
                        <div class="testimonial-two__inner-content">
                            <div class="testimonial-two__inner-content-img">
                                <img src="assets/images/testimonial/testimonial-two-content-img-1-2.jpg" alt="">
                            </div>
                            <div class="testimonial-two__inner-content-box">
                                <p class="testimonial-two__text">This is due to their excellent service,
                                    competitive pricing and customer support. It’s throughly refresing to get
                                    such a personal touch.</p>
                                <h3 class="testimonial-two__client-name">Christine eve <span> . Co
                                        founder</span> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-two__item">
                        <div class="testimonial-two__inner-content">
                            <div class="testimonial-two__inner-content-img">
                                <img src="assets/images/testimonial/testimonial-two-content-img-1-3.jpg" alt="">
                            </div>
                            <div class="testimonial-two__inner-content-box">
                                <p class="testimonial-two__text">This is due to their excellent service,
                                    competitive pricing and customer support. It’s throughly refresing to get
                                    such a personal touch.</p>
                                <h3 class="testimonial-two__client-name">Kevin copper <span> . Co founder</span>
                                </h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!--Testimonial Two End-->
<section class="testimonial-two">
    <div class="container">
       <div class="row">
        <div class="col-lg-6">

            <div class="services-details__documents">
                <div class="icon">
                    <span class="icon-pdf-file"></span>
                </div>
                <div class="content">
                    <h3><a href="#">Community Participation</a></h3>
                    <p>Participation in community, social and civic activities is one of the most anticipated service for overall wellbeing.</p>
                </div>
            </div>


            <div class="services-details__documents">
                <div class="icon">
                    <span class="icon-pdf-file"></span>
                </div>
                <div class="content">
                    <h3><a href="#">Personal Care</a></h3>
                    <p>We supervise various personal activities of daily life of participants who require support in these activities.</p>
                </div>
            </div>


            <div class="services-details__documents">
                <div class="icon">
                    <span class="icon-pdf-file"></span>
                </div>
                <div class="content">
                    <h3><a href="#">SIL / SDA Accomodation</a></h3>
                    <p>Participants who are eligible for SDA receive funding for their accommodation as part of their plan.</p>
                </div>
            </div>

        </div>
        <div class="col-lg-6">
            <div class="services-details__documents">
                <div class="icon">
                    <span class="icon-pdf-file"></span>
                </div>
                <div class="content">
                    <h3><a href="#">Travel Assist</a></h3>
                    <p>Our transport support includes enabling participants to build capacity to travel independently.</p>
                </div>
            </div>


            <div class="services-details__documents">
                <div class="icon">
                    <span class="icon-pdf-file"></span>
                </div>
                <div class="content">
                    <h3><a href="#">Support Coordination</a></h3>
                    <p>We are focused on assisting participants to manage and direct their own services.</p>
                </div>
            </div>


            <div class="services-details__documents">
                <div class="icon">
                    <span class="icon-pdf-file"></span>
                </div>
                <div class="content">
                    <h3><a href="#">Respite Care</a></h3>
                    <p>Taking a short break from the carer role is not only deserved - its absolutely essential to making sure you can carry on without becoming exhausted.</p>
                </div>
            </div>
        </div>
       </div>
    </div>
</section>
 <!--Team One Start-->
 <section class="team-one">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="section-title__title">Vacancies</h2>
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
<!--Services Three Start-->
<section class="services-three">
    <div class="services-three__bg" style="background-image: url(assets/images/backgrounds/services-three-bg.jpg);"></div>
    <div class="container">
        <div class="section-title text-center">
            <h2>Why ResicareSA? </h2>
        </div>
        <div class="services-three__bottom">
            <ul class="services-three__services-list list-unstyled">
                <li>
                    <div class="services-three__single wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-three__single-inner">
                            <div class="services-three__single-bg" style="background-image: url(assets/images/backgrounds/services-three-single-bg.jpg);">
                            </div>
                            <div class="services-three__icon">
                                <span class="icon-webpage"></span>
                            </div>
                            <h3 class="services-three__title"><a href="website-development.html">Website
                                    <br> solutions</a></h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="services-three__single wow fadeInUp" data-wow-delay="200ms">
                        <div class="services-three__single-inner">
                            <div class="services-three__single-bg" style="background-image: url(assets/images/backgrounds/services-three-single-bg.jpg);">
                            </div>
                            <div class="services-three__icon">
                                <span class="icon-growth"></span>
                            </div>
                            <h3 class="services-three__title"><a href="graphic-designing.html">Graphic
                                    <br> solutions</a></h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="services-three__single wow fadeInUp" data-wow-delay="300ms">
                        <div class="services-three__single-inner">
                            <div class="services-three__single-bg" style="background-image: url(assets/images/backgrounds/services-three-single-bg.jpg);">
                            </div>
                            <div class="services-three__icon">
                                <span class="icon-online-shopping"></span>
                            </div>
                            <h3 class="services-three__title"><a href="digital-marketing.html">Marketing
                                    <br> solutions</a></h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="services-three__single wow fadeInUp" data-wow-delay="400ms">
                        <div class="services-three__single-inner">
                            <div class="services-three__single-bg" style="background-image: url(assets/images/backgrounds/services-three-single-bg.jpg);">
                            </div>
                            <div class="services-three__icon">
                                <span class="icon-planning"></span>
                            </div>
                            <h3 class="services-three__title"><a href="content-writting.html">Content
                                    <br> solutions</a></h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="services-three__single wow fadeInUp" data-wow-delay="500ms">
                        <div class="services-three__single-inner">
                            <div class="services-three__single-bg" style="background-image: url(assets/images/backgrounds/services-three-single-bg.jpg);">
                            </div>
                            <div class="services-three__icon">
                                <span class="icon-app-development"></span>
                            </div>
                            <h3 class="services-three__title"><a href="app-development.html">Application
                                    <br> solutions</a></h3>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Services Three End -->
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
                            <h2 class="section-title__title">We’re Changing The World Of Care!</h2>
                        </div>
                        <p class="why-choose-one__text-2">At ResicareSA, we exist to empower families to make informed choices for their loved ones support.</p>
                        <p class="why-choose-one__text-2">We understand the different types of support available through the NDIS, how to access it and learn about other support products which could enhance their quality of life.</p>
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
    php artisan migrate:rollback --path=/database/migrations/2023_07_19_094540_create_visitors_table.php
    <!--Why Choose One End-->
    <section class="services-three" style="background-color: black">
        <div class="container">
            <div class="m-5 text-center">
                <h2 class="text-white">Message From Our CEO</h2>
                <p class="text-white">
                    “ ResicareSA Pty Ltd is a company that was established with the sole aim of offering disability services that puts the participant as a first priority in creating opportunities promoting independence and progression in a safe and non-discriminating environment. ResicareSA prides itself on being a SA based, Registered NDIS Service Provider that puts you first. Our direction is led by your choice, needs and goals. We aim to create opportunity, promote independence and progression in a safe and non-discriminative environment for all our valued participants. ”
                </p>
            </div>
        </div>
    </section>
    <!--Brand One Start-->
    <section class="brand-one">
        <div class="container">
            <h4 class="brand-one__title mt-5">1K+ Brands Trust Us</h4>
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
