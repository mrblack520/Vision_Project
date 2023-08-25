
@extends('components.header')
    @section('content')
    <div class="boxed_wrapper">

        @include('components.loader')
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
                                <p>While your content marketing strategy may be designed to help you attract and retain clients, at heart, your content needs to be about them. Content marketing is all about the value-add to your interior design consumers.
                                    One way we help our clients create customer-centric content is that we help them to develop buyer personas, which is an exercise to understand your ideal clientele, their interests, wants, and needs. When you truly know
                                    your audience, it's much easier to create content that will wow them.</p>
                                <p>Real estate developers place importance to this aspect, which SEO professionals have to consider while writing the content. The location and the surrounding of a Real estate project offer a plethora of ideas for creating unique SEO content</p>
                                <p>The location of a housing project is one of the most crucial aspects a real estate company has to take into account at the very beginning of conceptualizing a residential complex. Prime location will always be in demand,
                                    but it may not be affordable for everyone. Therefore project developers highlight good connectivity of the location to attract customers. While some residential projects may be in the heart of the city for those who
                                    wish to be well-connected for business purposes, some home buyers seek a peaceful, tranquil life in the lap on nature in a scenic location.</p>
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
                                    <li><a href="/service-details">Agency Minimal<i class="icon-15"></i></a></li>
                                    <li><a href="/service-details-2" class="current">Interior Design<i class="icon-15"></i></a></li>
                                    <li><a href="/service-details-3">Urban Design<i class="icon-15"></i></a></li>
                                    <li><a href="/service-details-4">Decor Plan<i class="icon-15"></i></a></li>
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
