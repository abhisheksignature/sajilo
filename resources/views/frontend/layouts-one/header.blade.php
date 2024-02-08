
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="rica">
    <meta name="keywords" content="rica">
    <meta name="author" content="rica">
    <link rel="icon" href="{{ config('myurl.url') }}frontend/images/favicon.png" type="image/x-icon" />


    <title>Rica</title>

    <!-- Header links -->
   @include('frontend/layouts-one/links/header_links')

</head>

<body>

    <!-- pre-loader start -->
    <div class="loader-wrapper img-gif">

        <!-- header.blade.php -->

@php
$url = config('myurl.url');
@endphp

<img src="{{ $url }}frontend/images/loader.gif" alt="">


    <img src="{{ config('myurl.url') }}frontend/images/loader.gif" alt="">

    </div>
    <!-- pre-loader end -->


    <!-- header start -->
<header class="light_header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="menu">
                        <div class="brand-logo">
                            <a href="{{ route('home') }}">

                                <!-- <img src="<?php echo $url;?>assets/images/icon/footer-logo.png" alt=""
                                    class="img-fluid blur-up lazyload"> -->

                                    <p>Logo here</p>
                            </a>
                        </div>
                        <nav>
                            <div class="main-navbar">
                                <div id="mainnav">
                                    <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                    <div class="menu-overlay"></div>
                                    <ul class="nav-menu">
                                        <li class="back-btn">
                                            <div class="mobile-back text-end">
                                                <span>Back</span>
                                                <i aria-hidden="true" class="fa fa-angle-right ps-2"></i>
                                            </div>
                                        </li>
                                        <li class="dropdown">
                                            <a href="{{ route('home') }}" class="nav-link menu-title">Home</a>
                                            <!-- <ul class="nav-submenu menu-content">
                                                <li><a href="#" class="menu-title">Hotel Demo</a>
                                                    <ul class="nav-sub-childmenu level1">
                                                        <li><a href="hotel-layout.html">classic</a></li>
                                                        <li><a href="hotel-layout-2.html">minimal</a></li>
                                                        <li><a href="hotel-layout-3.html">vector</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="menu-title">Tour Demo</a>
                                                    <ul class="nav-sub-childmenu level1">
                                                        <li><a href="tour-layout.html">modern</a></li>
                                                        <li><a href="tour-layout-2.html">trending</a></li>
                                                        <li><a href="tour-layout-3.html">Vector demo</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="menu-title">cab Demo</a>
                                                    <ul class="nav-sub-childmenu level1">
                                                        <li><a href="cab-layout.html">modern</a></li>
                                                        <li><a href="cab-layout-2.html">classic</a></li>
                                                        <li><a href="cab-layout-3.html">Map demo</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="menu-title">flight Demo</a>
                                                    <ul class="nav-sub-childmenu level1">
                                                        <li><a href="flight-layout.html">modern</a></li>
                                                        <li><a href="flight-layout-2.html">minimal</a></li>
                                                        <li><a href="flight-layout-3.html">left sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="menu-title">restaurant Demo</a>
                                                    <ul class="nav-sub-childmenu level1">
                                                        <li><a href="restaurant-layout.html">classic</a></li>
                                                        <li><a href="restaurant-layout-2.html">minimal</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="menu-title">mix Demo</a>
                                                    <ul class="nav-sub-childmenu level1">
                                                        <li><a href="mix-layout.html">classic</a></li>
                                                        <li><a href="mix-layout-2.html">minimal</a></li>
                                                    </ul>
                                                </li>
                                            </ul> -->
                                        </li>
                                        <li class="dropdown">
                                            <a href="{{ route('hotel') }}" class="nav-link menu-title">hotel</a>
                                            <!-- <ul class="nav-submenu menu-content">
                                                <li><a href="#" class="menu-title">Listing</a>
                                                    <ul class="nav-sub-childmenu level1">
                                                        <li><a href="javascript:void(0)" class="menu-title">grid
                                                                view</a>
                                                            <ul class="nav-sub-childmenu submenu-content level2">
                                                                <li><a href="hotel-2-grid.html">2 Grid</a></li>
                                                                <li><a href="hotel-3-grid.html">3 Grid</a></li>
                                                                <li><a href="hotel-4-grid.html">4 Grid</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="javascript:void(0)" class="menu-title">sidebar</a>
                                                            <ul class="nav-sub-childmenu submenu-content level2">
                                                                <li><a href="hotel-left-sidebar.html">Left Sidebar</a>
                                                                </li>
                                                                <li><a href="hotel-right-sidebar.html">Right Sidebar</a>
                                                                </li>
                                                                <li><a href="hotel-no-sidebar.html">No Sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="javascript:void(0)" class="menu-title">map</a>
                                                            <ul class="nav-sub-childmenu submenu-content level2">
                                                                <li><a href="hotel-map.html">google map</a></li>
                                                                <li><a href="hotel-map-leaflet.html">leaflet map</a>
                                                                </li>
                                                                <li><a href="hotel-map-here.html">here map</a></li>
                                                                <li><a href="hotel-map-bing.html">bing map</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="javascript:void(0)" class="menu-title">map
                                                                modal</a>
                                                            <ul class="nav-sub-childmenu submenu-content level2">
                                                                <li><a href="hotel-map-modal.html">google map</a></li>
                                                                <li><a href="hotel-map-leaflet-modal.html">leaflet
                                                                        map</a></li>
                                                                <li><a href="hotel-map-here-modal.html">here map</a>
                                                                </li>
                                                                <li><a href="hotel-map-bing-modal.html">bing map</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="javascript:void(0)" class="menu-title">onclick
                                                                map</a>
                                                            <ul class="nav-sub-childmenu submenu-content level2">
                                                                <li><a href="hotel-clickmap.html">google map</a></li>
                                                                <li><a href="hotel-leaflet-clickmap.html">leaflet
                                                                        map</a></li>
                                                                <li><a href="hotel-here-clickmap.html">here map</a></li>
                                                                <li><a href="hotel-bing-clickmap.html">bing map</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="javascript:void(0)" class="menu-title">left side
                                                                map</a>
                                                            <ul class="nav-sub-childmenu submenu-content level2">
                                                                <li><a href="hotel-leftmap.html">google map</a></li>
                                                                <li><a href="hotel-leaflet-leftmap.html">leaflet map</a>
                                                                </li>
                                                                <li><a href="hotel-here-leftmap.html">here map</a></li>
                                                                <li><a href="hotel-bing-leftmap.html">bing map</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="javascript:void(0)" class="menu-title">list
                                                                view</a>
                                                            <ul class="nav-sub-childmenu submenu-content level2">
                                                                <li><a href="hotel-list.html">List View</a></li>
                                                                <li><a href="javascript:void(0)"
                                                                        class="menu-title">Map</a>
                                                                    <ul
                                                                        class="nav-sub-childmenu submenu-content level3">
                                                                        <li><a href="hotel-list-map.html">google map</a>
                                                                        </li>
                                                                        <li><a href="hotel-leaflet-list-map.html">leaflet
                                                                                map</a></li>
                                                                        <li><a href="hotel-here-list-map.html">here
                                                                                map</a></li>
                                                                        <li><a href="hotel-bing-list-map.html">bing
                                                                                map</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a href="hotel-list-slider.html">Slider</a></li>
                                                                <li><a href="hotel-list-images.html">multiple Image</a>
                                                                </li>
                                                                <li><a href="hotel-list-video.html">Video</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="hotel-slider.html">Hotel with Slider</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="menu-title">single page</a>
                                                    <ul class="nav-sub-childmenu submenu-content level1">
                                                        <li><a href="hotel-single-1.html">classic</a></li>
                                                        <li><a href="hotel-single-9.html">360 view</a></li>
                                                        <li><a href="hotel-single-2.html">without top</a></li>
                                                        <li><a href="hotel-single-3.html">left sidebar</a></li>
                                                        <li><a href="hotel-single-4.html">info tab</a></li>
                                                        <li><a href="hotel-single-5.html">image slider</a></li>
                                                        <li><a href="hotel-single-6.html">thumbnail image</a></li>
                                                        <li><a href="hotel-single-7.html">image box</a></li>
                                                        <li><a href="hotel-single-8.html">theme breadcrumb</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="menu-title">booking</a>
                                                    <ul class="nav-sub-childmenu submenu-content level1">
                                                        <li><a href="hotel-booking.html">booking page</a></li>
                                                        <li><a href="hotel-checkout.html">checkout</a></li>
                                                        <li><a href="hotel-booking-failed.html">booking failed</a></li>
                                                        <li><a href="hotel-booking-success.html">booking success</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul> -->
                                        </li>
                                        <li class="dropdown">
                                            <a href="{{ route('tour') }}" class="nav-link menu-title">tour</a>
                                            <!-- <ul class="nav-submenu menu-content">
                                                <li><a href="#" class="menu-title">Listing</a>
                                                    <ul class="nav-sub-childmenu submenu-content level1">
                                                        <li><a href="javascript:void(0)" class="menu-title">grid
                                                                view</a>
                                                            <ul class="nav-sub-childmenu submenu-content level2">
                                                                <li><a href="tour-2-grid.html">2 Grid</a></li>
                                                                <li><a href="tour-3-grid.html">3 Grid</a></li>
                                                                <li><a href="tour-4-grid.html">4 Grid</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="javascript:void(0)" class="menu-title">sidebar</a>
                                                            <ul class="nav-sub-childmenu submenu-content level2">
                                                                <li><a href="tour-left-sidebar.html">left sidebar</a>
                                                                </li>
                                                                <li><a href="tour-right-sidebar.html">right sidebar</a>
                                                                </li>
                                                                <li><a href="tour-no-sidebar.html">no sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="javascript:void(0)" class="menu-title">list
                                                                view</a>
                                                            <ul class="nav-sub-childmenu submenu-content level2">
                                                                <li><a href="tour-list.html">list view</a></li>
                                                                <li><a href="tour-list-slider.html">slider</a></li>
                                                                <li><a href="tour-list-images.html">multiple images</a>
                                                                </li>
                                                                <li><a href="tour-list-video.html">video</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="tour-slider.html">with slider</a></li>
                                                        <li><a href="tour-minimal.html">minimal</a></li>
                                                        <li><a href="tour-classic.html">classic</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="menu-title">single page</a>
                                                    <ul class="nav-sub-childmenu submenu-content level1">
                                                        <li><a href="tour-single-1.html">tab</a></li>
                                                        <li><a href="tour-single-2.html">full page detail</a></li>
                                                        <li><a href="tour-single-3.html">slider</a></li>
                                                        <li><a href="tour-single-4.html">360 view</a></li>
                                                        <li><a href="tour-single-5.html">Full page slider</a></li>
                                                        <li><a href="tour-single-6.html">classic design</a></li>
                                                        <li><a href="tour-single-7.html">video </a></li>
                                                        <li><a href="tour-single-8.html">left-sidebar </a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="menu-title">booking</a>
                                                    <ul class="nav-sub-childmenu submenu-content level1">
                                                        <li><a href="tour-booking.html">booking page</a></li>
                                                        <li><a href="tour-checkout.html">checkout</a></li>
                                                        <li><a href="tour-booking-failed.html">booking failed</a></li>
                                                        <li><a href="tour-booking-success.html">booking success</a></li>
                                                    </ul>
                                                </li>
                                            </ul> -->
                                        </li>
                                        <li class="dropdown">
                                            <a href="{{ route('flight') }}" class="nav-link menu-title">flight</a>
                                            <!-- <ul class="nav-submenu menu-content">
                                                <li><a href="#" class="menu-title">Listing</a>
                                                    <ul class="nav-sub-childmenu submenu-content level1">
                                                        <li><a href="flight-left-sidebar.html">left sidebar</a></li>
                                                        <li><a href="flight-right-sidebar.html">right sidebar</a></li>
                                                        <li><a href="flight-top-filter.html">top filter</a></li>
                                                        <li><a href="flight-round-trip.html">round trip</a></li>
                                                        <li><a href="flight-not-found.html">not found</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#" class="menu-title">booking</a>
                                                    <ul class="nav-sub-childmenu submenu-content level1">
                                                        <li><a href="flight-booking.html">book now</a></li>
                                                        <li><a href="flight-booking-addons.html">booking add-ons</a>
                                                        </li>
                                                        <li><a href="flight-booking-payment.html">booking payment</a>
                                                        </li>
                                                        <li><a href="flight-booking-success.html">booking success</a>
                                                        </li>
                                                        <li><a href="flight-booking-failed.html">booking failed</a></li>
                                                    </ul>
                                                </li>
                                            </ul> -->
                                        </li>
                                        <li class="dropdown">
                                            <a href="{{ route('aboutus') }}" class="nav-link menu-title">About</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="{{ route('contact') }}" class="nav-link menu-title">contact</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <ul class="header-right">
                            <li class="front-setting rounded5">
                                <select>
                                    <option value="volvo">USD</option>
                                    <option value="saab">EUR</option>
                                    <option value="opel">INR</option>
                                    <option value="audi">AUD</option>
                                </select>
                            </li>
                            <li class="front-setting rounded5">
                                <select>
                                    <option value="volvo">ENG</option>
                                    <option value="saab">FRE</option>
                                    <option value="opel">SPA</option>
                                    <option value="audi">DUT</option>
                                </select>
                            </li>
                            <li class="user user-light rounded5">
                                <a href="{{ route('signup') }}">
                                    <i class="fas fa-user"></i>
                                </a>
                            </li>
                            <li class="setting">
                                <a href="#">
                                    <i class="fas fa-cog"></i>
                                </a>
                                <ul class="setting-open">
                                    <li class="front-setting">
                                        <select>
                                            <option value="volvo">USD</option>
                                            <option value="saab">EUR</option>
                                            <option value="opel">INR</option>
                                            <option value="audi">AUD</option>
                                        </select>
                                    </li>
                                    <li class="front-setting">
                                        <select>
                                            <option value="volvo">ENG</option>
                                            <option value="saab">FRE</option>
                                            <option value="opel">SPA</option>
                                            <option value="audi">DUT</option>
                                        </select>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--  header end -->