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
                    <h2>Respite / Support Coordination</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Respite / Support Coordination</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->
<!--FAQ Page Start-->
<section class="faq-page">
    <div class="container bt-4">
        <div class="section-title text-left">
            <h2 class="section-title__title">The Challenge</h2>
        </div>
        <div class="row" >
            <div class="col-xl-6 col-lg-6">
                <div class="faq-page__right">
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        <p>ResicareSA can help participants maximise their NDIS plan and connect them with the services they need to support their goals. In particular, we are focused on assisting participants to manage and direct their own services. We do this by helping participants and their carers to navigate the often complex NDIS system to get the services needed. </p>
                    </div><br>
                    <h4>A Modern Take On Classic Design </h4><br>
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        <p>  Support coordination is defined to be a capacity building service to implement all actionable parts in a participant’s plan, including informal, mainstream, community and funded supports. It is all about getting the most out of a NDIS plan.

                            To put it simply, NDIS support coordination means that help is available to assist you in navigating the NDIS, so that you or your loved ones can get as much value from the NDIS as possible. This support works both during your application for NDIS and as ongoing support once your NDIS plan has been approved. The NDIS system, can, at times, seem quite overwhelming. We take the stress out of coordinating a plan so participants can focus on achieving their goals.  </p>
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
                            <div class="col-xl-12 col-lg-12">
                                <div class="pricing-page__single">
                                    <div class="pricing-page__single-inner">
                                        <div class="pricing-page__price-box">
                                            <h3 class="pricing-page__price">An Elegant Overal Design</h3>
                                        </div>
                                        <div class="text">
                                            <p>The support coordination that we provide includes, but is not limited to the following:  </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <ul class="list-unstyled pricing-page__service-list">
                                                    <li class="mt-3">
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p> Find and assess supports and services. </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Negotiate services and their prices, develop service agreements and create service bookings. </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Help build a participant’s capacity to act independently and exercise choice and control. </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Arrange service assessments. </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Budget for each support type. </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Liaise with plan managers. </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Resolve issues, problems and conflicts with your providers as they arise. </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Coordinate service delivery where you have multiple providers.  </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6">
                                                <ul class="list-unstyled pricing-page__service-list">
                                                    <li class="mt-3">
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p> Understand your responsibilities under service agreement. </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Make sure services are provided in accordance with your needs and preferences. </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Assess whether you achieved your goals and received value for money for your plan. </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Managing reports. </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Consider new goals. </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Initiate service agreement review. </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Identify solutions to problems experienced in implementing the plan. </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>Visit you at home or at a place convenient to you to discuss support coordination of your plan </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
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
