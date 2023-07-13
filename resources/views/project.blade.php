
@extends('components.header')
<!-- page wrapper -->
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
                <div class="bg-layer" style="background-image: url(assets/images/background/page-title-4.jpg);"></div>
                <div class="large-container">
                    <div class="title-box">
                        <h2>Our Project</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- project-page-section -->
        <section class="project-page-section">
            <div class="large-container">
                <div class="sec-title centred">
                    <h2>Our Completed <span>Architecture <br />Projects</span></h2>
                </div>
                <div class="sortable-masonry">
                    <div class="filters centred">
                        <ul class="filter-tabs filter-btns clearfix">
                            <li class="active filter" data-role="button" data-filter=".all">All</li>
                            <li class="filter" data-role="button" data-filter=".agency_minimal">Agency Minimal</li>
                            <li class="filter" data-role="button" data-filter=".interior_design">Interior Design</li>
                            <li class="filter" data-role="button" data-filter=".urban_design">Urban Design</li>
                        </ul>
                    </div>
                    <div class="items-container row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all product interior_design urban_design">
                            <div class="project-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/project/project-9.jpg" alt=""></figure>
                                    <div class="text">
                                        <h6>APEX</h6>
                                        <p>San Diego, California</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all agency_minimal urban_design">
                            <div class="project-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/project/project-10.jpg" alt=""></figure>
                                    <div class="text">
                                        <h6>APEX</h6>
                                        <p>San Diego, California</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all product interior_design">
                            <div class="project-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/project/project-11.jpg" alt=""></figure>
                                    <div class="text">
                                        <h6>APEX</h6>
                                        <p>San Diego, California</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all agency_minimal interior_design urban_design">
                            <div class="project-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/project/project-12.jpg" alt=""></figure>
                                    <div class="text">
                                        <h6>APEX</h6>
                                        <p>San Diego, California</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all urban_design interior_design">
                            <div class="project-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/project/project-13.jpg" alt=""></figure>
                                    <div class="text">
                                        <h6>APEX</h6>
                                        <p>San Diego, California</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all agency_minimal urban_design">
                            <div class="project-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="assets/images/project/project-14.jpg" alt=""></figure>
                                    <div class="text">
                                        <h6>APEX</h6>
                                        <p>San Diego, California</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- project-page-section end -->


       



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