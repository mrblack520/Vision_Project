<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard</title>

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
    <link rel="stylesheet" href="assets/css/main.min.css" />

    <!-- *************
			************ Vendor Css Files *************
		************ -->

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css" />
</head>

<body>
    <!-- Page wrapper start -->
    <div class="page-wrapper">

        <!-- Main container start -->
        <div class="main-container">

            <!-- Sidebar wrapper start -->
            <nav id="sidebar" class="sidebar-wrapper">

            

                <!-- Sidebar menu starts -->
                <div class="sidebarMenuScroll">
                    <ul class="sidebar-menu">
                        <li class="active current-page">
                            <a href="/dash">
									<i class="icon-stacked_line_chart"></i>
									<span class="menu-text">Admin Dashboard</span>
								</a>
                        </li>
                        <li>
                            <a href="/reports">
									<i class="icon-bar-chart"></i>
									<span class="menu-text">Reports</span>
								</a>
                        </li>
                        <li>
                            <a href="/clients">
									<i class="icon-filter_list"></i>
									<span class="menu-text">Clients</span>
								</a>
                        </li>
                        <li>
                            <a href="#">
									<i class="icon-sentiment_satisfied_alt"></i>
									<span class="menu-text">Agents</span>
								</a>
                        </li>
                      
                       
                        <li>
                            <a href="agent-profile">
									<i class="icon-support_agent"></i>
									<span class="menu-text">Agent Profile</span>
								</a>
                        </li>
                     
                      
                
                            </ul>
                        </li>
                      
                       
                      
                                    

            </nav>
            <!-- Sidebar wrapper end -->

            <!-- App container starts -->
            <div class="app-container">

                <!-- App header starts -->
                <div class="app-header d-flex align-items-center">

               

                   

                    <!-- App header actions start -->
                    <div class="header-actions">
                     
                       
                       
                        <div class="dropdown ms-2">
                            <a class="dropdown-toggle d-flex align-items-center user-settings" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								
									<img src="assets/images/user3.png" class="img-3x m-2 me-0 rounded-3" alt="Bootstrap Gallery" />
                                    <span>{{ Auth::user()->name }}</span>
								</a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-sm shadow-sm gap-3">
                                <a class="dropdown-item d-flex align-items-center py-2" href="profile"><i
											class="icon-gitlab fs-4 me-3"></i>User Profile</a>
                              
                                <a class="dropdown-item d-flex align-items-center py-2" href="{{ url('logout') }}"><i
											class="icon-log-out fs-4 me-3"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                    <!-- App header actions end -->
                </div>
                <!-- App header ends -->
            

            

            </div>
            <!-- App container ends -->
<h1>Welcome</h1>
        </div>
        <!-- Main container end -->

    </div>
    <!-- Page wrapper end -->





   
    <!-- *************
			************ JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
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
