    @extends('components.header')

    @section('content')
    <div class="boxed_wrapper">
        @include('components.loader')        <!-- about-section -->
        <section class="about-section alternat-2">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-4.png);"></div>
            <div class="large-container">
                <div class="row align-items-center clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div data-animation-box class="image-box p_relative d_block">
                            <figure data-animation-text class="overlay-anim-white-bg image p_relative d_block" data-animation="overlay-animation"><img src="assets/images/resource/about-2.jpg" alt=""></figure>
                            <div class="curve-text">
                                <div class="shape" style="background-image: url(assets/images/shape/shape-5.png);"></div>
                                <span class="curved-circle">Welcome To Our Perfect View</span>
                                <div class="text">
                                    <div class="inner">
                                        <h2>10<span>Years</span></h2>
                                        <h3>Experience</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box p_relative mr_50">
                            <div class="sec-title">
                                <span class="sub-title">GET TO KNOW</span>
                                <h2>Your Trusted <span>Architecture <br />Company</span></h2>
                            </div>
                            <div class="text">
                                <p>Perfect View Real Estate was founded by a highly experienced group of realtors in Pakistan specializing in all facets of the real estate business. Combined with over 10 years of experience.
</p>
                                <p></p>
                            </div>
                            <div class="btn-box">
                                <a href="about.html" class="theme-btn btn-one">All Informamtion</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->


        <!-- service-section -->
        <section class="service-section centred">
            <div class="large-container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <a href="service-details-2.html" class="inner-box">
                                <div class="icon-box"><img src="assets/images/icons/icon-2.png" alt=""></div>
                                <h4>Perfect View</h4>
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


        <!-- testimonial-style-two -->
        <section class="testimonial-style-two">
            <div class="bg-layer" style="background-image: url(assets/images/background/testimonial-bg.jpg);"></div>
            <div class="large-container">
                <div class="three-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <div class="quote">“</div>
                            <p>Perfect View has been there for us year after year, season after season. We can count on Perfect View to bring us the most quality traffic.”</p>
                            <div class="author-box">
                                <figure class="author-thumb"><img src="assets/images/resource/testimonial-2.jpg" alt=""></figure>
                                <h4>Liam Noah</h4>
                                <span class="designation">businessman</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <div class="quote">“</div>
                            <p>Perfect View does a tremendous job of putting content in a way that is consumable to the modern renter.” </p>
                            <div class="author-box">
                                <figure class="author-thumb"><img src="assets/images/resource/testimonial-3.jpg" alt=""></figure>
                                <h4>James Bond</h4>
                                <span class="designation">businessman</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <div class="quote">“</div>
                            <p>When I get a call from my Perfect View rep, I know that it's going to be a meaningful moment.” </p>
                            <div class="author-box">
                                <figure class="author-thumb"><img src="assets/images/resource/testimonial-4.jpg" alt=""></figure>
                                <h4>Haris Gulati</h4>
                                <span class="designation">businessman</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-style-two end -->


        <!-- clients-section -->
        <section class="clients-section about-page">
            <div class="auto-container">
                <div class="five-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                    <figure class="clients-logo"><a href="index.html"><img src="assets/images/clients/clients-1.png" alt=""></a></figure>
                    <figure class="clients-logo"><a href="index.html"><img src="assets/images/clients/clients-2.png" alt=""></a></figure>
                    <figure class="clients-logo"><a href="index.html"><img src="assets/images/clients/clients-3.png" alt=""></a></figure>
                    <figure class="clients-logo"><a href="index.html"><img src="assets/images/clients/clients-4.png" alt=""></a></figure>
                    <figure class="clients-logo"><a href="index.html"><img src="assets/images/clients/clients-5.png" alt=""></a></figure>
                </div>
            </div>
        </section>
        <!-- clients-section end -->


        <!-- team-section -->
        <section class="team-section about-page">
            <div class="large-container">
                <div class="sec-title centred">
                    <span class="sub-title">Professional</span>
                    <h2>Our Team</h2>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme owl-nav-none">
                    <div class="team-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/team/team-1.jpg" alt=""></figure>
                                 <ul class="social-links clearfix">
                                    <li><a href="/index"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="/index"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="/index"><i class="fa-brands fa-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="content-box">
                                <span class="count-text">01</span>
                                <h4><a href="team-details.html">Gaurav Bhalla</a></h4>
                                <span class="designation">Architecture</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/team/team-2.jpg" alt=""></figure>
                                 <ul class="social-links clearfix">
                                    <li><a href="/index"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="/index"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="/index"><i class="fa-brands fa-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="content-box">
                                <span class="count-text">02</span>
                                <h4><a href="team-details.html">Haris Gulati</a></h4>
                                <span class="designation">Architecture</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/team/team-3.jpg" alt=""></figure>
                                 <ul class="social-links clearfix">
                                    <li><a href="/index"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="/index"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="/index"><i class="fa-brands fa-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="content-box">
                                <span class="count-text">03</span>
                                <h4><a href="team-details.html">Michel Watson</a></h4>
                                <span class="designation">Architecture</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/team/team-1.jpg" alt=""></figure>
                                 <ul class="social-links clearfix">
                                    <li><a href="/index"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="/index"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="/index"><i class="fa-brands fa-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="content-box">
                                <span class="count-text">01</span>
                                <h4><a href="team-details.html">Gaurav Bhalla</a></h4>
                                <span class="designation">Architecture</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/team/team-2.jpg" alt=""></figure>
                                 <ul class="social-links clearfix">
                                    <li><a href="/index"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="/index"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="/index"><i class="fa-brands fa-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="content-box">
                                <span class="count-text">02</span>
                                <h4><a href="team-details.html">Haris Gulati</a></h4>
                                <span class="designation">Architecture</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/team/team-3.jpg" alt=""></figure>
                                 <ul class="social-links clearfix">
                                    <li><a href="/index"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="/index"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="/index"><i class="fa-brands fa-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="content-box">
                                <span class="count-text">03</span>
                                <h4><a href="team-details.html">Michel Watson</a></h4>
                                <span class="designation">Architecture</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/team/team-1.jpg" alt=""></figure>
                                 <ul class="social-links clearfix">
                                    <li><a href="/index"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="/index"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="/index"><i class="fa-brands fa-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="content-box">
                                <span class="count-text">01</span>
                                <h4><a href="team-details.html">Gaurav Bhalla</a></h4>
                                <span class="designation">Architecture</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/team/team-2.jpg" alt=""></figure>
                                 <ul class="social-links clearfix">
                                    <li><a href="/index"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="/index"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="/index"><i class="fa-brands fa-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="content-box">
                                <span class="count-text">02</span>
                                <h4><a href="team-details.html">Haris Gulati</a></h4>
                                <span class="designation">Architecture</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/team/team-3.jpg" alt=""></figure>
                                 <ul class="social-links clearfix">
                                    <li><a href="/index"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="/index"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="/index"><i class="fa-brands fa-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="content-box">
                                <span class="count-text">03</span>
                                <h4><a href="team-details.html">Michel Watson</a></h4>
                                <span class="designation">Architecture</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/team/team-1.jpg" alt=""></figure>
                                 <ul class="social-links clearfix">
                                    <li><a href="/index"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="/index"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="/index"><i class="fa-brands fa-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="content-box">
                                <span class="count-text">01</span>
                                <h4><a href="team-details.html">Gaurav Bhalla</a></h4>
                                <span class="designation">Architecture</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/team/team-2.jpg" alt=""></figure>
                                 <ul class="social-links clearfix">
                                    <li><a href="/index"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="/index"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="/index"><i class="fa-brands fa-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="content-box">
                                <span class="count-text">02</span>
                                <h4><a href="team-details.html">Haris Gulati</a></h4>
                                <span class="designation">Architecture</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/team/team-3.jpg" alt=""></figure>
                                 <ul class="social-links clearfix">
                                    <li><a href="/index"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="/index"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="/index"><i class="fa-brands fa-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="content-box">
                                <span class="count-text">03</span>
                                <h4><a href="team-details.html">Michel Watson</a></h4>
                                <span class="designation">Architecture</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-section end -->




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

   
