<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Decore interiors</title>

    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" integrity="sha512-9YHSK59/rjvhtDcY/b+4rdnl0V4LPDWdkKceBl8ZLF5TB6745ml1AfluEU6dFWqwDw9lPvnauxFgpKvJqp7jiQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" integrity="sha512-9YHSK59/rjvhtDcY/b+4rdnl0V4LPDWdkKceBl8ZLF5TB6745ml1AfluEU6dFWqwDw9lPvnauxFgpKvJqp7jiQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/owl.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <link href="assets/css/color.css" rel="stylesheet">
    <link href="assets/css/elpath.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

</head>

<!-- page wrapper -->

<body>
    @extends('components.header')
@section('content')
@include('components.loader')

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
                        <li>Dha phase 1, Karachi City, Pakistan</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">Pview@example.com</a></li>
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
                <div class="bg-layer" style="background-image: url(assets/images/background/page-title-8.jpg);"></div>
                <div class="large-container">
                    <div class="title-box">
                        <h2>Our Blog</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- news-section -->
        <section class="news-section blog-grid">
            <div class="large-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-two">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-3.jpg" alt=""></a></figure>
                                <div class="content-box">
                                    <ul class="post-info clearfix">
                                        <li><i class="fa-solid fa-user"></i><a href="blog-details.html">Author &nbsp;,</a></li>
                                        <li>16/02/2022</li>
                                    </ul>
                                    <h3><a href="/modal19">Discover Karachi's real estate gems at Perfect View's property sales event this Sunday</a></h3>
                                    <p>Attention all property enthusiasts and investors of Karachi! Brace yourselves for an exhilarating experience as Zameen.com proudly presents its signature Property Sales Event (PSE). This Sunday (August 6) …c </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-two">
                            <div class="inner-box">
                                <figure class="image-box"><a href="/modal19"><img src="assets/images/news/news-4.jpg" alt=""></a></figure>
                                <div class="content-box">
                                    <ul class="post-info clearfix">
                                        <li><i class="fa-solid fa-user"></i><a href="/modal19">Author &nbsp;,</a></li>
                                        <li>15/02/2022</li>
                                    </ul>
                                    <h3><a href="/modal19">The latest petrol price in pakistan??we know that........</a></h3>
                                    <p>This blog shows current prices of the most commonly available petroleum by-products in the country, such as petrol, diesel, light diesel, and kerosene oil. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-two">
                            <div class="inner-box">
                                <figure class="image-box"><a href="/modal19"><img src="assets/images/news/news-5.jpg" alt=""></a></figure>
                                <div class="content-box">
                                    <ul class="post-info clearfix">
                                        <li><i class="fa-solid fa-user"></i><a href="/modal19">Author &nbsp;,</a></li>
                                        <li>14/02/2022</li>
                                    </ul>
                                    <h3><a href="/modal19">Invest wisely with Perfect view Karachi real estate Extrawagnaza</a></h3>
                                    <p>Own Real Estate in Pakistan for Unparalleled Living and Working Opportunities Dreaming of living and working in one of the world's most exhilarating cities? Look no further than Pakitan, where the Pakistan Golden Visa opens doors to exceptional opportunities. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-two">
                            <div class="inner-box">
                                <figure class="image-box"><a href="/modal19"><img src="assets/images/news/news-.jpg" alt=""></a></figure>
                                <div class="content-box">
                                    <ul class="post-info clearfix">
                                        <li><i class="fa-solid fa-user"></i><a href="/modal18">Author &nbsp;,</a></li>
                                        <li>13/02/2022</li>
                                    </ul>
                                    <h3><a href="/modal18">Which real estate offers the best rental yeild in karachi.</a></h3>
                                    <p>The answer to that is The Edge Mall! The mega mixed-use development is one of the tallest buildings of the city. It offers a valuable investment opportunity the ….</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-two">
                            <div class="inner-box">
                                <figure class="image-box"><a href="/modal19"><img src="assets/images/news/news-7.jpg" alt=""></a></figure>
                                <div class="content-box">
                                    <ul class="post-info clearfix">
                                        <li><i class="fa-solid fa-user"></i><a href="/modal19">Author &nbsp;,</a></li>
                                        <li>12/02/2022</li>
                                    </ul>
                                    <h3><a href="/modal19">Uncover new statments avenues in karachi at Perfect view in sales event. </a></h3>
                                    <p>Join us this Sunday at the Perfect View Property Sales Event for an exclusive gateway to elevate your real estate portfolio with premium projects.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-two">
                            <div class="inner-box">
                                <figure class="image-box"><a href="/modal19"><img src="assets/images/news/news-8.jpg" alt=""></a></figure>
                                <div class="content-box">
                                    <ul class="post-info clearfix">
                                        <li><i class="fa-solid fa-user"></i><a href="/modal19">Author &nbsp;,</a></li>
                                        <li>11/02/2022</li>
                                    </ul>
                                    <h3><a href="/modal19">All the Reasons Why De Orion Mall-Multan Should be Topping Your Investment Radar
                                    </a></h3>
                                    <p>Are you on the hunt for an investment opportunity that not only promises lucrative returns but also encapsulates modern elegance and strategic location? Look no further than De …
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-section end -->





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

    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/nav-tool.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/jquery.lettering.min.js"></script>
    <script src="assets/js/jquery.circleType.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body>
<!-- End of .page_wrapper -->

</html>
