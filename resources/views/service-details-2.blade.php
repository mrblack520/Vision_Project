
@extends('components.header')
    @section('content')
    <div class="boxed_wrapper">

        <!-- mouse-pointer -->
        <div class="mouse-pointer" id="mouse-pointer"></div>
        <!-- mouse-pointer end -->


        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="D" class="letters-loading">
                                D
                            </span>
                            <span data-text-preloader="E" class="letters-loading">
                                E
                            </span>
                            <span data-text-preloader="C" class="letters-loading">
                                C
                            </span>
                            <span data-text-preloader="O" class="letters-loading">
                                O
                            </span>
                            <span data-text-preloader="R" class="letters-loading">
                                R
                            </span>
                            <span data-text-preloader="E" class="letters-loading">
                                E
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->

        <!-- page-title -->
        <section class="page-title centred">
            <div class="outer-container">
                <div class="bg-layer" style="background-image: url(assets/images/background/page-title-3.jpg);"></div>
                <div class="large-container">
                    <div class="title-box">
                        <h2>Interior Design</h2>
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
                                    <h2>Interior <span>Design</span></h2>
                                </div>
                                <p>Consequat metus, non cursus dolor vitae orci. Mauris etiam sed vitae cras vel dolor at urna. Gravida mi tincidunt dictum vitae. Euismod ullamcorper sit blandit quis. Consectetur pellentesque amet bibendum faucibus nisl.
                                    Non vestibulum convallis nunc nec. Bibendum nunc et congue venenatis malesuada morbi ut quam massa. Non eu quis lacus, volutpat diam aliquam tristique. Morbi massa facilisi diam quis cras pellentesque aliquam donec
                                    orci.</p>
                                <p>Et dictum diam tempus orci tristique volutpat sed. Metus quam hendrerit sed massa amet, amet, mauris mi, nunc. Nulla ut egestas congue at id est elit. Sagittis, egestas at nibh mauris at molestie a. Nunc ac aliquam nibh
                                    ac, et nunc, arcu feugiat. Quis arcu faucibus tempus lacinia lacus cras lacus. Consequat, feugiat eget facilisi dictum quis. Viverra tempus, nisl, aliquet consectetur tortor pellentesque. Eu pharetra, nunc proin diam
                                    ut.</p>
                                <p>Urna etiam arcu ligula tortor sociis libero. Adipiscing pharetra est, nisi, in sit. Aliquam imperdiet consectetur ipsum mauris ac nunc praesent pellentesque hendrerit. Varius duis nulla tincidunt mauris, maecenas hendrerit
                                    tellus. Congue pellentesque mus metus id urna, sit. Maecenas sagittis, in consequat faucibus tristique quisque lectus. Tincidunt vel commodo nec augue blandit lacus. Diam eros, odio nunc congue enim ultrices rhoncus
                                    imperdiet. Fringilla orci suspendisse elit mauris, vitae. Commodo enim vulputate egestas in.</p>
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
                                    <li><a href="service-details.html">Agency Minimal<i class="icon-15"></i></a></li>
                                    <li><a href="service-details-2.html" class="current">Interior Design<i class="icon-15"></i></a></li>
                                    <li><a href="service-details-3.html">Urban Design<i class="icon-15"></i></a></li>
                                    <li><a href="service-details-4.html">Decor Plan<i class="icon-15"></i></a></li>
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