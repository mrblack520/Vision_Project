

@extends('components.header')
    @section('content')

    <div class="boxed_wrapper">
        @include('components.loader')

        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box clearfix">
                    <figure class="logo-box pull-left"><a href="index.html"><img src="assets/images/logo.png" alt=""></a></figure>
                    <div class="close-search pull-right"><span class="far fa-times"></span></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
                        <form method="post" action="index.html">
                            <div class="form-group">
                                <fieldset>
                                    <input type="search" class="form-control" name="search-input" value="" placeholder="Type your keyword and hit" required>
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- sidebar cart item -->
        <div class="xs-sidebar-group info-group info-sidebar">
            <div class="xs-overlay xs-bg-black"></div>
            <div class="xs-overlay xs-overlay-2 xs-bg-black"></div>
            <div class="xs-overlay xs-overlay-3 xs-bg-black"></div>
            <div class="xs-overlay xs-overlay-4 xs-bg-black"></div>
            <div class="xs-overlay xs-overlay-5 xs-bg-black"></div>
            <div class="xs-sidebar-widget">
                <div class="sidebar-widget-container">
                    <div class="widget-heading">
                        <a href="#" class="close-side-widget"><i class="fa fa-times"></i></a>
                    </div>
                    <div class="sidebar-textwidget">
                        <div class="sidebar-info-contents">
                            <div class="content-inner">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/images/logo.png" alt="" /></a>
                                </div>
                                <div class="content-box">
                                    <h4>About Us</h4>
                                    <p>also provides its high net worth clients and investors to search from luxury to affordable budget properties for sale and rent across Pakistan.</p>
                                    <p> We offer critical real estate brokerage and surveying services to private buyers and investors, embassies, trusts, and foundations</p>
                                    <a href="about.html" class="theme-btn btn-one">About Us</a>
                                </div>
                                <div class="contact-info">
                                    <h4>Contact Info</h4>
                                    <ul>
                                        <li>Dha phase 1 karachi City, Pakistan</li>
                                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                                    </ul>
                                </div>
                                <ul class="social-box">
                                    <li class="facebook"><a href="#" class="fab fa-facebook-f"></a></li>
                                    <li class="twitter"><a href="#" class="fab fa-twitter"></a></li>
                                    <li class="linkedin"><a href="#" class="fab fa-linkedin-in"></a></li>
                                    <li class="instagram"><a href="#" class="fab fa-instagram"></a></li>
                                    <li class="youtube"><a href="#" class="fab fa-youtube"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END sidebar widget item -->


       

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->


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
                                <h2>About the <span>Real Estate <br />Company</span></h2>
                            </div>
                            <div class="text">
                                <p>Penatibus turpis vel eget cursus ut et. Lacus velit, venenatis eu morbi egestas amet, nunc. Ut sem libero sed nisl tincidunt tristique egestas non vitae. Pulvinar quis duis leo in quis arcu enim. Vulputate velit mattis
                                    tincidunt nunc sed mauris, sit amet ullamcorper. Ullamcorper nunc mauris nunc proin sollicitudin mattis viverra purus congue.</p>
                                <p>Enim auctor est et, amet. Ante ridiculus sed eget felis, aliquam venenatis. Amet dolor feugiat ligula gravida a malesuada eu adipiscing volutpat.</p>
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
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <a href="service-details-2.html" class="inner-box">
                                <div class="icon-box"><img src="assets/images/icons/icon-9.png" alt=""></div>
                                <h4>Interior Design</h4>
                                <p>Penatibus turpis vel eget cursus ut et. Lacus velit, venenatis eu morbi egestas ame</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow slideInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <a href="service-details-2.html" class="inner-box">
                                <div class="icon-box"><img src="assets/images/icons/icon-10.png" alt=""></div>
                                <h4>Architecture</h4>
                                <p>Penatibus turpis vel eget cursus ut et. Lacus velit, venenatis eu morbi egestas ame</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow slideInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <a href="service-details-3.html" class="inner-box">
                                <div class="icon-box"><img src="assets/images/icons/icon-11.png" alt=""></div>
                                <h4>Urban Design</h4>
                                <p>Penatibus turpis vel eget cursus ut et. Lacus velit, venenatis eu morbi egestas ame</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow slideInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <a href="service-details-4.html" class="inner-box">
                                <div class="icon-box"><img src="assets/images/icons/icon-12.png" alt=""></div>
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
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <a href="service-details-2.html" class="inner-box">
                                <div class="icon-box"><img src="assets/images/icons/icon-9.png" alt=""></div>
                                <h4>Interior Design</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow slideInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <a href="service-details-2.html" class="inner-box">
                                <div class="icon-box"><img src="assets/images/icons/icon-10.png" alt=""></div>
                                <h4>Architecture</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow slideInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <a href="service-details-3.html" class="inner-box">
                                <div class="icon-box"><img src="assets/images/icons/icon-11.png" alt=""></div>
                                <h4>Urban Design</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow slideInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <a href="service-details-4.html" class="inner-box">
                                <div class="icon-box"><img src="assets/images/icons/icon-12.png" alt=""></div>
                                <h4>Discr Design</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-section end -->


        <!-- testimonial-style-three -->
        <section class="testimonial-style-three">
            <div class="large-container">
                <div class="inner-container">
                    <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <div class="quote">“</div>
                                <h4 class="text">Integer sed id adipiscing viverra turpis sit gravida nec semper. Velit eu consequat turpis faucibus lacus, arcu nibh. At bibendum facilisis imperdiet sed rhoncus, pretium nulla.</h4>
                                <div class="author-box">
                                    <figure class="author-thumb"><img src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
                                    <h4>Liam Noah</h4>
                                    <span class="designation">UX/ UI Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <div class="quote">“</div>
                                <h4 class="text">Integer sed id adipiscing viverra turpis sit gravida nec semper. Velit eu consequat turpis faucibus lacus, arcu nibh. At bibendum facilisis imperdiet sed rhoncus, pretium nulla.</h4>
                                <div class="author-box">
                                    <figure class="author-thumb"><img src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
                                    <h4>Liam Noah</h4>
                                    <span class="designation">UX/ UI Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <div class="quote">“</div>
                                <h4 class="text">Integer sed id adipiscing viverra turpis sit gravida nec semper. Velit eu consequat turpis faucibus lacus, arcu nibh. At bibendum facilisis imperdiet sed rhoncus, pretium nulla.</h4>
                                <div class="author-box">
                                    <figure class="author-thumb"><img src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
                                    <h4>Liam Noah</h4>
                                    <span class="designation">UX/ UI Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-style-three end -->


      


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