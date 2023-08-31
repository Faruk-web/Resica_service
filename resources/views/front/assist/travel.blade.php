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
            <div class="page-header__bg" style="background-image: url({{asset('front')}}/assets/images/backgrounds/page-header-bg.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Assistance With Travel & Transport</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Assistance With Travel & Transport</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->
<!--FAQ Page Start-->
<section class="faq-page">
    <div class="container bt-4">
        <div class="section-title text-left">
            <h2 class="section-title__title">Assistance With Travel & Transport </h2>
        </div>
        <div class="row" >
            <div class="col-xl-6 col-lg-6">
                <div class="faq-page__right">
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        <p>Catching public transport, from appointments, work, or to visit family and friends can be challenging sometimes. Our transport support includes enabling participants to build capacity to travel independently. This includes training to use public transport. ResicareSA staff are able to increase a participant’s independence through public transport training by helping you to learn public transport routes, bus/train timetables, buying and recharging a bus card, as well as how to use it. Our aim is to make your travel journey on public transport as easy and comfortable as possible, so you enjoy your time out and about in the community.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled pricing-page__service-list">
                                <h4 class="pricing-page__title">Other Support</h4>
                                <li class="mt-3">
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> Assist Daily Personal Activities  </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Behaviour Support </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Community Participation </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 mt-4">
                            <ul class="list-unstyled pricing-page__service-list">
                                <li class="mt-3">
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p> Group / Centre Activities </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Sleepover Support  </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Respite / Support Coordination </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
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
                                            <h3 class="pricing-page__price">Private & Public Transport Support</h3>
                                        </div>
                                        <ul class="list-unstyled pricing-page__service-list">
                                            <li class="mt-3">
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>An NDIS plan may also include the use of taxis or other private transport options, where a participant is not able to travel independently. </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>ResicareSA have a wheel-chair accessible van to support our participants who are unable to access public transport. </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>We are are able to drive you to your appointment or other places in the community and then drive you back again. </p>
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
                                            <h3 class="pricing-page__price">Convenience & Advance Scheduling</h3>
                                        </div>
                                        <div class="pricing-page__content">
                                            <p>We provide a convenient transport service, that can be scheduled in advance, that can take you to: </p>
                                        </div>
                                        <ul class="list-unstyled pricing-page__service-list">
                                            <li class="mt-3">
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p> Medical appointments. </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Place of education and work. </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Local shopping centre. </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Anywhere else in your community. </p>
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
