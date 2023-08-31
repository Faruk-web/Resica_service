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
                    <h2>NDIS Pricing</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">NDIS Pricing</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->
<!--FAQ Page Start-->
<section class="faq-page">
    <div class="container bt-4">
        <div class="section-title text-left">
            <h2 class="section-title__title">Pricing Arrangements</h2>
        </div>
        <div class="row" >
            <div class="col-xl-6 col-lg-6">
                <div class="faq-page__right">
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        <p>The NDIA regularly reviews and makes changes to pricing arrangements to ensure our approach: </p>
                    </div>
                    <ul class="list-unstyled pricing-page__service-list">
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p> Remains affordable and in place for future generations of Australians. </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>Better meet the needs of participants, their families, carers and providers. </p>
                            </div>
                        </li>
                    </ul>
                    <div class="pricing-page__btn-box">
                        <a href="pricing-tables.html" class="thm-btn pricing-page__btn">Pricing Updates</a>
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
<section class="services-three" style="background-image: url({{asset('front')}}/assets/images/project/portfolio-1-6.jpg);center center no-repeat; background-size: cover;">>
    <div class="container">
        <div class="text-center">
            <h2 class="text-white">How Does The NDIS Work For You?</h2>
            <p class="text-white mt-3"style="font-size: 18px;">
                NDIS Pricing Arrangements and Price Limits (previously the NDIS Price Guide) assist participants and disability support providers to understand the way that price controls for supports and services work in the NDIS. Price regulation is in place to ensure that participants receive value for money in the supports that they receive.
            </p>
            <p class="text-white mt-3" style="font-size: 18px;">
                The Support Catalogue lists all of the available supports that providers can use when lodging a payment request. It also provides information on the current (and previous) price limits for each support item and indicates which claim types (travel, non-face-to-face, etc.) apply for each price-limited support item.
            </p>
            <p class="text-white mt-3"style="font-size: 18px;">
                Price limits are the maximum prices that registered providers can charge NDIS participants for specific supports. Participants and providers can negotiate lower prices. NDIS pricing arrangements and price limits must be followed when supports are delivered to NDIA-managed or plan-managed participants.
            </p>
        </div>
    </div>
</section>

@endsection
