<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Perfect View</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" integrity="sha512-9YHSK59/rjvhtDcY/b+4rdnl0V4LPDWdkKceBl8ZLF5TB6745ml1AfluEU6dFWqwDw9lPvnauxFgpKvJqp7jiQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" integrity="sha512-9YHSK59/rjvhtDcY/b+4rdnl0V4LPDWdkKceBl8ZLF5TB6745ml1AfluEU6dFWqwDw9lPvnauxFgpKvJqp7jiQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Fav Icon -->
 <link rel="shortcut icon" href="assets/images/Perfect logo.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- Stylesheets -->
        <link href="./assets/css/font-awesome-all.css" rel="stylesheet">
        <link href="/assets/css/flaticon.css" rel="stylesheet">
        <link href="/assets/css/owl.css" rel="stylesheet">
        <link href="/assets/css/bootstrap.css" rel="stylesheet">
        <link href="/assets/css/jquery.fancybox.min.css" rel="stylesheet">
        <link href="/assets/css/animate.css" rel="stylesheet">
        <link href="/assets/css/nice-select.css" rel="stylesheet">
        <link href="/assets/css/color.css" rel="stylesheet">
        <link href="/assets/css/elpath.css" rel="stylesheet">
        <link href="/assets/css/style.css" rel="stylesheet">
        <link href="/assets/css/responsive.css" rel="stylesheet">

    <!-- Meta -->
    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" />

    <!-- *************
			************ CSS Files *************
		************* -->
    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="assets/fonts/icomoon/style.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/main.min.css"/>

    <!-- *************
			************ Vendor Css Files *************
		************ -->

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css"/>
</head>

<body>










    <!-- Required jQuery first, then Bootstrap Bundle JS -->


    <!-- contact-page-section -->
    <section class="contact-page-section">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-6.png);"></div>
        <div class="large-container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12 form-column">
                    <div class="form-inner">
                        <div class="sec-title">
                            <h2 class="sub-title">Update <span class="text-white"> Details Here</span></h2>

                        </div>
                        <form method="POST" action="{{URL::TO('/edit/' . $image_save->id)}}" enctype="multipart/form-data" id="contact-form" class="default-form">
                            @csrf
                           @method('PUT')
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="name" value="{{$image_save->name}}" placeholder="Full Name:" required="">
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="contacts" value="{{$image_save->contact}}" required="" placeholder="Contact:">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="adress" required="" value="{{$image_save->address}}" placeholder="Address:">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Email:" value="{{$image_save->email}}" required="">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="price" placeholder="Price:" value="{{$image_save->price}}" required="">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="length" placeholder="Length:" value="{{$image_save->length}}" required="">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input type="file" name="img" class="form-control" value="{{$image_save->image}}" required="">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="detail" value="{{$image_save->details}}" placeholder="Details Here: e.g()">{{$image_save->details}}</textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn text-center">
                                    <button class="theme-btn btn-one rounded-pill" type="submit" name="submit-form">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>



























    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Overlay Scroll JS -->
    <script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
    <script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

    <!-- Apex Charts -->
    <script src="assets/vendor/apex/apexcharts.min.js"></script>
    <script src="assets/vendor/apex/custom/home/ticketsData.js"></script>
    <script src="assets/vendor/apex/custom/home/avgTimeData.js"></script>
    <script src="assets/vendor/apex/custom/home/liveCallsData.js"></script>
    <script src="assets/vendor/apex/custom/home/agentsLiveData.js"></script>
    <script src="assets/vendor/apex/custom/home/ticketsPriorityData.js"></script>
    <script src="assets/vendor/apex/custom/home/newClosedData.js"></script>

    <!-- Rating -->
    <script src="assets/vendor/rating/raty.js"></script>
    <script src="assets/vendor/rating/raty-custom.js"></script>

    <!-- Custom JS files -->
    <script src="assets/js/custom.js"></script>
</body>

</html>
