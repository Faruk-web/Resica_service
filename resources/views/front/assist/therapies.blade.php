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
                    <h2>Holistic Health Therapies</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Holistic Health Therapies</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->
<!--FAQ Page Start-->
<section class="faq-page">
    <div class="container bt-4">
        <div class="section-title text-left">
            <h2 class="section-title__title">Holistic Health Therapies</h2>
        </div>
        <div class="row" >
            <div class="col-xl-6 col-lg-6">
                <div class="faq-page__right">
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        <p> To create a unique setting to enrich the lives of people living with disability through a wide range of core supports, holistic therapies and built environment whereby there are enhanced opportunities for social inclusion, connectivity, life skill development, supported independence, quality of life and sense of self worth and value can be achieved.
                            ResicareSA offers Holistic Therapies working with the mind, body and spirit of the individual. Supporting well-being, creating positive change and harmonious balance within. <br>We have a client focused therapeutic setting supporting the individual to enhance quality of life, mind, body and soul.  </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="faq-page__left">
                    <div class="faq-page__contact-box">
                        <div class="faq-page__contact-bg" style="background-image: url({{ asset('front') }}/assets/images/backgrounds/faq-page-contact-bg.jpg);">
                        </div>
                        <div class="faq-page__contact-icon">
                            <span class="icon-phone-call"></span>
                        </div>
                        <h3 class="faq-page__contact-title">Do you still
                            have questions?</h3>
                        <div class="faq-page__call">
                            <p class="faq-page__call-sub-title">Call Anytime</p>
                            <h5 class="faq-page__call-number"><a href="tel:9288009850">0422 792 979 / 08 7085 0633</a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--FAQ Page End-->
<section class="pricing-page">
    <div class="container">
        <div class="pricing-page__main-tab-box tabs-box">
            <div class="tabs-content">
                <!--tab-->
                <div class="tab active-tab" id="yearly">
                    <div class="pricing-page__inner">
                        <div class="row">
                            <!--Pricing Page Single Start-->
                            <div class="col-xl-6 col-lg-6">
                                <div class="pricing-page__single">
                                    <div class="pricing-page__single-inner">
                                        <div class="pricing-page__price-box">
                                            <h3 class="pricing-page__price">This can be achieved through; but not limited to:</h3>
                                        </div>
                                        {{-- <div class="pricing-page__content">
                                            <p>All activities are directed by participants and only limited by a participant’s imagination. This means we are flexible when it comes to supporting participants in meeting their goals. Activities can be facilitated or self directed capacity building. Participants are able to enjoy activities independently or as part of a group. <br>Our Homes Have The Following Recreational Areas Available:  </p>
                                        </div> --}}
                                        <ul class="list-unstyled pricing-page__service-list">
                                            <li class="mt-3">
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p> Counselling (supporting the thinking process). </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Reflexology (supporting the whole body).  </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Energy work (calming/ balancing the system). </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Meditation. </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Reiki. </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Aromatherapy. </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Mindfulness. </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Journalling.  </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Music/Sound therapy. </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Art Therapy. </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--Pricing Page Single End-->
                            <!--Pricing Page Single Start-->
                            <div class="col-xl-6 col-lg-6">
                                <div class="pricing-page__single">
                                    <div class="pricing-page__single-inner">
                                        <div class="pricing-page__price-box">
                                            <h3 class="pricing-page__price">Looking at the environment we live in has a big impact on our well being.</h3>
                                        </div>
                                        {{-- <div class="pricing-page__content">
                                            <p>We also provide support for participants to take part in various activities in the community. This includes providing transport to and from activities. <br>The types of activities that we can assist with include: </p>
                                        </div> --}}
                                        <ul class="list-unstyled pricing-page__service-list">
                                            <li class="mt-3">
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Incorporating home grown vegetables into healthy eating practices- ownership, choice and control. </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Inside and Outside. </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Furnishings. </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Lighting. </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Space. </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Sensory Garden - Awakening the senses. </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Food garden. </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Diet and exercise.  </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--Pricing Page Single End-->
                        </div>
                    </div>
                </div>
                <!--tab-->
            </div>
        </div>
    </div>
</section>
@endsection
