<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Rica admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Rica admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="admin-assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="admin-assets/images/favicon.png" type="image/x-icon">
    <title>Rica -Dashboard</title>
    <!-- Google font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- FontAsowme css start  -->
    <link rel="stylesheet" type="text/css" href="admin-assets/css/font-awesome.css">

    <!-- added -->
    <!--Drop zon-->
    <link rel="stylesheet" type="text/css" href="admin-assets/css/vendors/dropzone.css">

    <!-- added -->
    <!-- Bootstrap-tag input css-->
    <link rel="stylesheet" type="text/css" href="admin-assets/css/vendors/bootstrap-tagsinput.css">

    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="admin-assets/css/vendors/themify.css">
    <!-- ratio start -->
    <link rel="stylesheet" type="text/css" href="admin-assets/css/ratio.css">

    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="admin-assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="admin-assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="admin-assets/css/vendors/animate.css">
    <!-- Plugins css Ends-->
    <!-- datepicker -->
    <link rel="stylesheet" type="text/css" href="admin-assets/css/vendors/date-picker.css">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="admin-assets/css/vendors/bootstrap.css">
    <!-- vector map css start -->
    <link rel="stylesheet" type="text/css" href="admin-assets/css/vector-map.css">
    <!-- vector map css start -->
    <!-- slick slider-->
    <link rel="stylesheet" type="text/css" href="admin-assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="admin-assets/css/slick-theme.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="admin-assets/css/style.css">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="admin-assets/css/responsive.css">
</head>

<body>


    <!-- pre-loader start -->
    <div class="loader-wrapper">
        <img src="admin-assets/images/loader/loader.gif" alt="loader gif">
    </div>
    <!-- pre-loader End -->

    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper modern-type" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper row m-0">

                <div class="header-logo-wrapper col-auto p-0">
                    <div class="logo-wrapper">
                        <a href="index.php">
                            <!-- <img class="img-fluid main-logo"
                                src="admin-assets/images/logo/logo.png" alt="logo">
                            <img class="img-fluid white-logo" src="admin-assets/images/logo/logo-white.png" alt="logo"> -->
                        <p>Logo Here</p>
                        </a>
                    </div>
                    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle"
                            data-feather="align-center"></i>
                    </div>
                </div>

                <form class="form-inline search-full col " action="#" method="get">
                    <div class="form-group w-100">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative">
                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                    placeholder="Search Rica .." name="q" title="" autofocus>
                                <i class="close-search" data-feather="x"></i>
                                <div class="spinner-border Typeahead-spinner" role="status"><span
                                        class="sr-only">Loading...</span>
                                </div>
                            </div>
                            <div class="Typeahead-menu"></div>
                        </div>
                    </div>
                </form>
                <div class="nav-right col-4 pull-right right-header p-0">
                    <ul class="nav-menus">

                        <li> <span class="header-search"><i data-feather="search"></i></span></li>
                        <li class="onhover-dropdown">
                            <div class="notification-box"><i class="fa fa-bell-o"> </i><span
                                    class="badge rounded-pill badge-theme">4 </span></div>
                            <ul class="notification-dropdown onhover-show-div">
                                <li><i data-feather="bell"></i>
                                    <h6 class="f-18 mb-0">Notitications</h6>
                                </li>
                                <li>
                                    <p><i class="fa fa-circle-o me-3 font-primary"> </i>Delivery processing <span
                                            class="pull-right">10
                                            min.</span></p>
                                </li>
                                <li>
                                    <p><i class="fa fa-circle-o me-3 font-success"></i>Order Complete<span
                                            class="pull-right">1 hr</span>
                                    </p>
                                </li>
                                <li>
                                    <p><i class="fa fa-circle-o me-3 font-info"></i>Tickets Generated<span
                                            class="pull-right">3 hr</span>
                                    </p>
                                </li>
                                <li>
                                    <p><i class="fa fa-circle-o me-3 font-danger"></i>Delivery Complete<span
                                            class="pull-right">6
                                            hr</span></p>
                                </li>
                                <li><a class="btn btn-primary" href="#">Check all notification</a></li>
                            </ul>
                        </li>

                        <li>
                            <div class="mode"><i class="fa fa-moon-o" aria-hidden="true"></i>
                            </div>
                        </li>

                        <li class="onhover-dropdown"><i data-feather="message-square"></i>
                            <ul class="chat-dropdown onhover-show-div">
                                <li><i data-feather="message-square"></i>
                                    <h6 class="f-18 mb-0">Message Box </h6>
                                </li>
                                <li>
                                    <div class="media"><img class="img-fluid rounded-circle me-3"
                                            src="admin-assets/images/user/1.jpg" alt="user1">
                                        <div class="status-circle online"></div>
                                        <div class="media-body"><span>Erica Hughes</span>
                                            <p>Lorem Ipsum is simply dummy...</p>
                                        </div>
                                        <p class="f-12 font-success">58 mins ago</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"><img class="img-fluid rounded-circle me-3"
                                            src="admin-assets/images/user/2.jpg" alt="user2">
                                        <div class="status-circle online"></div>
                                        <div class="media-body"><span>Kori Thomas</span>
                                            <p>Lorem Ipsum is simply dummy...</p>
                                        </div>
                                        <p class="f-12 font-success">1 hr ago</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"><img class="img-fluid rounded-circle me-3"
                                            src="admin-assets/images/user/4.jpg" alt="user3">
                                        <div class="status-circle offline"></div>
                                        <div class="media-body"><span>Ain Chavez</span>
                                            <p>Lorem Ipsum is simply dummy...</p>
                                        </div>
                                        <p class="f-12 font-danger">32 mins ago</p>
                                    </div>
                                </li>
                                <li class="text-center"> <a class="btn btn-primary" href="#">View All </a></li>
                            </ul>
                        </li>
                        <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                                    data-feather="maximize"></i></a></li>
                        <li class="profile-nav onhover-dropdown pe-0 me-0">
                            <div class="media profile-media">
                                <img class="user-profile rounded-circle" src="admin-assets/images/users/4.jpg"
                                    alt="profile-picture">
                                    <div class="user-name-hide media-body">
                                        <span>{{ auth()->user()->first_name }}</span>
                                        <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                                    </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                
                                <<li>
                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST">
                                        @csrf
                                        <a href="javascript:void(0)" onclick="document.getElementById('logout-form').submit()">
                                            <i data-feather="log-out"></i>
                                            <span>Log out</span>
                                            <li><a href="#"><i data-feather="user"></i><span>Account </span></a></li>
                                            <li><a href="#"><i data-feather="mail"></i><span>Inbox</span></a></li>
                                            <li><a href="#"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                                            <li><a href="setting"><i data-feather="settings"></i><span>Settings</span></a></li>
                                        </a>
                                    </form>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </div>
                <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName"></div>
            </div>
            </div>
        </script>
                <script class="empty-template"
                    type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
            </div>
        </div>
        <!-- Page Header Ends -->