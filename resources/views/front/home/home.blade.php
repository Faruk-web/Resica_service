@extends('front.master')

@section('title')
    Home
@endsection
<style>
    .main-slider__title {

}
</style>
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
                <div class="main-slider__bg" style="background-image: url({{ asset('front') }}/assets/images/resica/1.png);">
                </div><!-- /.slider-one__bg -->
                <div class="container">
                    <div class="main-slider__content">
                        <p class="main-slider__star">*</p>
                        <div class="main-slider__text-box">
                            <p class="main-slider__text">We understand the different types of support services available <br> so you can find the support you need. <br> We will work together to build <br> your capacity and respect your choices.</p>
                        </div>
                        <h2 class="main-slider__title">TAILOR YOUR LOVED ONE'S<br> <span>SUPPORTWITH RESICARESA</span> <a href="about.html" class="main-slider__btn"><i class="icon-right-arrow1"></i></a></h2>
                    </div>
                </div>
            </div>

            <div class="item main-slider__slide-2">
                <div class="main-slider__bg" style="background-image: url({{ asset('front') }}/assets/images/resica/2.png);">
                </div><!-- /.slider-one__bg -->
                <div class="container">
                    <div class="main-slider__content">
                        <p class="main-slider__star">*</p>
                        <div class="main-slider__text-box">
                            <p class="main-slider__text">Reach out to your local ResicareSA representative to see <br> if we can make a difference in someone`s life.</p>
                        </div>
                        <h2 class="main-slider__title">DESIGNED TO BE STRAIGHT<br> <span>FORWARD AND STRESS-FREE</span> <a href="about.html" class="main-slider__btn"><i class="icon-right-arrow1"></i></a></h2>
                    </div>
                </div>
            </div>

            <div class="item main-slider__slide-3">
                <div class="main-slider__bg" style="background-image: url({{ asset('front') }}/assets/images/resica/3.png);">
                </div><!-- /.slider-one__bg -->
                <div class="container">
                    <div class="main-slider__content">
                        <p class="main-slider__star">*</p>
                        <div class="main-slider__text-box">
                            <p class="main-slider__text">We are very Client and Family Focused <br> and Providing Exceptional Services to meet Individualised needs.</p>
                        </div>
                        <h2 class="main-slider__title">ALL OUR STAFF ARE HIGHLY<br> <span>TRAINED TO SUIT</span> <br> <span>CLIENTS INDI clients individual support.</span> <a href="about.html" class="main-slider__btn"><i class="icon-right-arrow1"></i></a></h2>
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
<!--Testimonial Two Start-->
<section class="testimonial-two" style="    background-color: black;">
<div class="section-title text-center" style="color:#fff">
        <h2 style="color:#fff">NEWS &amp; EVENTS</h2>
    </div>
    <div class="container">
        <div class="testimonial-two__slider">
            <div class="testimonial-two__thumb-outer-box">
                <div class="testimonial-two__thumb-carousel owl-carousel owl-theme">
                    <div class="testimonial-two__thumb-item">
                        <div class="testimonial-two__img-holder-box">
                            <div class="testimonial-two__img-holder">
                                <img src="{{ asset('front') }}/assets/images/testimonial/testimonial-2-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-two__thumb-item">
                        <div class="testimonial-two__img-holder-box">
                            <div class="testimonial-two__img-holder">
                                <img src="{{ asset('front') }}/assets/images/testimonial/testimonial-2-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-two__thumb-item">
                        <div class="testimonial-two__img-holder-box">
                            <div class="testimonial-two__img-holder">
                                <img src="{{ asset('front') }}/assets/images/testimonial/testimonial-2-3.jpg" alt="">
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
                                <img src="{{ asset('front') }}/assets/images/testimonial/testimonial-two-content-img-1-1.jpg" alt="">
                            </div>
                            <div class="testimonial-two__inner-content-box">
                                <p class="testimonial-two__text">The team at Resicare Port Agusta gave him the best home away from home we could have asked for. They were all so caring, friendly, and considerate. Ian knew he was in the best care possible, even his carers from Resicare were by his side day and night, so he was not alone. For this i will forever grateful for the care and support they supported not just Ian, but the immediate family with during the times we were not able to be there.</p>
                                <h3 class="testimonial-two__client-name" style="color:#fff">Client's Family <span> ResicareSA</span> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-two__item">
                        <div class="testimonial-two__inner-content">
                            <div class="testimonial-two__inner-content-img">
                                <img src="{{ asset('front') }}/assets/images/testimonial/testimonial-two-content-img-1-2.jpg" alt="">
                            </div>
                            <div class="testimonial-two__inner-content-box">
                                <p class="testimonial-two__text"> Although the move was stressful, this has been the best decision the family has made and we are so grateful for all that you have done to support us.</p>
                                <h3 class="testimonial-two__client-name " style="color:#fff">Maree<span> ResicareSA</span> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-two__item">
                        <div class="testimonial-two__inner-content">
                            <div class="testimonial-two__inner-content-img">
                                <img src="{{ asset('front') }}/assets/images/testimonial/testimonial-two-content-img-1-3.jpg" alt="">
                            </div>
                            <div class="testimonial-two__inner-content-box">
                                <p class="testimonial-two__text"> The care of Resicare SA is so incredible different that within a short time span 'B' has lost weight and also reflects in her behaviour a different outlook, not depressed, radiantly participates in discussions and shows that for the first time enjoys being alive and likes her accommodation because of the personal touch of care. A team that just releases unconditional love of three women within Resicare, have really broken down the barriers of a broken spirit and have built these bridges of trust.</p>
                                <h3 class="testimonial-two__client-name " style="color:#fff">Client's Family <span> ResicareSA</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-two__item">
                        <div class="testimonial-two__inner-content">
                            <div class="testimonial-two__inner-content-img">
                                <img src="{{ asset('front') }}/assets/images/testimonial/testimonial-two-content-img-1-3.jpg" alt="">
                            </div>
                            <div class="testimonial-two__inner-content-box">
                                <p class="testimonial-two__text"> I give you 5 stars for the kindness, support, and professionalism you have shown 'S' and myself. You have all gone above and beyond to accommodate her. I will be recommending you to anyone I come in contact with that is looking for SDA/SIL Housing. Thank you for all you have done.</p>
                                <h3 class="testimonial-two__client-name " style="color:#fff">Another Client <span> ResicareSA</span>
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
                            <h3><a href="team-details.html"> MORPHETT VALE 1.</a></h3>
                            <p>Vacancies : 2</p>
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
                            <h3><a href="team-details.html"> MORPHETT VALE 2.</a></h3>
                            <p>Vacancies : 1</p>
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
                            <h3><a href="team-details.html"> PARAFIELD 1.</a></h3>
                            <p> PARAFIELD 1.</p>
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
    <div class="services-three__bg" style="background-image: url({{ asset('front') }}/assets/images/backgrounds/services-three-bg.jpg);"></div>
    <div class="container">
        <div class="section-title text-center">
            <h2>Why ResicareSA? </h2>
        </div>
        <div class="services-three__bottom">
            <ul class="services-three__services-list list-unstyled">
                <li>
                    <div class="services-three__single wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-three__single-inner">
                            <div class="services-three__single-bg" style="background-image: url({{ asset('front') }}/assets/images/backgrounds/services-three-single-bg.jpg);">
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
                            <div class="services-three__single-bg" style="background-image: url({{ asset('front') }}/assets/images/backgrounds/services-three-single-bg.jpg);">
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
                            <div class="services-three__single-bg" style="background-image: url({{ asset('front') }}/assets/images/backgrounds/services-three-single-bg.jpg);">
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
                            <div class="services-three__single-bg" style="background-image: url({{ asset('front') }}/assets/images/backgrounds/services-three-single-bg.jpg);">
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
                            <div class="services-three__single-bg" style="background-image: url({{ asset('front') }}/assets/images/backgrounds/services-three-single-bg.jpg);">
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
    <!--Why Choose One Start-->
    <section class="why-choose-one">
        <div class="container mt-5">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="why-choose-one__left">
                        <div class="section-title text-left">
                            <h2 class="section-title__title">We’re Changing The World Of Care!</h2>
                        </div>
                        <p class="why-choose-one__text-2">At ResicareSA, we exist to empower families to make informed choices for their loved ones support. <br>We understand the different types of support available through the NDIS, how to access it and learn about other support products which could enhance their quality of life.</p>
                        <p class="why-choose-one__text-2"></p>
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
    <section class="services-three" style="background-color: black">
        <div class="container">
            <div class="m-5 text-center">
                <h2 class="text-white">Message From Our CEO</h2>
                <p class="text-white mt-3"style="font-size: 18px;">
                    “ ResicareSA Pty Ltd is a company that was established with the sole aim of offering disability services that puts the participant as a first priority in creating opportunities promoting independence and progression in a safe and non-discriminating environment. ResicareSA prides itself on being a SA based, Registered NDIS Service Provider that puts you first. Our direction is led by your choice, needs and goals. We aim to create opportunity, promote independence and progression in a safe and non-discriminative environment for all our valued participants. ”
                </p>
            </div>
        </div>
    </section>
    <!--Brand One Start-->
    <section class="why-choose-one">
        <div class="container mt-5">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="why-choose-one__left">
                        <div class="section-title text-left">
                            <h2 class="section-title__title">Covid-19 Infection Control Training</h2>
                        </div>
                        <p class="why-choose-one__text-2">All of our staff have successfully completed the Australian Government’s Department of Health online course on COVID-19 Infection Control Training. This course is specifically designed for care workers. The course is relevant for carers working in shared care facilities (including short term accommodation) and carers working in people’s home.</p>
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
@endsection
