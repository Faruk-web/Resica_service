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
                    <h2>NDIS Overview</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">NDIS Overview</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->
<!--FAQ Page Start-->
<section class="faq-page">
    <div class="container bt-4">
        <div class="section-title text-left">
            <h2 class="section-title__title">Overview Of NDIS</h2>
        </div>
        <div class="row" >
            <div class="col-xl-6 col-lg-6">
                <div class="faq-page__right">
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        <p>The NDIS is the new way of providing support and funding to an estimated 500,000 Australians, under the age of 65, who have permanent and significant disability. A permanent disability means the disability is likely to be lifelong. A significant disability is one that has a substantial impact on a participant’s ability to complete everyday activities. The new system is designed to provide participants with support to enable them to live independently. This is done by the provision of assistance and / or products that help a participant in their daily life, as well as helping them to participate in the community and reach their goals.</p>
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
<section class="pricing-page">
    <div class="container">
        <div class="pricing-page__main-tab-box tabs-box">
            <div class="tabs-content">
                <!--tab-->
                <div class="tab active-tab" id="yearly">
                    <div class="pricing-page__inner">
                        <div class="row">
                            <!--Pricing Page Single Start-->
                            <div class="col-xl-4 col-lg-4">
                                <div class="pricing-page__single">
                                    <div class="pricing-page__single-inner">
                                        <div class="pricing-page__price-box">
                                            <h3 class="pricing-page__price">What Is The NDIS?</h3>
                                        </div>
                                        <div class="pricing-page__content">
                                            <p>The NDIS can provide all people with disability with information and connections to services in their communities such as doctors, sporting clubs, support groups, libraries and schools, as well as information about what support is provided by each state and territory government. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Pricing Page Single End-->
                            <!--Pricing Page Single Start-->
                            <div class="col-xl-4 col-lg-4">
                                <div class="pricing-page__single">
                                    <div class="pricing-page__single-inner">
                                        <div class="pricing-page__price-box">
                                            <h3 class="pricing-page__price">What Types Of Supports Are Funded?</h3>
                                        </div>
                                        <div class="pricing-page__content">
                                            <p>The types of supports that the NDIS may fund for participants include: Daily personal activities, transport to enable participation in community, social, economic and daily life activities, workplace help to allow a participant to successfully get or keep employment in the open or supported labour market.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Pricing Page Single End-->
                            <!--Pricing Page Single Start-->
                            <div class="col-xl-4 col-lg-4">
                                <div class="pricing-page__single">
                                    <div class="pricing-page__single-inner">
                                        <div class="pricing-page__price-box">
                                            <h3 class="pricing-page__price">What Is The NDIS Responsible For?</h3>
                                        </div>
                                        <div class="pricing-page__content">
                                            <p>The NDIS provides funding to eligible people based on their individual needs.
                                                Every NDIS participant has an individual plan that lists their goals and the funding they have received. NDIS participants use their funding to purchase supports and services that will help them pursue their goals.</p>
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
<!--FAQ Page End-->
<section class="services-three" style="background-image: url({{asset('front')}}/assets/images/project/portfolio-1-6.jpg);center center no-repeat; background-size: cover;">>
    <div class="container">
        <div class="text-center">
            <h2 class="text-white">How Does The NDIS Work For You?</h2>
            <p class="text-white mt-3" style="font-size: 18px;">
                The NDIS provides funding directly to eligible individuals. As a result, as an NDIS participant, you identify the support you need in your daily life, as well as what help you need to reach your goals. It also means you choose the NDIS provider you want to work with you. Your first step is to develop a NDIS plan. Your plan will be all about you and your goals and needs. It will provide a lot of detail about the supports you will be funded for. In addition, it will also list the amount of funding you will receive for each of these supports. Once your NDIS plan is approved, it will run for 12 months before being reviewed. If you require significant change to your plan, it will be reviewed earlier.
            </p>
        </div>
    </div>
</section>

@endsection
