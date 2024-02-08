@extends('frontend.layouts-one.main')

@section ('main-container')
   <!-- pre-loader start -->
   <div class="skeleton_loader">
        <header class="light_header">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="menu">
                            <div class="brand-logo">
                                <a href="index.php">
                                    <img src="frontend/images/icon/footer-logo.png" alt=""
                                        class="img-fluid blur-up lazyload">
                                </a>
                            </div>
                            <nav>
                                <div class="main-navbar">
                                    <div>
                                        <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                        <div class="menu-overlay"></div>
                                        <ul class="nav-menu">
                                            <li class="dropdown">
                                                <a href="#" class="nav-link menu-title">Home</a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="nav-link menu-title">hotel</a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="nav-link menu-title">tour</a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="nav-link menu-title">flight</a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="nav-link menu-title">About</a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="nav-link menu-title">contact</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <ul class="header-right">
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
                                <li class="user user-light">
                                    <a href="#">
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
        <section class="breadcrumb-section flight-sec"></section>
        <div class="bg-inner small-section pb-0">
            <div class="container">
                <div class="flight-search">
                    <div class="responsive-detail">
                        <div class="destination">
                            <span></span>
                        </div>
                        <div class="details">
                            <span></span>
                        </div>
                        <div class="modify-search">
                            <div class="ldr-btn"></div>
                        </div>
                    </div>
                    <div class="flight-search-detail">
                        <form class="row m-0">
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label></label>
                                    <input type="text" class="form-control open-select">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label></label>
                                    <input type="text" class="form-control open-select">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label></label>
                                    <input type="text" class="form-control open-select">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label></label>
                                    <input type="text" class="form-control open-select">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label></label>
                                    <input type="text" class="form-control open-select">
                                </div>
                            </div>
                            <div class="col-lg-2 search-col">
                                <div class="form-group">
                                    <input type="text" class="form-control open-select">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <section class="pt-0 bg-inner small-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="left-sidebar">
                            <div class="search-bar">
                                <input>
                            </div>
                            <div class="middle-part collection-collapse-block open">
                                <a href="javascript:void(0)" class="section-title collapse-block-title">
                                    <h5></h5>
                                </a>
                                <div class="collection-collapse-block-content ">
                                    <div class="filter-block">
                                        <div class="collection-collapse-block open">
                                            <h6 class="collapse-block-title"></h6>
                                            <div class="collection-collapse-block-content">
                                                <div class="collection-brand-filter">
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-block">
                                        <div class="collection-collapse-block open">
                                            <h6 class="collapse-block-title"></h6>
                                            <div class="collection-collapse-block-content">
                                                <div class="collection-brand-filter">
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-block">
                                        <div class="collection-collapse-block open">
                                            <h6 class="collapse-block-title"></h6>
                                            <div class="collection-collapse-block-content">
                                                <div class="collection-brand-filter">
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-block">
                                        <div class="collection-collapse-block open">
                                            <h6 class="collapse-block-title"></h6>
                                            <div class="collection-collapse-block-content">
                                                <div class="collection-brand-filter">
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-block">
                                        <div class="collection-collapse-block open">
                                            <h6 class="collapse-block-title"></h6>
                                            <div class="collection-collapse-block-content">
                                                <div class="collection-brand-filter">
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                    <div
                                                        class="form-check collection-filter-checkbox">
                                                        <input class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 ratio3_2">
                        <a href="javascript:void(0)" class="mobile-filter border-top-0">
                            <h5></h5>
                            <img src="frontend/images/icon/adjust.png" class="img-fluid blur-up lazyload" alt="">
                        </a>
                        <div class="top-bar-flight">
                            <div class="date-fare-slider">
                                <div class="fare-6">
                                    <div>
                                        <a href="javascript:void(0)">
                                            <div class="fare-box">
                                                <h5 class="date"></h5>
                                                <h6 class="fare"></h6>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)">
                                            <div class="fare-box">
                                                <h5 class="date"></h5>
                                                <h6 class="fare"></h6>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)">
                                            <div class="fare-box active">
                                                <h5 class="date"></h5>
                                                <h6 class="fare"></h6>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)">
                                            <div class="fare-box">
                                                <h5 class="date"></h5>
                                                <h6 class="fare"></h6>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)">
                                            <div class="fare-box">
                                                <h5 class="date"></h5>
                                                <h6 class="fare"></h6>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)">
                                            <div class="fare-box">
                                                <h5 class="date"></h5>
                                                <h6 class="fare"></h6>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <div class="fare-box">
                                            <h5 class="date"></h5>
                                            <h6 class="fare"></h6>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)">
                                            <div class="fare-box">
                                                <h5 class="date"></h5>
                                                <h6 class="fare"></h6>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)">
                                            <div class="fare-box">
                                                <h5 class="date"></h5>
                                                <h6 class="fare"></h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="fare-calender">
                                <div>
                                    <i></i>
                                    <h6 class="title"></h6>
                                </div>
                                <div class="calender-external">
                                </div>
                            </div>
                        </div>
                        <div class="flight-detail-sec">
                            <div class="title-bar">
                                <div class="row">
                                    <div class="col-2">
                                        <p></p>
                                    </div>
                                    <div class="col-5">
                                        <p></p>
                                    </div>
                                    <div class="col-2">
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="detail-bar">
                                <div class="detail-wrap">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="logo-sec">
                                                <div class="ldr-img"></div>
                                                <span class="title"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="airport-part">
                                                <div class="airport-name">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                                <div class="airport-progress">
                                                    <div class="stop">
                                                    </div>
                                                </div>
                                                <div class="airport-name arrival">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="price">
                                                <div>
                                                    <h4></h4>
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="book-flight">
                                                <div class="ldr-btn"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail-wrap">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="logo-sec">
                                                <div class="ldr-img"></div>
                                                <span class="title"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="airport-part">
                                                <div class="airport-name">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                                <div class="airport-progress">
                                                    <div class="stop">
                                                    </div>
                                                </div>
                                                <div class="airport-name arrival">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="price">
                                                <div>
                                                    <h4></h4>
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="book-flight">
                                                <div class="ldr-btn"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail-wrap">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="logo-sec">
                                                <div class="ldr-img"></div>
                                                <span class="title"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="airport-part">
                                                <div class="airport-name">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                                <div class="airport-progress">
                                                    <div class="stop">
                                                    </div>
                                                </div>
                                                <div class="airport-name arrival">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="price">
                                                <div>
                                                    <h4></h4>
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="book-flight">
                                                <div class="ldr-btn"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail-wrap">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="logo-sec">
                                                <div class="ldr-img"></div>
                                                <span class="title"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="airport-part">
                                                <div class="airport-name">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                                <div class="airport-progress">
                                                    <div class="stop">
                                                    </div>
                                                </div>
                                                <div class="airport-name arrival">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="price">
                                                <div>
                                                    <h4></h4>
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="book-flight">
                                                <div class="ldr-btn"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail-wrap">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="logo-sec">
                                                <div class="ldr-img"></div>
                                                <span class="title"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="airport-part">
                                                <div class="airport-name">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                                <div class="airport-progress">
                                                    <div class="stop">
                                                    </div>
                                                </div>
                                                <div class="airport-name arrival">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="price">
                                                <div>
                                                    <h4></h4>
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="book-flight">
                                                <div class="ldr-btn"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail-wrap">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="logo-sec">
                                                <div class="ldr-img"></div>
                                                <span class="title"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="airport-part">
                                                <div class="airport-name">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                                <div class="airport-progress">
                                                    <div class="stop">
                                                    </div>
                                                </div>
                                                <div class="airport-name arrival">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="price">
                                                <div>
                                                    <h4></h4>
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="book-flight">
                                                <div class="ldr-btn"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail-wrap">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="logo-sec">
                                                <div class="ldr-img"></div>
                                                <span class="title"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="airport-part">
                                                <div class="airport-name">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                                <div class="airport-progress">
                                                    <div class="stop">
                                                    </div>
                                                </div>
                                                <div class="airport-name arrival">
                                                    <h4></h4>
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="price">
                                                <div>
                                                    <h4></h4>
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="book-flight">
                                                <div class="ldr-btn"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- pre-loader end -->


    <!-- breadcrumb start -->
    <section class="breadcrumb-section flight-sec pt-0">
        <img src="frontend/images/flights/flight-banner3.png" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="flight run"></div>
    </section>
    <!-- breadcrumb end -->


    <!-- search section start -->
    <div class="bg-inner small-section pb-0">
        <div class="container">
            <div class="flight-search">
                <div class="responsive-detail">
                    <div class="destination">
                        <span>dubai</span>
                        <span><i class="fas fa-long-arrow-alt-right"></i></span>
                        <span>paris</span>
                    </div>
                    <div class="details">
                        <span>tue, 19-Aug-2019</span>
                        <span class="divider">|</span>
                        <span>2 Adults</span>
                    </div>
                    <div class="modify-search">
                        <a href="javascript:void(0)" class="btn btn-solid color1"> modify search</a>
                    </div>
                </div>
                <div class="flight-search-detail">
                    <form class="row m-0">
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label>from</label>
                                <input type="text" class="form-control open-select" id="exampleInputEmail1"
                                    value="dubai(DXB)" placeholder="from">
                                <img src="frontend/images/icon/from.png" class="img-fluid blur-up lazyload" alt="">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label>to</label>
                                <input type="text" class="form-control open-select" value="paris(PAR)" placeholder="to">
                                <img src="frontend/images/icon/location.png" class="img-fluid blur-up lazyload" alt="">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label>departure date</label>
                                <input placeholder="Depart Date" value="10/01/2019" id="datepicker" />
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label>return date</label>
                                <input placeholder="Return Date" id="datepicker1" />
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label>traveller & class</label>
                                <input type="text" class="form-control  open-select" value="1 traveller"
                                    placeholder="to">
                                <img src="frontend/images/icon/user.png" class="img-fluid blur-up lazyload" alt="">
                                <div class="selector-box-flight">
                                    <div class="room-cls">
                                        <div class="qty-box">
                                            <label>adult</label>
                                            <div class="input-group">
                                                <button type="button" class="btn quantity-left-minus" data-type="minus"
                                                    data-field=""> - </button>
                                                <input type="text" name="quantity"
                                                    class="form-control qty-input input-number" value="1">
                                                <button type="button" class="btn quantity-right-plus" data-type="plus"
                                                    data-field="">+</button>
                                            </div>
                                        </div>
                                        <div class="qty-box">
                                            <label>children</label>
                                            <div class="input-group">
                                                <button type="button" class="btn quantity-left-minus" data-type="minus"
                                                    data-field=""> - </button>
                                                <input type="text" name="quantity"
                                                    class="form-control qty-input input-number" value="1">
                                                <button type="button" class="btn quantity-right-plus" data-type="plus"
                                                    data-field=""> + </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flight-class">
                                        <div class="form-check">
                                            <input class="form-check-input radio_animated" type="radio"
                                                name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                economy
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input radio_animated" type="radio"
                                                name="exampleRadios" id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                premium
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input radio_animated" type="radio"
                                                name="exampleRadios" id="exampleRadios3" value="option3">
                                            <label class="form-check-label" for="exampleRadios3">
                                                business
                                            </label>
                                        </div>
                                    </div>
                                    <div class="bottom-part">
                                        <a href="javascript:void(0)" class="btn">apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="search-btn">
                                <a href="#" class="btn btn-solid color1">search</a>
                            </div>
                        </div>
                        <div class="responsive-close">
                            <i class="far fa-times-circle"></i>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- search section end -->


    <!-- section start -->
    <section class="pt-0 bg-inner small-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="left-sidebar">
                        <div class="back-btn">
                            back
                        </div>
                        <div class="search-bar">
                            <input type="text" placeholder="Search here..">
                            <i class="fas fa-search"></i>
                        </div>
                        <div class="middle-part collection-collapse-block open">
                            <a href="javascript:void(0)" class="section-title collapse-block-title">
                                <h5>latest filter</h5>
                                <img src="frontend/images/icon/adjust.png" class="img-fluid blur-up lazyload" alt="">
                            </a>
                            <div class="collection-collapse-block-content ">
                                <div class="filter-block">
                                    <div class="collection-collapse-block open">
                                        <h6 class="collapse-block-title">stops</h6>
                                        <div class="collection-collapse-block-content">
                                            <div class="collection-brand-filter">
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="free-d">
                                                    <label class="form-check-label" for="free-d">non stop</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="time">
                                                    <label class="form-check-label" for="time">1 stop</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="zara">
                                                    <label class="form-check-label" for="zara">2 stop</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-block">
                                    <div class="collection-collapse-block open">
                                        <h6 class="collapse-block-title">price</h6>
                                        <div class="collection-collapse-block-content">
                                            <div class="wrapper">
                                                <div class="range-slider">
                                                    <input type="text" class="js-range-slider" value="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-block">
                                    <div class="collection-collapse-block open">
                                        <h6 class="collapse-block-title">airlines</h6>
                                        <div class="collection-collapse-block-content">
                                            <div class="collection-brand-filter">
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="wifi">
                                                    <label class="form-check-label" for="wifi">Qatar airways</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="spa">
                                                    <label class="form-check-label" for="spa">singapore
                                                        airlines</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="pet">
                                                    <label class="form-check-label" for="pet">Nippon Airways</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="parking">
                                                    <label class="form-check-label" for="parking">Cathay
                                                        Pacific</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="swimming">
                                                    <label class="form-check-label" for="swimming">Emirates</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="chinese">
                                                    <label class="form-check-label" for="chinese">Hainan
                                                        Airlines</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="restaurant">
                                                    <label class="form-check-label" for="restaurant">Qantas
                                                        Airways</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-block">
                                    <div class="collection-collapse-block open">
                                        <h6 class="collapse-block-title">departure time</h6>
                                        <div class="collection-collapse-block-content">
                                            <div class="collection-brand-filter">
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="suomi">
                                                    <label class="form-check-label" for="suomi"><img
                                                            src="frontend/images/icon/time/sunrise.png"
                                                            class="img-fluid blur-up lazyload me-1" alt=""> morning (6am
                                                        to 12pm)</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="english">
                                                    <label class="form-check-label" for="english"><img
                                                            src="frontend/images/icon/time/sun.png"
                                                            class="img-fluid blur-up lazyload me-1" alt=""> noon (12pm
                                                        to 6pm)</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="sign">
                                                    <label class="form-check-label" for="sign"><img
                                                            src="frontend/images/icon/time/night.png"
                                                            class="img-fluid blur-up lazyload me-1" alt=""> evening
                                                        (after 6pm)</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-block">
                                    <div class="collection-collapse-block open">
                                        <h6 class="collapse-block-title">arrival time</h6>
                                        <div class="collection-collapse-block-content">
                                            <div class="collection-brand-filter">
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="morning">
                                                    <label class="form-check-label" for="morning"><img
                                                            src="frontend/images/icon/time/sunrise.png"
                                                            class="img-fluid blur-up lazyload me-1" alt=""> morning (6am
                                                        to 12pm)</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="noon">
                                                    <label class="form-check-label" for="noon"><img
                                                            src="frontend/images/icon/time/sun.png"
                                                            class="img-fluid blur-up lazyload me-1" alt=""> noon (12pm
                                                        to 6pm)</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="evening">
                                                    <label class="form-check-label" for="evening"><img
                                                            src="frontend/images/icon/time/night.png"
                                                            class="img-fluid blur-up lazyload me-1" alt=""> evening
                                                        (after 6pm)</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-info">
                            <h5><span>i</span> need help</h5>
                            <h4>856 - 215 - 211</h4>
                            <h6>Monday to Friday 9.00am - 7.30pm</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 ratio3_2">
                    <a href="javascript:void(0)" class="mobile-filter border-top-0">
                        <h5>latest filter</h5>
                        <img src="frontend/images/icon/adjust.png" class="img-fluid blur-up lazyload" alt="">
                    </a>
                    <div class="top-bar-flight">
                        <div class="date-fare-slider">
                            <div class="fare-6">
                                <div>
                                    <a href="javascript:void(0)">
                                        <div class="fare-box">
                                            <h5 class="date">oct 14</h5>
                                            <h6 class="fare">$250</h6>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="javascript:void(0)">
                                        <div class="fare-box">
                                            <h5 class="date">oct 15</h5>
                                            <h6 class="fare">$250</h6>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="javascript:void(0)">
                                        <div class="fare-box active">
                                            <h5 class="date">oct 16</h5>
                                            <h6 class="fare">$250</h6>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="javascript:void(0)">
                                        <div class="fare-box">
                                            <h5 class="date">oct 17</h5>
                                            <h6 class="fare">$250</h6>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="javascript:void(0)">
                                        <div class="fare-box">
                                            <h5 class="date">oct 18</h5>
                                            <h6 class="fare">$250</h6>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="javascript:void(0)">
                                        <div class="fare-box">
                                            <h5 class="date">oct 19</h5>
                                            <h6 class="fare">$250</h6>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <div class="fare-box">
                                        <h5 class="date">oct 22</h5>
                                        <h6 class="fare">$250</h6>
                                    </div>
                                </div>
                                <div>
                                    <a href="javascript:void(0)">
                                        <div class="fare-box">
                                            <h5 class="date">oct 22</h5>
                                            <h6 class="fare">$250</h6>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="javascript:void(0)">
                                        <div class="fare-box">
                                            <h5 class="date">oct 22</h5>
                                            <h6 class="fare">$250</h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="fare-calender">
                            <div>
                                <i class="far fa-calendar-alt"></i>
                                <h6 class="title">fare calender</h6>
                            </div>
                            <div class="calender-external">
                                <div id='calendar'></div>
                            </div>
                        </div>
                    </div>
                    <div class="flight-detail-sec">
                        <div class="title-bar">
                            <div class="row">
                                <div class="col-2">
                                    <p>Airline</p>
                                </div>
                                <div class="col-5">
                                    <p>departure & arrival</p>
                                </div>
                                <div class="col-2">
                                    <p>price</p>
                                </div>
                            </div>
                        </div>
                        <div class="detail-bar">
                            <div class="detail-wrap wow fadeInUp">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="logo-sec">
                                            <img src="frontend/images/flights/airlines/1.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                            <span class="title">Egyptair</span>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="airport-part">
                                            <div class="airport-name">
                                                <h4>17.00</h4>
                                                <h6>DXB</h6>
                                            </div>
                                            <div class="airport-progress">
                                                <i class="fas fa-plane-departure float-start"></i>
                                                <i class="fas fa-plane-arrival float-end"></i>
                                                <div class="stop">
                                                    30h 20m (1 stop)
                                                </div>
                                            </div>
                                            <div class="airport-name arrival">
                                                <h4>22.20</h4>
                                                <h6>CDG</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="price">
                                            <div>
                                                <h4>$1200</h4>
                                                <span>non refundable</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="book-flight">
                                            <a href="flight-booking.php" class="btn btn-solid color1 ">book now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="detail-wrap wow fadeInUp">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="logo-sec">
                                            <img src="frontend/images/flights/airlines/2.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                            <span class="title">emirates</span>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="airport-part">
                                            <div class="airport-name">
                                                <h4>17.00</h4>
                                                <h6>DXB</h6>
                                            </div>
                                            <div class="airport-progress">
                                                <i class="fas fa-plane-departure float-start"></i>
                                                <i class="fas fa-plane-arrival float-end"></i>
                                                <div class="stop">
                                                    30h 20m (1 stop)
                                                </div>
                                            </div>
                                            <div class="airport-name arrival">
                                                <h4>22.20</h4>
                                                <h6>CDG</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="price">
                                            <div>
                                                <h4>$1200</h4>
                                                <span>non refundable</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="book-flight">
                                            <a href="flight-booking.php" class="btn btn-solid color1 ">book now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="detail-wrap wow fadeInUp">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="logo-sec">
                                            <img src="frontend/images/flights/airlines/3.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                            <span class="title">oman air</span>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="airport-part">
                                            <div class="airport-name">
                                                <h4>17.00</h4>
                                                <h6>DXB</h6>
                                            </div>
                                            <div class="airport-progress">
                                                <i class="fas fa-plane-departure float-start"></i>
                                                <i class="fas fa-plane-arrival float-end"></i>
                                                <div class="stop">
                                                    30h 20m (1 stop)
                                                </div>
                                            </div>
                                            <div class="airport-name arrival">
                                                <h4>22.20</h4>
                                                <h6>CDG</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="price">
                                            <div>
                                                <h4>$1200</h4>
                                                <span>non refundable</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="book-flight">
                                            <a href="flight-booking.php" class="btn btn-solid color1 ">book now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="detail-wrap wow fadeInUp">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="logo-sec">
                                            <img src="frontend/images/flights/airlines/4.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                            <span class="title">Middle East</span>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="airport-part">
                                            <div class="airport-name">
                                                <h4>17.00</h4>
                                                <h6>DXB</h6>
                                            </div>
                                            <div class="airport-progress">
                                                <i class="fas fa-plane-departure float-start"></i>
                                                <i class="fas fa-plane-arrival float-end"></i>
                                                <div class="stop">
                                                    30h 20m (1 stop)
                                                </div>
                                            </div>
                                            <div class="airport-name arrival">
                                                <h4>22.20</h4>
                                                <h6>CDG</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="price">
                                            <div>
                                                <h4>$1200</h4>
                                                <span>non refundable</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="book-flight">
                                            <a href="flight-booking.php" class="btn btn-solid color1 ">book now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="detail-wrap wow fadeInUp">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="logo-sec">
                                            <img src="frontend/images/flights/airlines/5.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                            <span class="title">gulf air</span>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="airport-part">
                                            <div class="airport-name">
                                                <h4>17.00</h4>
                                                <h6>DXB</h6>
                                            </div>
                                            <div class="airport-progress">
                                                <i class="fas fa-plane-departure float-start"></i>
                                                <i class="fas fa-plane-arrival float-end"></i>
                                                <div class="stop">
                                                    30h 20m (1 stop)
                                                </div>
                                            </div>
                                            <div class="airport-name arrival">
                                                <h4>22.20</h4>
                                                <h6>CDG</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="price">
                                            <div>
                                                <h4>$1200</h4>
                                                <span>non refundable</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="book-flight">
                                            <a href="flight-booking.php" class="btn btn-solid color1 ">book now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="detail-wrap wow fadeInUp">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="logo-sec">
                                            <img src="frontend/images/flights/airlines/6.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                            <span class="title">Royal Jordanian</span>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="airport-part">
                                            <div class="airport-name">
                                                <h4>17.00</h4>
                                                <h6>DXB</h6>
                                            </div>
                                            <div class="airport-progress">
                                                <i class="fas fa-plane-departure float-start"></i>
                                                <i class="fas fa-plane-arrival float-end"></i>
                                                <div class="stop">
                                                    30h 20m (1 stop)
                                                </div>
                                            </div>
                                            <div class="airport-name arrival">
                                                <h4>22.20</h4>
                                                <h6>CDG</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="price">
                                            <div>
                                                <h4>$1200</h4>
                                                <span>non refundable</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="book-flight">
                                            <a href="flight-booking.php" class="btn btn-solid color1 ">book now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="detail-wrap wow fadeInUp">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="logo-sec">
                                            <img src="frontend/images/flights/airlines/7.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                            <span class="title">China Eastern</span>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="airport-part">
                                            <div class="airport-name">
                                                <h4>17.00</h4>
                                                <h6>DXB</h6>
                                            </div>
                                            <div class="airport-progress">
                                                <i class="fas fa-plane-departure float-start"></i>
                                                <i class="fas fa-plane-arrival float-end"></i>
                                                <div class="stop">
                                                    30h 20m (1 stop)
                                                </div>
                                            </div>
                                            <div class="airport-name arrival">
                                                <h4>22.20</h4>
                                                <h6>CDG</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="price">
                                            <div>
                                                <h4>$1200</h4>
                                                <span>non refundable</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="book-flight">
                                            <a href="flight-booking.php" class="btn btn-solid color1 ">book now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav aria-label="Page navigation example" class="pagination-section mt-0">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- section End -->


   <!-- Footer Section -->
@endsection