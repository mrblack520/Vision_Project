
@extends('components.header')
<!-- page wrapper -->
    @section('content')
    <div class="boxed_wrapper">

        @include('components.loader')


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
                    <h2>Our Completed <span> <br />Projects</span></h2>
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

                                    <figure class="image-box"><img src="./models-png/model14.png"  alt=""></figure>
                                    <div class="text">
                                        <h6><a href="/modal14">click it to see the 3D of the house</a></h6>
                                        <p>Karachi, Pakistan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all agency_minimal urban_design">
                            <div class="project-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="./models-png/model8.png" alt=""></figure>
                                    <div class="text">
                                        <h6><a href="/modal8">click it to see the 3D of the house</a></h6>
                                        <p>Karachi, Pakistan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all product interior_design">
                            <div class="project-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="./models-png/model9.png" alt=""></figure>
                                    <div class="text">
                                        <h6><a href="/modal9">click it to see the 3D of the house</a></h6>
                                        <p>Karachi, Pakistan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all agency_minimal interior_design urban_design">
                            <div class="project-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="./models-png/model10.png" alt=""></figure>
                                    <div class="text">
                                        <h6><a href="/modal10">click it to see the 3D of the house</a></h6>
                                        <p>Karachi, Pakistan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all urban_design interior_design">
                            <div class="project-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="./models-png/model1.png" alt=""></figure>
                                    <div class="text">
                                        <h6><a href="/modal11">click it to see the 3D of the house</a></h6>
                                        <p>Karachi, Pakistan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all agency_minimal urban_design">
                            <div class="project-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="./models-png/model12.png" alt=""></figure>
                                    <div class="text">
                                        <h6><a href="/modal12">click it to see the 3D of the house</a></h6>
                                        <p>Karachi, Pakistan</p>
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
