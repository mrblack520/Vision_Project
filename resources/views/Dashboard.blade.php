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

                <!-- App brand starts -->
                <div class="app-brand px-3 py-2 d-flex align-items-center">
                    <a href="#">
							<img src="assets/images/logo.svg" class="logo" alt="Bootstrap Gallery" />
						</a>
                </div>
                <!-- App brand ends -->

                <!-- Sidebar menu starts -->
                <div class="sidebarMenuScroll">
                    <ul class="sidebar-menu">
                        <li class="active current-page">
                            <a href="/dash">
									<i class="icon-stacked_line_chart"></i>
									<span class="menu-text">Support Dashboard</span>
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
                            <a href="#">
									<i class="icon-message-circle"></i>
									<span class="menu-text">FAQ's</span>
								</a>
                        </li>
                        <li class="treeview">
                            <a href="#">
									<i class="icon-add_task"></i>
									<span class="menu-text">Tickets</span>
								</a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="#">All Tickets</a>
                                </li>
                                <li>
                                    <a href="#">Open Tickets</a>
                                </li>
                                <li>
                                    <a href="#">Pending Tickets</a>
                                </li>
                                <li>
                                    <a href="#">Closed Tickets</a>
                                </li>
                                <li>
                                    <a href="#">Solved Tickets</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="agent-profile">
									<i class="icon-support_agent"></i>
									<span class="menu-text">Agent Profile</span>
								</a>
                        </li>
                        <li>
                            <a href="notifications">
									<i class="icon-bell"></i>
									<span class="menu-text">Notifications</span>
								</a>
                        </li>
                        <li>
                            <a href="subscribers">
									<i class="icon-check-circle"></i>
									<span class="menu-text">Subscribers</span>
								</a>
                        </li>
                        <li class="treeview">
                            <a href="#!">
									<i class="icon-book-open"></i>
									<span class="menu-text">Invoices</span>
								</a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="client-list">Client List</a>
                                </li>
                                <li>
                                    <a href="invoice-list">Invoice List</a>
                                </li>
                                <li>
                                    <a href="invoice">Invoice Details</a>
                                </li>
                                <li>
                                    <a href="create-invoice">Create Invoice</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="datatables">
									<i class="icon-grid_on"></i>
									<span class="menu-text">DataTables</span>
								</a>
                        </li>
                        <li>
                            <a href="editor">
									<i class="icon-edit"></i>
									<span class="menu-text">Editor</span>
								</a>
                        </li>
                        <li>
                            <a href="placeholder">
									<i class="icon-align-left"></i>
									<span class="menu-text">Placeholder</span>
								</a>
                        </li>
                        <li class="treeview">
                            <a href="#!">
									<i class="icon-calendar"></i>
									<span class="menu-text">Calendars</span>
								</a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="calendar">Daygrid View</a>
                                </li>
                                <li>
                                    <a href="calendar-external-draggable">External Draggable</a>
                                </li>
                                <li>
                                    <a href="calendar-google">Google Calendar</a>
                                </li>
                                <li>
                                    <a href="calendar-list-view">List View</a>
                                </li>
                                <li>
                                    <a href="calendar-selectable">Selectable</a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#!">
									<i class="icon-layers"></i>
									<span class="menu-text">UI Elements</span>
								</a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="accordions">Accordions</a>
                                </li>
                                <li>
                                    <a href="alerts">Alerts</a>
                                </li>
                                <li>
                                    <a href="buttons">Buttons</a>
                                </li>
                                <li>
                                    <a href="badges">Badges</a>
                                </li>
                                <li>
                                    <a href="cards">Cards</a>
                                </li>
                                <li>
                                    <a href="custom-cards">Custom Cards</a>
                                </li>
                                <li>
                                    <a href="carousel">Carousel</a>
                                </li>
                                <li>
                                    <a href="icons">Icons</a>
                                </li>
                                <li>
                                    <a href="list-items">List Items</a>
                                </li>
                                <li>
                                    <a href="modals">Modals</a>
                                </li>
                                <li>
                                    <a href="progress">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="popovers">Popovers</a>
                                </li>
                                <li>
                                    <a href="tabs">Tabs</a>
                                </li>
                                <li>
                                    <a href="tooltips">Tooltips</a>
                                </li>
                                <li>
                                    <a href="typography">Typography</a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#!">
									<i class="icon-layout"></i>
									<span class="menu-text">Forms</span>
								</a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="form-inputs">Basic Form Inputs</a>
                                </li>
                                <li>
                                    <a href="form-checkbox-radio">Checkbox &amp; Radio</a>
                                </li>
                                <li>
                                    <a href="form-file-input">File Input</a>
                                </li>
                                <li>
                                    <a href="form-validations">Validations</a>
                                </li>
                                <li>
                                    <a href="date-time-pickers">Date Time Pickers</a>
                                </li>
                                <li>
                                    <a href="form-layouts">Form Layouts</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="starter-page">
									<i class="icon-padding"></i>
									<span class="menu-text">Starter Page</span>
								</a>
                        </li>
                        <li>
                            <a href="tables">
									<i class="icon-grid"></i>
									<span class="menu-text">Tables</span>
								</a>
                        </li>
                        <li class="treeview">
                            <a href="#!">
									<i class="icon-map"></i>
									<span class="menu-text">Graphs & Maps</span>
								</a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="apex">Apex</a>
                                </li>
                                <li>
                                    <a href="morris">Morris</a>
                                </li>
                                <li>
                                    <a href="maps">Maps</a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#!">
									<i class="icon-lock"></i>
									<span class="menu-text">Authentication</span>
								</a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="login">Login</a>
                                </li>
                                <li>
                                    <a href="signup">Signup</a>
                                </li>
                                <li>
                                    <a href="forgot-password">Forgot Password</a>
                                </li>
                                <li>
                                    <a href="page-not-found">Page Not Found</a>
                                </li>
                                <li>
                                    <a href="maintenance">Maintenance</a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#!">
									<i class="icon-notes"></i>
									<span class="menu-text">Multi Level</span>
								</a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="#!">Level One Link</a>
                                </li>
                                <li>
                                    <a href="#!">
											Level One Menu
											<i class="icon-arrow_forward_ios"></i>
										</a>
                                    <ul class="treeview-menu">
                                        <li>
                                            <a href="#!">Level Two Link</a>
                                        </li>
                                        <li>
                                            <a href="#!">Level Two Menu
													<i class="icon-arrow_forward_ios"></i>
												</a>
                                            <ul class="treeview-menu">
                                                <li>
                                                    <a href="#!">Level Three Link</a>
                                                </li>
                                                <li>
                                                    <a href="#!">Level Three Link</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#!">Level One Link</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar menu ends -->

            </nav>
            <!-- Sidebar wrapper end -->

            <!-- App container starts -->
            <div class="app-container">

                <!-- App header starts -->
                <div class="app-header d-flex align-items-center">

                    <!-- Toggle buttons start -->
                    <div class="d-flex">
                        <button class="btn btn-outline-light toggle-sidebar" id="toggle-sidebar">
								<i class="icon-menu"></i>
							</button>
                        <button class="btn btn-outline-light pin-sidebar" id="pin-sidebar">
								<i class="icon-menu"></i>
							</button>
                    </div>
                    <!-- Toggle buttons end -->

                    <!-- Search container start -->
                    <div class="search-container d-sm-block d-none mx-3">
                        <input type="text" class="form-control" placeholder="Search" />
                        <i class="icon-search"></i>
                    </div>
                    <!-- Search container end -->

                    <!-- App header actions start -->
                    <div class="header-actions">
                        <div class="dropdown">
                            <a class="dropdown-toggle d-flex p-3 position-relative" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<img src="assets/images/flags/1x1/gb.svg" class="flag-img" alt="Great Britain" />
								</a>
                            <div class="dropdown-menu dropdown-menu-end shadow-sm dropdown-menu-mini">
                                <div class="country-container">
                                    <a href="#" class="py-2">
											<img src="assets/images/flags/1x1/us.svg" alt="USA" />
										</a>
                                    <a href="#" class="py-2">
											<img src="assets/images/flags/1x1/in.svg" alt="India" />
										</a>
                                    <a href="#" class="py-2">
											<img src="assets/images/flags/1x1/br.svg" alt="Brazil" />
										</a>
                                    <a href="#" class="py-2">
											<img src="assets/images/flags/1x1/tr.svg" alt="Turkey" />
										</a>
                                    <a href="#" class="py-2">
											<img src="assets/images/flags/1x1/id.svg" alt="Indonesia" />
										</a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle d-flex p-3 position-relative" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="icon-mail fs-4 lh-1"></i>
									<span class="count rounded-circle bg-danger">9</span>
								</a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-md shadow-sm">
                                <h5 class="fw-semibold px-3 py-2 m-0">Messages</h5>
                                <a href="javascript:void(0)" class="dropdown-item">
                                    <div class="d-flex align-items-start py-2">
                                        <div class="p-3 bg-danger rounded-circle me-3">MS</div>
                                        <div class="m-0">
                                            <h6 class="mb-1 fw-semibold">Moory Sammy</h6>
                                            <p class="mb-1">Sent a mail.</p>
                                            <p class="small m-0 opacity-50">3 Mins Ago</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="dropdown-item">
                                    <div class="d-flex align-items-start py-2">
                                        <div class="p-3 bg-primary rounded-circle me-3">KY</div>
                                        <div class="m-0">
                                            <h6 class="mb-1 fw-semibold">Kyle Yomaha</h6>
                                            <p class="mb-1">Need support.</p>
                                            <p class="small m-0 opacity-50">5 Mins Ago</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="dropdown-item">
                                    <div class="d-flex align-items-start py-2">
                                        <div class="p-3 bg-success rounded-circle me-3">SB</div>
                                        <div class="m-0">
                                            <h6 class="mb-1 fw-semibold">Srinu Basava</h6>
                                            <p class="mb-1">Purchased a NotePad.</p>
                                            <p class="small m-0 opacity-50">7 Mins Ago</p>
                                        </div>
                                    </div>
                                </a>
                                <div class="d-grid p-3 border-top">
                                    <a href="javascript:void(0)" class="btn btn-outline-primary">View all</a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle d-flex p-3 position-relative" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="icon-twitch fs-4 lh-1"></i>
									<span class="count rounded-circle bg-danger">5</span>
								</a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-md shadow-sm">
                                <h5 class="fw-semibold px-3 py-2 m-0">Notifications</h5>
                                <a href="javascript:void(0)" class="dropdown-item">
                                    <div class="d-flex align-items-start py-2">
                                        <img src="assets/images/user.png" class="img-3x me-3 rounded-3" alt="Admin Themes" />
                                        <div class="m-0">
                                            <h6 class="mb-1 fw-semibold">Sophie Michiels</h6>
                                            <p class="mb-1">Membership has been ended.</p>
                                            <p class="small m-0 opacity-50">Oct 20, 07:30pm</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="dropdown-item">
                                    <div class="d-flex align-items-start py-2">
                                        <img src="assets/images/user2.png" class="img-3x me-3 rounded-3" alt="Admin Theme" />
                                        <div class="m-0">
                                            <h6 class="mb-1 fw-semibold">Sophie Michiels</h6>
                                            <p class="mb-1">Congratulate, James for new job.</p>
                                            <p class="small m-0 opacity-50">Oct 24, 08:00pm</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="dropdown-item">
                                    <div class="d-flex align-items-start py-2">
                                        <img src="assets/images/user1.png" class="img-3x me-3 rounded-3" alt="Admin Theme" />
                                        <div class="m-0">
                                            <h6 class="mb-1 fw-semibold">Sophie Michiels</h6>
                                            <p class="mb-1">Lewis added new schedule release.</p>
                                            <p class="small m-0 opacity-50">Oct 28, 09:30pm</p>
                                        </div>
                                    </div>
                                </a>
                                <div class="d-grid p-3 border-top">
                                    <a href="javascript:void(0)" class="btn btn-outline-primary">View all</a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown ms-2">
                            <a class="dropdown-toggle d-flex align-items-center user-settings" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<span>Neil Mark</span>
									<img src="assets/images/user3.png" class="img-3x m-2 me-0 rounded-3" alt="Bootstrap Gallery" />
								</a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-sm shadow-sm gap-3">
                                <a class="dropdown-item d-flex align-items-center py-2" href="profile"><i
											class="icon-gitlab fs-4 me-3"></i>User Profile</a>
                                <a class="dropdown-item d-flex align-items-center py-2" href="account-settings"><i
											class="icon-settings fs-4 me-3"></i>Account Settings</a>
                                <a class="dropdown-item d-flex align-items-center py-2" href="login"><i
											class="icon-log-out fs-4 me-3"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                    <!-- App header actions end -->
                </div>
                <!-- App header ends -->
                <!-- App body starts -->













    <!-- Required jQuery first, then Bootstrap Bundle JS -->

<h1>hi</h1>






























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
