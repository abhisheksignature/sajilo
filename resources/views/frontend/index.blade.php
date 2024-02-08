@extends('frontend.layouts.main')


@section ('main-container')
@include('frontend.layouts.header-banner')
    
    <!-- tour section start -->
    <section class="mix-2">
        <div class="tourSection ratio3_2">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="title-1">
                            <h2 class="pt-0">top offers</h2>
                        </div>
                        <div class="flight-5 no-arrow">
                            <div>
                                <div class="tourBox wow zoomIn">
                                    <div class="tourImg">
                                        <img src="{{ asset('frontend/images/offer/1.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt="">

                                    </div>
                                    <div class="tourContent">
                                        <h3>hotel booking</h3>
                                        <h6>Avail Hot Deals On Hotel Booking To Any Place</h6>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="tourBox wow zoomIn">
                                    <div class="tourImg">
                                        <img src="{{ asset('frontend/images/offer/2.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt="">

                                    </div>
                                    <div class="tourContent">
                                        <h3>flight offer</h3>
                                        <h6>Grab Amazing Deals on Flight Ticket Booking</h6>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="tourBox wow zoomIn">
                                    <div class="tourImg">
                                        <img src="{{ asset('frontend/images/offer/3.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt="">

                                    </div>
                                    <div class="tourContent">
                                        <h3>holiday booking</h3>
                                        <h6>weekend sale for holiday bookings</h6>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="tourBox wow zoomIn">
                                    <div class="tourImg">
                                        <img src="{{ asset('frontend/images/offer/4.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt="">

                                    </div>
                                    <div class="tourContent">
                                        <h3>food order</h3>
                                        <h6>upto 50% off on select restaurants.</h6>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="tourBox wow zoomIn">
                                    <div class="tourImg">
                                        <img src="{{ asset('frontend/images/offer/4.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt="">

                                    </div>
                                    <div class="tourContent">
                                        <h3>hire cab</h3>
                                        <h6>50% cashback on every cab bookings</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tour section end -->


    <!-- tour section start -->
    <section class="section-b-space mix-2">
        <div class="tourSection ratio_asos">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="title-1">
                            <h2 class="pt-0">most popular destination</h2>
                        </div>
                        <div class="slide-6 no-arrow">
                            <div>
                                <div class="tourBox wow zoomIn">
                                    <div class="tourImg">
                                        <img src="{{ asset('frontend/images/tour/vector/dubai.png') }}" class="img-fluid blur-up lazyload bg-img" alt="">

                                    </div>
                                    <div class="tourContent">
                                        <h3>Dubai</h3>
                                        <h6>starting from $5000</h6>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="tourBox wow zoomIn">
                                    <div class="tourImg">
                                        <img src="{{ asset('frontend/images/tour/vector/dubai.png') }}" class="img-fluid blur-up lazyload bg-img" alt="">

                                    </div>
                                    <div class="tourContent">
                                        <h3>Europe</h3>
                                        <h6>starting from $5000</h6>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="tourBox wow zoomIn">
                                    <div class="tourImg">
                                        <img src="{{ asset('frontend/images/tour/vector/dubai.png') }}" class="img-fluid blur-up lazyload bg-img" alt="">

                                    </div>
                                    <div class="tourContent">
                                        <h3>Maldives</h3>
                                        <h6>starting from $5000</h6>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="tourBox wow zoomIn">
                                    <div class="tourImg">
                                        <img src="{{ asset('frontend/images/tour/vector/dubai.png') }}" class="img-fluid blur-up lazyload bg-img" alt="">

                                    </div>
                                    <div class="tourContent">
                                        <h3>Nepal</h3>
                                        <h6>starting from $5000</h6>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="tourBox wow zoomIn">
                                    <div class="tourImg">
                                        <img src="{{ asset('frontend/images/tour/vector/dubai.png') }}" class="img-fluid blur-up lazyload bg-img" alt="">

                                    </div>
                                    <div class="tourContent">
                                        <h3>Singapore</h3>
                                        <h6>starting from $5000</h6>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="tourBox wow zoomIn">
                                    <div class="tourImg">
                                        <img src="{{ asset('frontend/images/tour/vector/dubai.png') }}" class="img-fluid blur-up lazyload bg-img" alt="">

                                    </div>
                                    <div class="tourContent">
                                        <h3>japan</h3>
                                        <h6>starting from $5000</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tour section end -->

    <!-- flight routes section start -->
    <!-- <section class="routes-section ratio_landscape section-b-space">
        <div class="container">
            <div class="title-2">
                <h2>top flight routes... <span>within usa</span></h2>
                <p>Lorem Ipsum is simply dummy text of the printing and Lorem Ipsum has been standard.......</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="routes-box">
                        <a href="#" class="routes-img bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/flights/destination/4.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="assets/images/flights/destination/4.jpg" alt="" class="img-fluid blur-up lazyload bg-img" style="display: none;">
                            <div class="price-round">
                                <div>
                                    <h6><del>$500</del></h6>
                                    <h3>$420</h3>
                                </div>
                            </div>
                            <div class="discount">
                                <h6>-30%</h6>
                            </div>
                        </a>
                        <div class="routes-content">
                            <div class="top-bar">
                                <a href="#">
                                    <h5>london to moscow</h5>
                                </a>
                                <h6>arrival : 20:30</h6>
                            </div>
                            <div class="bottom-bar">
                                <h6>departure : 14:20</h6>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="routes-box">
                        <a href="#" class="routes-img bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/flights/destination/5.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="assets/images/flights/destination/5.jpg" alt="" class="img-fluid blur-up lazyload bg-img" style="display: none;">
                            <div class="price-round">
                                <div>
                                    <h6><del>$500</del></h6>
                                    <h3>$420</h3>
                                </div>
                            </div>
                            <div class="discount">
                                <h6>limited time</h6>
                            </div>
                        </a>
                        <div class="routes-content">
                            <div class="top-bar">
                                <a href="#">
                                    <h5>milan to stockholm</h5>
                                </a>
                                <h6>arrival : 20:30</h6>
                            </div>
                            <div class="bottom-bar">
                                <h6>departure : 14:20</h6>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="routes-box">
                        <a href="#" class="routes-img bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/flights/destination/6.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="assets/images/flights/destination/6.jpg" alt="" class="img-fluid blur-up lazyload bg-img" style="display: none;">
                            <div class="price-round">
                                <div>
                                    <h6><del>$500</del></h6>
                                    <h3>$420</h3>
                                </div>
                            </div>
                            <div class="discount">
                                <h6>-30%</h6>
                            </div>
                        </a>
                        <div class="routes-content">
                            <div class="top-bar">
                                <a href="#">
                                    <h5>marid to prague</h5>
                                </a>
                                <h6>arrival : 20:30</h6>
                            </div>
                            <div class="bottom-bar">
                                <h6>departure : 14:20</h6>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="routes-box">
                        <a href="#" class="routes-img bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/flights/destination/7.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="assets/images/flights/destination/7.jpg" alt="" class="img-fluid blur-up lazyload bg-img" style="display: none;">
                            <div class="price-round">
                                <div>
                                    <h6><del>$500</del></h6>
                                    <h3>$420</h3>
                                </div>
                            </div>
                            <div class="discount">
                                <h6>sunday</h6>
                            </div>
                        </a>
                        <div class="routes-content">
                            <div class="top-bar">
                                <a href="#">
                                    <h5>humburg to paris</h5>
                                </a>
                                <h6>arrival : 20:30</h6>
                            </div>
                            <div class="bottom-bar">
                                <h6>departure : 14:20</h6>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- flight routes section end -->


    <!-- how to start section start -->
    <section class="small-section process-steps icon-large">
        <img src="{{ asset('frontend/images/hotel-new/home-banner-3.png') }}" class="bg-img img-fluid blur-up lazyload" alt="">

        <div class="container">
            <div class="title-1 detail-title">
                <h2 class="pt-0">super easy booking</h2>
                <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aperiam
                    at, aut commodi corporis dolorum ducimus labore magnam mollitia natus porro possimus quae sit
                    tenetur veniam veritatis voluptate voluptatem!</p>
            </div>
            <div class="step-bg">
                <div class="row">
                    <div class="col-md-3">
                        <div class="step-box">
                            <div>
                                <img src="{{ asset('frontend/images/tour/vector/13.png') }}" class="img-fluid blur-up lazyload filter-none" alt="">

                                <h4>explore</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="step-box">
                            <div>
                                <img src="{{ asset('frontend/images/tour/vector/14.png') }}" class="img-fluid blur-up lazyload filter-none" alt="">

                                <h4>Get Quotes</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="step-box">
                            <div>
                                <img src="{{ asset('frontend/images/tour/vector/15.png') }}" class="img-fluid blur-up lazyload filter-none" alt="">

                                <h4>customize</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="step-box">
                            <div>
                                <img src="{{ asset('frontend/images/tour/vector/16.png') }}" alt="">

                                    class="img-fluid blur-up lazyload filter-none" alt="">
                                <h4>book & enjoy</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bird-animation">
            <div class="bird-container bird-container--one">
                <div class="bird bird--one"></div>
            </div>
            <div class="bird-container bird-container--two">
                <div class="bird bird--two"></div>
            </div>
            <div class="bird-container bird-container--three">
                <div class="bird bird--three"></div>
            </div>
            <div class="bird-container bird-container--four">
                <div class="bird bird--four"></div>
            </div>
        </div>
    </section>
    <!-- how to start section end -->

    <!-- Service Section Start -->
    <section class="section-b-space">
        <div class="container">
            <div class="title-1 title-5">
                <span class="title-label">new</span>
                <h2>some good reason</h2>
                <p>Trips, experiences, and places. All in one service.</p>
            </div>
            <div class="row service-part">
                <div class="col-lg-4">
                    <div class="service-wrapper">
                        <div>
                            <h3>+120 Premium tours <i class="fas fa-heart"><span class="effect"></span></i></h3>
                            <h6>120 premium tour</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and setting industry. Lorem Ipsum has
                                been the industry's ard dummy text ever since the 1500s, when an unkn....</p>
                            <div class="service-btn">
                                <a href="#" class="btn btn-rounded btn-sm color1">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-wrapper">
                        <div>
                            <h3>+1000 Customers <i class="fas fa-heart"><span class="effect"></span></i></h3>
                            <h6>1000 customers</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and setting industry. Lorem Ipsum has
                                been the industry's ard dummy text ever since the 1500s, when an unkn....</p>
                            <div class="service-btn">
                                <a href="#" class="btn btn-rounded btn-sm color1">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-wrapper">
                        <div>
                            <h3>H24 Support <i class="fas fa-heart"><span class="effect"></span></i></h3>
                            <h6>h24 support</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and setting industry. Lorem Ipsum has
                                been the industry's ard dummy text ever since the 1500s, when an unkn....</p>
                            <div class="service-btn">
                                <a href="#" class="btn btn-rounded btn-sm color1">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Section End -->

    <!-- App Section Start -->
    <section class="app-section medium-section bg-size blur-up lazyloaded" style="background-image: url('{{ asset('frontend/images/tour/app-bg.jpg') }}'); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">

        <img src="{{ asset('frontend/images/tour/app-bg.jpg') }}" alt="" class="img-fluid blur-up lazyload bg-img" style="display: none;">

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="app-box rounded25">
                        <div>
                            <h5>special <span>nature</span> tour offer</h5>
                            <h2>Download our app</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum
                                has been the of industry standard dum my text ever since the 1500s,</p>
                            <div class="app-buttons">
                                <a href="#" class="btn btn-curve color1"><i class="fab fa-google-play"></i> play
                                    store</a>
                                <a href="#" class="btn btn-curve app-btn"><i class="fab fa-app-store"></i> app
                                    store</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- App Section End -->

    <!-- blog section start -->
    <section class="blog-section section-b-space">
        <div class="container">
            <div class="slide-2  no-arrow ">
                <div>
                    <div class="blog-box">
                        <div class="img-part">
                            <div>
                                <img src="{{ asset('frontend/images/tour/blog/1.jpg') }}" class="img-fluid blur-up lazyload w-100" alt="">

                            </div>
                            <div class="blog-date">
                                <div>
                                    <h5>01</h5>
                                    <h6>jan</h6>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div>
                                <h5>posted by: Julia Holmes</h5>
                                <p>Lorem Ipsum is simply the of the printing and dummy text of typesetting..</p>
                                <h6>Lorem Ipsum is simply dummy since..</h6>
                                <a href="#" class="btn btn-curve">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="blog-box">
                        <div class="img-part">
                            <div>
                                <img src="{{ asset('frontend/images/tour/blog/2.jpg') }}" class="img-fluid blur-up lazyload w-100" alt="">

                            </div>
                            <div class="blog-date">
                                <div>
                                    <h5>24</h5>
                                    <h6>feb</h6>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div>
                                <h5>posted by: Julia Holmes</h5>
                                <p>Lorem Ipsum is simply the of the printing and dummy text of typesetting..</p>
                                <h6>Lorem Ipsum is simply dummy since..</h6>
                                <a href="#" class="btn btn-curve">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="blog-box">
                        <div class="img-part">
                            <div>
                                <img src="{{ asset('frontend/images/tour/blog/3.jpg') }}" class="img-fluid blur-up lazyload w-100" alt="">

                            </div>
                            <div class="blog-date">
                                <div>
                                    <h5>27</h5>
                                    <h6>aug</h6>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div>
                                <h5>posted by: Julia Holmes</h5>
                                <p>Lorem Ipsum is simply the of the printing and dummy text of typesetting..</p>
                                <h6>Lorem Ipsum is simply dummy since..</h6>
                                <a href="#" class="btn btn-curve">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section end -->


    <!-- subscribe section start -->
    <section class="subscribe_section medium-section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="subscribe-detail">
                        <div>
                            <h2>subscribe our news <span>our news</span></h2>
                            <p>Subscribe and receive our newsletters to follow the news about our fresh and fantastic
                                products</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="input-section">
                        <input type="text" class="form-control" placeholder="Enter Your Email"
                            aria-label="Recipient's username">
                        <a href="#" class="btn btn-rounded btn-sm color1">subscribe</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--subscribe section end -->


@endsection
