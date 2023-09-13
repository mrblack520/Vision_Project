

@extends('components.header')
    @section('content')

    <div class="boxed_wrapper">
        @include('components.loader')




        <!-- page-title -->
        <section class="page-title centred">
            <div class="outer-container">
                <div class="bg-layer" style="background-image: url(assets/images/background/page-title-2.jpg);"></div>
                <div class="large-container">
                    <div class="title-box">
                        <h2>Services</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- about-style-three -->
        <section class="about-style-three">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-7.png);"></div>
            <div class="large-container">
                <div class="row clearfix">
                    <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="sec-title">
                                <span class="sub-title">Who We are</span>
                                <h2>About Our <span>Interior Designing <br />Company</span></h2>
                            </div>
                            <div class="text">
                                <p>Perfect View focusing on 3D interior designing services in Lahore, Islamabad, Rawalpindi, Karachi, and primarily focused on residential, commercial areas.
                                    </p>
                                <p> Perfect View is known for its professional expertise and excellent customer support and property consultation by the locality senior most expert.</p>
                                <a href="/about" class="theme-btn btn-one">About Info</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12 image-column">
                        <div data-animation-box class="image-box">
                            <figure data-animation-text class="overlay-anim-white-bg image image-1" data-animation="overlay-animation"><img src="assets/images/resource/about-3.jpg" alt=""></figure>
                            <figure data-animation-text class="overlay-anim-white-bg image image-2" data-animation="overlay-animation"><img src="assets/images/resource/about-4.jpg" alt=""></figure>
                            <div class="icon-box"><img src="assets/images/icons/icon-8.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-style-three end -->


        <!-- service-style-two -->
        <section class="service-style-two centred">
            <div class="bg-layer parallax-bg" data-parallax='{"y": 100}' style="background-image: url(assets/images/background/service-bg.jpg);"></div>
            <div class="large-container">
                <div class="sec-title">
                    <span class="sub-title">Services</span>
                    <h2>Solutions we <span>provide</span>.</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <a href="service-details-2.html" class="inner-box">
                                <div class="icon-box"><img src="assets/images/icons/icon-2.png" alt=""></div>
                                <h4>Interior Design</h4>
                                <p>Penatibus turpis vel eget cursus ut et. Lacus velit, venenatis eu morbi egestas ame</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow slideInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <a href="service-details-2.html" class="inner-box">
                                <div class="icon-box"><img src="assets/images/icons/icon-3.png" alt=""></div>
                                <h4>Architecture</h4>
                                <p>Penatibus turpis vel eget cursus ut et. Lacus velit, venenatis eu morbi egestas ame</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow slideInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <a href="service-details-3.html" class="inner-box">
                                <div class="icon-box"><img src="assets/images/icons/icon-4.png" alt=""></div>
                                <h4>Urban Design</h4>
                                <p>Penatibus turpis vel eget cursus ut et. Lacus velit, venenatis eu morbi egestas ame</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow slideInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <a href="service-details-4.html" class="inner-box">
                                <div class="icon-box"><img src="assets/images/icons/icon-5.png" alt=""></div>
                                <h4>Discr Design</h4>
                                <p>Penatibus turpis vel eget cursus ut et. Lacus velit, venenatis eu morbi egestas ame</p>
                            </a>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- service-style-two end -->


        <!-- service-section -->
        <section class="service-section service-page centred">
            <div class="large-container">
                <div class="sec-title">
                    <span class="sub-title">Serivcess</span>
                    <h2>Our included <span>service</span></h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <a href="service-details-2.html" class="inner-box">
                                <div class="icon-box"><img src="assets/images/icons/icon-2.png" alt=""></div>
                                <h4>Interior Design</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow slideInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <a href="service-details-2.html" class="inner-box">
                                <div class="icon-box"><img src="assets/images/icons/icon-3.png" alt=""></div>
                                <h4>Architecture</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow slideInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <a href="service-details-3.html" class="inner-box">
                                <div class="icon-box"><img src="assets/images/icons/icon-4.png" alt=""></div>
                                <h4>Urban Design</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow slideInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <a href="service-details-4.html" class="inner-box">
                                <div class="icon-box"><img src="assets/images/icons/icon-5.png" alt=""></div>
                                <h4>Discr Design</h4>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- service-section end -->








        <!--Scroll to top-->
        <div class="scroll-to-top">
            <div>
                <div class="scroll-top-inner">
                    <div class="scroll-bar">
                        <div class="bar-inner"></div>
                    </div>
                    <div class="scroll-bar-text">Go To Top</div>
                </div>
            </div>
        </div>
        <!-- Scroll to top end -->

    </div>
@endsection