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
                    <h2>Booklets and Factsheets</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Booklets and Factsheets</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->
<!--FAQ Page Start-->
<section class="faq-page">
    <div class="container bt-4">
        <div class="section-title text-left">
            <h2 class="section-title__title">Booklets and Factsheets </h2>
        </div>
        <div class="row" >
            <div class="col-xl-6 col-lg-6">
                <div class="faq-page__right">
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        <p>The NDIS bookets and factsheets are helpful tool for families, participants, carers, people with disability and community to learn more about:  </p>
                    </div>
                    <ul class="list-unstyled pricing-page__service-list">
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>  Understanding NDIS.  </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>Planning.  </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>Using your NDIS Plan. </p>
                            </div>
                        </li>
                    </ul>
                    <div class="pricing-page__btn-box">
                        <a href="pricing-tables.html" class="thm-btn pricing-page__btn">Booklet Updates</a>
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
@endsection
