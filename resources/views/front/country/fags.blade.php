@extends('front.master')
@section('title')
    About us
@endsection
@section('body')
<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{ asset('front') }}/assets/images/backgrounds/page-header-bg.jpg);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>FAQs</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li class="active">FAQs</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--FAQ Page Start-->
<section class="faq-page">
    <div class="container">
        <div class="section-title text-left">
            <h2 class="section-title__title">Frequently Asked Questions</h2>
        </div>
        <p>You can be assured that we take participant confidentiality very seriously. That’s why we have implemented procedures to safeguard your privacy. We also pride ourselves in only employing highly trained staff, who have also undergone Police checks, Working with Children checks, NDIS Screening Check, CPR/First Aid Training and Covid-19 Infection Control Training.</p>
        <div class="row mt-5" >
            <div class="col-xl-6 col-lg-6">
                <div class="faq-page__right">
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>Are you able to assist me to apply for NDIS funding?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Certainly, once you have applied for NDIS funding and received confirmation of your eligibility, we can help you prepare for your initial funding assessment, and help you develop and implement your first Plan. </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion  active">
                            <div class="accrodion-title">
                                <h4> How many hours of support can i have?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Our highly trained staff are here to help support your care journey from initial funding application; through the planning process and implementation management of your approved plan and of course, through direct provision of support in the home. </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>Can I apply for funding under the NDIS?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>You can apply for NDIS funding if you:
                                        a)- Have a permanent and significant disability.
                                        b)- Are under 65 years of age.
                                        c)- Are an Australian Citizen OR.
                                        d)- Hold a Permanent Visa OR.
                                        e)- Hold a Protected Special Category Visa.
                                        To apply for NDIS funding, you will need to contact the National Disability Insurance Agency (NDIA) office in the first instance and request an Access Request Form. NDIA on 1800 800 110 or visit NDIS website. </p>
                                </div><!-- /.inner -->
                            </div>
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
        <div class="row mt-5" >
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
            <div class="col-xl-6 col-lg-6">
                <div class="faq-page__right">
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>Are you able to assist me to apply for NDIS funding?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Certainly, once you have applied for NDIS funding and received confirmation of your eligibility, we can help you prepare for your initial funding assessment, and help you develop and implement your first Plan. </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion  active">
                            <div class="accrodion-title">
                                <h4> How many hours of support can i have?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Our highly trained staff are here to help support your care journey from initial funding application; through the planning process and implementation management of your approved plan and of course, through direct provision of support in the home. </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>Can I apply for funding under the NDIS?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>You can apply for NDIS funding if you:
                                        a)- Have a permanent and significant disability.
                                        b)- Are under 65 years of age.
                                        c)- Are an Australian Citizen OR.
                                        d)- Hold a Permanent Visa OR.
                                        e)- Hold a Protected Special Category Visa.
                                        To apply for NDIS funding, you will need to contact the National Disability Insurance Agency (NDIA) office in the first instance and request an Access Request Form. NDIA on 1800 800 110 or visit NDIS website. </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--FAQ Page End-->

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

@endsection
