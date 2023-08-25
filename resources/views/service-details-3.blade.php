
@extends('components.header')
    @section('content')
    <div class="boxed_wrapper">

        @include('components.loader')

        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box clearfix">
                    <figure class="logo-box pull-left"><a href="/"><img src="assets/images/logo.png" alt=""></a></figure>
                    <div class="close-search pull-right"><span class="far fa-times"></span></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
                        <form method="post" action="/">
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
                                    <a href="/"><img src="assets/images/logo.png" alt="" /></a>
                                </div>
                                <div class="content-box">
                                    <h4>About Us</h4>
                                    <p> Perfect view is known for its professional expertise and excellent customer support and property consultation by the locality senior most expert.</p>
                                    <p>We are a modern, dynamic company that combines technical know-how and knowledge of international and local property markets with a customer-first philosophy.</p>
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
                <div class="nav-logo"><a href="/"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
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
                        <li><a href="/"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="/"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="/"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="/"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="/"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->


        <!-- page-title -->
        <section class="page-title centred">
            <div class="outer-container">
                <div class="bg-layer" style="background-image: url(assets/images/background/page-title-3.jpg);"></div>
                <div class="large-container">
                    <div class="title-box">
                        <h2>Urban Design</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- service-details -->
        <section class="service-details">
            <div class="large-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="service-details-content">
                            <div class="text">
                                <div class="sec-title">
                                    <h2>Urban <span>Design</span></h2>
                                </div>
                                <p>A web-based platform that empowers architects, engineers, contractors, and developers to collaborate and make intelligent building performance decisions that reduce design revisions and meet project goals while staying on time and on budget
                                    Get simple, automated, and impactful carbon calculations. Teams can collaborate quickly to gather crucial information on carbon emissions in order to make important project and design decisions. Create comprehensive carbon profiles to
                                    compare embodied carbon to operational carbon in order to estimate carbon's impact on a building during its entire lifecycle.</p>
                                <p>A web-based platform that empowers architects, engineers, contractors, and developers to collaborate and make intelligent building performance decisions that reduce design revisions and meet project goals while staying on time and on budget</p>
                                <p>A web-based platform that empowers architects, engineers, contractors, and developers to collaborate and make intelligent building performance decisions that reduce design revisions and meet project goals while staying on time and on budget
                                    Get simple, automated, and impactful carbon calculations. Teams can collaborate quickly to gather crucial information on carbon emissions in order to make important project and design decisions. Create comprehensive carbon profiles to
                                    compare embodied carbon to operational carbon in order to estimate carbon's impact on a building during its entire lifecycle.</p>
                            </div>
                            <div class="image-box">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 small-column">
                                        <figure class="image"><img src="assets/images/service/service-1.jpg" alt=""></figure>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 small-column">
                                        <figure class="image"><img src="assets/images/service/service-2.jpg" alt=""></figure>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 big-column">
                                        <figure class="image"><img src="assets/images/service/service-3.jpg" alt=""></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="service-sidebar">
                            <div class="category-widget">
                                <h3>All Services</h3>
                                <ul class="category-list clearfix">
                                    <li><a href="/service-details">Agency Minimal<i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="/service-details-2">Interior Design<i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="/service-details-3" class="current">Urban Design<i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="/service-details-4">Decor Plan<i class="fa-brands fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-details end -->




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
