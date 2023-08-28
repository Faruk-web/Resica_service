@extends('front.master')

@section('title')
    About us
@endsection

@section('body')
    <!-- page-title -->
    <div class="cmt-page-title-row">
        <div class="cmt-page-title-row-inner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title">Contact Us</h2>
                            <p>Founded In 1996 New York,USA</p>
                        </div>
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index-1.html">Home</a>
                                </span>
                            <span>Contact Us-1</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-title end -->


    <!--site-main start-->
    <div class="site-main">

        <!--google_map-->
        <div id="google_map" class="google_map res-991-mt-30">
            <div class="map_container">
                <div id="map"></div>
            </div>
        </div>


        <!--- conatact-section -->
        <section class="cmt-row conatact-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cmt-col-bgcolor-yes cmt-bg cmt-bgcolor-white z-index-2 spacing-7 box-shadow">
                            <div class="cmt-col-wrapper-bg-layer cmt-bg-layer"></div>
                            <div class="row ">
                                <div class="col-lg-4 col-md-5">
                                    <div class="cmt-bgcolor-darkgrey pt-30 pb-30 pl-30 pr-30">
                                        <div class="mb-20">
                                            <h4>Our Location</h4>
                                            <p>4578 Heverly Rd Crooklyn Mew York 12345 United States.</p>
                                        </div>
                                        <h4>Quick Contact</h4>
                                        <div class="cmt-textcolor-white">Email: <a href="mailto:info@example.com">info@example.com</a></div>
                                        <div class="cmt-textcolor-white">Support: <a href="mailto:info@werxyz.com">info@werxyz.com</a></div>
                                    </div>
                                    <div class="cmt-bgcolor-skincolor pt-30 pb-25 pl-30 pr-30">
                                        <h5 class="font-weight-normal">We will get back to you within 24 hours, or call us everyday, 09:00 AM - 12:00 PM</h5>
                                        <div class="d-flex align-items-center pt-10">
                                            <div class="cmt-icon cmt-icon_element-border cmt-icon_element-color-white cmt-icon_element-size-xs cmt-icon_element-style-rounded mb-10 mr-15">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <h4>+123 456 7890</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-7">
                                    <div class="pl-30 res-991-pl-0 res-767-mt-30">
                                        <!-- section title -->
                                        <div class="section-title with-desc clearfix">
                                            <div class="title-header">
                                                <h5>why choose us</h5>
                                                <h2 class="title">Get In <strong>Touch?</strong></h2>
                                            </div>
                                        </div><!-- section title end -->
                                        <form id="contact_form" class="contact_form wrap-form pt-15 clearfix" method="post" novalidate="novalidate" action="#">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <label>
                                                        <span class="text-input"><input name="name" type="text" value="" placeholder="Your Name" required="required"></span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <label>
                                                        <span class="text-input"><input name="address" type="text" value="" placeholder="Your Email" required="required"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <label>
                                                        <span class="text-input"><input name="phone" type="text" value="" placeholder="Phone Number" required="required"></span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <label>
                                                        <span class="text-input"><input name="phone" type="text" value="" placeholder="Subject" required="required"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <label>
                                                <span class="text-input"><textarea name="message" rows="5" placeholder="Message" required="required"></textarea></span>
                                            </label>
                                            <button class="submit cmt-btn cmt-btn-size-lg cmt-btn-shape-rounded cmt-btn-style-border cmt-btn-color-dark w-100" type="submit">Submit Request !</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row pt-30">
                    <div class="col-md-4">
                        <!-- featured-imagebox -->
                        <div class="featured-icon-box icon-align-top-content style8 box-shadow">
                            <div class="featured-icon">
                                <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-md">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                            </div>
                            <div class="featured-content pl-10 pr-10">
                                <div class="featured-title">
                                    <h5>Office 1</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Email: promina@7oroof.com<br>Address: 2307 Beverley Rd Brooklyn, NY<br>Phone: 010612457410<br>Hours: Mon-Fri: 8am – 7pm</p>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                    <div class="col-md-4">
                        <!-- featured-imagebox -->
                        <div class="featured-icon-box icon-align-top-content style8 box-shadow">
                            <div class="featured-icon">
                                <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-md">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                            </div>
                            <div class="featured-content pl-10 pr-10">
                                <div class="featured-title">
                                    <h5>Office 2</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Email: promina@7oroof.com<br>Address: 2307 Beverley Rd Brooklyn, NY<br>Phone: 010612457410<br>Hours: Mon-Fri: 8am – 7pm</p>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                    <div class="col-md-4">
                        <!-- featured-imagebox -->
                        <div class="featured-icon-box icon-align-top-content style8 box-shadow">
                            <div class="featured-icon">
                                <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-md">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                            </div>
                            <div class="featured-content pl-10 pr-10">
                                <div class="featured-title">
                                    <h5>Office 3</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Email: promina@7oroof.com<br>Address: 2307 Beverley Rd Brooklyn, NY<br>Phone: 010612457410<br>Hours: Mon-Fri: 8am – 7pm</p>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!-- conatact-section end -->

    </div><!--site-main end-->
@endsection
