@extends('admin.layouts.main')

@section('main-container')
    <!-- Page Body Start-->
    <div class="page-body-wrapper">


        <!-- Page Sidebar Start-->
        @include('admin.layouts.sidebar')
        <!-- Page Sidebar Ends-->


        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header  card-header--2 package-card">

                                <div>
                                    <h5>Hotel's Details</h5>
                                </div>
                                <form class="d-inline-flex">
                                    <button class="btn align-items-center btn-theme me-3"> <i
                                            class="fa fa-pencil-square-o me-2"></i>Edit
                                    </button>
                                    <button class="btn align-items-center d-flex btn-outline"> <i
                                            class="fa fa-trash-o me-2"></i>Delete
                                    </button>
                                </form>
                            </div>

                            <div class="card-body">
                                <!-- section start -->
                                <section class="single-section small-section bg-inner">

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="hotel_title_section">
                                                <div class="hotel-name">
                                                    <div class="left-part">
                                                        <div class="top">
                                                            <h2>sea view hotel</h2>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>

                                                        </div>
                                                        <p>Mina Road, Bur Dubai, Dubai, United Arab Emirates</p>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="image_section ">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="responsive arrow-dark zoom-gallery ratio2_3">
                                                            <div>
                                                                <a href="../admin-assets/images/hotel/room/11.jpg">
                                                                    <img src="../admin-assets/images/hotel/room/11.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img w-100"
                                                                        alt="">
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="../admin-assets/images/hotel/room/10.jpg">
                                                                    <img src="../admin-assets/images/hotel/room/10.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img w-100"
                                                                        alt="">

                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="../admin-assets/images/hotel/room/11.jpg">
                                                                    <img src="../admin-assets/images/hotel/room/11.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img w-100"
                                                                        alt="">

                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="../admin-assets/images/hotel/room/9.jpg">
                                                                    <img src="../admin-assets/images/hotel/room/9.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img w-100"
                                                                        alt="">

                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="../admin-assets/images/hotel/room/11.jpg">
                                                                    <img src="../admin-assets/images/hotel/room/11.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img w-100"
                                                                        alt="">

                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="../admin-assets/images/hotel/room/12.jpg">
                                                                    <img src="../admin-assets/images/hotel/room/12.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img w-100"
                                                                        alt="">

                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="../admin-assets/images/hotel/room/12.jpg">
                                                                    <img src="../admin-assets/images/hotel/room/12.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img w-100"
                                                                        alt="">

                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="../admin-assets/images/hotel/room/9.jpg">
                                                                    <img src="../admin-assets/images/hotel/room/9.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img w-100"
                                                                        alt="">

                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="../admin-assets/images/hotel/room/12.jpg">
                                                                    <img src="../admin-assets/images/hotel/room/12.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img w-100"
                                                                        alt="">

                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="description-section tab-section">
                                                <div class="menu-top">
                                                    <ul class="nav nav-tabs" id="top-tab" role="tablist">
                                                        <li class="nav-item"><a data-bs-toggle="tab" class="nav-link active"
                                                                href="#rooms">rooms</a>
                                                        </li>
                                                        <li class="nav-item"><a data-bs-toggle="tab" class="nav-link"
                                                                href="#about">about</a></li>
                                                        <li class="nav-item"><a data-bs-toggle="tab" class="nav-link"
                                                                href="#facility">facility</a>
                                                        </li>
                                                        <li class="nav-item"><a data-bs-toggle="tab" class="nav-link"
                                                                href="#location">location</a>
                                                        </li>
                                                        <li class="nav-item"><a data-bs-toggle="tab" class="nav-link"
                                                                href="#review">reviews</a>
                                                        </li>
                                                        <li class="nav-item"><a data-bs-toggle="tab" class="nav-link"
                                                                href="#policy">policies</a>
                                                        </li>
                                                    </ul>
                                                    <div class="description-details tab-content" id="top-tabContent">
                                                        <div class="menu-part tab-pane fade show active" id="rooms">
                                                            <table class="rooms-box border-0">
                                                                <tr>
                                                                    <td>

                                                                        <a href="#">
                                                                            <img src="../admin-assets/images/hotel/room/4.jpg"
                                                                                class="img-fluid blur-up lazyload"
                                                                                alt="">
                                                                        </a>
                                                                    </td>
                                                                    <td>
                                                                        <h6 class="room-title">Deluxe Room</h6>
                                                                        <div class="room-detail">
                                                                            <div
                                                                                class="row g-2
                                                                                ">
                                                                                <div class="col-sm-6 col-md-4 p-0">
                                                                                    <h6>Amenities</h6>
                                                                                    <div class="facility-detail">
                                                                                        <ul>
                                                                                            <li><img src="../admin-assets/images/icon/tour/bed.png"
                                                                                                    class="img-fluid blur-up lazyload"
                                                                                                    alt="">
                                                                                                king/twin
                                                                                            </li>
                                                                                            <li><img src="../admin-assets/images/icon/hotel/shower.png"
                                                                                                    class="img-fluid blur-up lazyload"
                                                                                                    alt="">
                                                                                                Shower
                                                                                            </li>
                                                                                            <li><img src="../admin-assets/images/icon/hotel/television.png"
                                                                                                    class="img-fluid blur-up lazyload"
                                                                                                    alt="">
                                                                                                LCD TV</li>
                                                                                            <li><img src="../admin-assets/images/icon/hotel/couch.png"
                                                                                                    class="img-fluid blur-up lazyload"
                                                                                                    alt="">
                                                                                                couch
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6 col-md-4 p-0">
                                                                                    <h6>Guest Service</h6>
                                                                                    <div class="facility-detail">
                                                                                        <ul>
                                                                                            <li><i class="fa fa-check"></i>
                                                                                                24-Hour room service
                                                                                            </li>
                                                                                            <li><i class="fa fa-check"></i>
                                                                                                Tour & excursions
                                                                                            </li>
                                                                                            <li><i
                                                                                                    class="fa fa-check"></i>Meeting
                                                                                                Facilities</li>
                                                                                            <li><i
                                                                                                    class="fa fa-check"></i>Babysitting
                                                                                                on reques</li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6 col-md-4 p-0">
                                                                                    <h6>inclusion</h6>
                                                                                    <div class="facility-detail">
                                                                                        <ul>
                                                                                            <li><i class="fa fa-check"></i>
                                                                                                Wi-Fi</li>
                                                                                            <li><i class="fa fa-check"></i>
                                                                                                Breakfast</li>
                                                                                            <li><i
                                                                                                    class="fa fa-check"></i>non
                                                                                                refundable</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>

                                                                        <a href="#">
                                                                            <img src="../admin-assets/images/hotel/room/5.jpg"
                                                                                class="img-fluid blur-up lazyload"
                                                                                alt="">
                                                                        </a>
                                                                    </td>
                                                                    <td>
                                                                        <h6 class="room-title">Suite Room</h6>
                                                                        <div class="room-detail">
                                                                            <div class="row g-2">
                                                                                <div class="col-sm-6 col-md-4 p-0">
                                                                                    <h6>Amenities</h6>
                                                                                    <div class="facility-detail">
                                                                                        <ul>
                                                                                            <li><img src="../admin-assets/images/icon/tour/bed.png"
                                                                                                    class="img-fluid blur-up lazyload"
                                                                                                    alt="">
                                                                                                king/twin
                                                                                            </li>
                                                                                            <li><img src="../admin-assets/images/icon/hotel/pool.png"
                                                                                                    class="img-fluid blur-up lazyload"
                                                                                                    alt="">
                                                                                                Pool View</li>
                                                                                            <li><img src="../admin-assets/images/icon/hotel/shower.png"
                                                                                                    class="img-fluid blur-up lazyload"
                                                                                                    alt="">
                                                                                                Shower
                                                                                            </li>
                                                                                            <li><img src="../admin-assets/images/icon/hotel/television.png"
                                                                                                    class="img-fluid blur-up lazyload"
                                                                                                    alt="">
                                                                                                LCD TV</li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6 col-md-4 p-0">
                                                                                    <h6>Guest Service</h6>
                                                                                    <div class="facility-detail">
                                                                                        <ul>
                                                                                            <li><i class="fa fa-check"></i>
                                                                                                24-Hour room service
                                                                                            </li>
                                                                                            <li><i class="fa fa-check"></i>
                                                                                                Tour & excursions
                                                                                            </li>
                                                                                            <li><i
                                                                                                    class="fa fa-check"></i>Meeting
                                                                                                Facilities</li>
                                                                                            <li><i
                                                                                                    class="fa fa-check"></i>Babysitting
                                                                                                on reques</li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6 col-md-4 p-0">
                                                                                    <h6>inclusion</h6>
                                                                                    <div class="facility-detail">
                                                                                        <ul>
                                                                                            <li><i class="fa fa-check"></i>
                                                                                                Wi-Fi</li>
                                                                                            <li><i class="fa fa-check"></i>
                                                                                                Breakfast</li>
                                                                                            <li><i class="fa fa-check"></i>
                                                                                                free
                                                                                                cancellation
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>

                                                                        <a href="#">
                                                                            <img src="../admin-assets/images/hotel/room/6.jpg"
                                                                                class="img-fluid blur-up lazyload"
                                                                                alt="">
                                                                        </a>
                                                                    </td>
                                                                    <td>
                                                                        <h6 class="room-title">Royal Room</h6>
                                                                        <div class="room-detail">
                                                                            <div class="row g-2">
                                                                                <div class="col-sm-6 col-md-4 p-0">
                                                                                    <h6>Amenities</h6>
                                                                                    <div class="facility-detail">
                                                                                        <ul>
                                                                                            <li><img src="../admin-assets/images/icon/tour/bed.png"
                                                                                                    class="img-fluid blur-up lazyload"
                                                                                                    alt="">
                                                                                                king/twin
                                                                                            </li>
                                                                                            <li><img src="../admin-assets/images/icon/hotel/pool.png"
                                                                                                    class="img-fluid blur-up lazyload"
                                                                                                    alt="">
                                                                                                Pool View</li>
                                                                                            <li><img src="../admin-assets/images/icon/hotel/shower.png"
                                                                                                    class="img-fluid blur-up lazyload"
                                                                                                    alt="">
                                                                                                Shower
                                                                                            </li>
                                                                                            <li><img src="../admin-assets/images/icon/hotel/television.png"
                                                                                                    class="img-fluid blur-up lazyload"
                                                                                                    alt="">
                                                                                                LCD TV</li>
                                                                                            <li><img src="../admin-assets/images/icon/hotel/couch.png"
                                                                                                    class="img-fluid blur-up lazyload"
                                                                                                    alt="">
                                                                                                couch
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6 col-md-4 p-0">
                                                                                    <h6>Guest Service</h6>
                                                                                    <div class="facility-detail">
                                                                                        <ul>
                                                                                            <li><i class="fa fa-check"></i>
                                                                                                24-Hour room service
                                                                                            </li>
                                                                                            <li><i class="fa fa-check"></i>
                                                                                                Tour & excursions
                                                                                            </li>
                                                                                            <li><i
                                                                                                    class="fa fa-check"></i>Meeting
                                                                                                Facilities</li>
                                                                                            <li><i
                                                                                                    class="fa fa-check"></i>Babysitting
                                                                                                on reques</li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6 col-md-4 p-0">
                                                                                    <h6>inclusion</h6>
                                                                                    <div class="facility-detail">
                                                                                        <ul>
                                                                                            <li><i class="fa fa-check"></i>
                                                                                                Wi-Fi</li>
                                                                                            <li><i class="fa fa-check"></i>
                                                                                                Breakfast</li>
                                                                                            <li><i class="fa fa-check"></i>
                                                                                                Dinner & lunch
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <div class="about menu-part tab-pane fade" id="about">
                                                            <h6>Enjoy a luxurious experience!</h6>
                                                            <p>A luxurious hotel in Duba, Sea view is just 500
                                                                meters away from the main center.
                                                                Featuring palatial space, modern architecture
                                                                and stylish interiors, this hotel
                                                                is an ideal choice for a peaceful relaxation or
                                                                a business
                                                                trip.</p>
                                                            <h6>Hotel Facilities</h6>
                                                            <p>The classy hotel has a swimming pool, spa and a
                                                                fitness centre. It also features
                                                                a well-appointed conference hall and a spacious
                                                                harbour banquet conference
                                                                centre for events and for meeting business
                                                                needs. Complimentary
                                                                Wi-Fi is provided on-premises. Other services
                                                                offered are travel desk, car
                                                                parking and credit card acceptance.</p>
                                                            <h6>Dining</h6>
                                                            <p>The luxurious hotel in dubai features an in-house
                                                                restaurant and a bar. Flame N
                                                                Grill restaurant operates from 7.30 AM till
                                                                midnight. It offers multi-cuisine
                                                                menu including Continental, Chinese, Indian and
                                                                Goan dishes.
                                                                Pool Deck BAR is a paradise providing a range of
                                                                beverages. Featuring a water
                                                                fountain, it also offers a pleasant ambience to
                                                                enjoy your drinks.</p>
                                                            <h6>Room Facilities</h6>
                                                            <p class="mb-0">This hotel has 150 air-conditioned
                                                                rooms including 50 Superior
                                                                Rooms, 30 Deluxe Rooms, 10 Super Deluxe Rooms, 2
                                                                Classic Rooms and 5 Duplex
                                                                Rooms. Most of the rooms have balconies offering
                                                                spectacular views of the
                                                                environs
                                                                and a few offering phenomenal views of the pool.
                                                                With contemporary furniture and
                                                                elegant decor, all the rooms ensure utmost
                                                                comfort for the guests. Some in-room
                                                                amenities include LCD TV with satellite
                                                                connection,
                                                                minibar and an electronic safe deposit box.</p>
                                                        </div>
                                                        <div class="menu-part tab-pane fade facility" id="facility">
                                                            <div class="row  g-4">
                                                                <div class="col-xl-3 col-sm-6">
                                                                    <h6><img src="../admin-assets/images/icon/hotel/verified.png"
                                                                            class="img-fluid blur-up lazyload"
                                                                            alt=""> basic facility</h6>
                                                                    <ul>
                                                                        <li><i class="fa fa-check"></i> Free
                                                                            Wi-Fi</li>
                                                                        <li><i class="fa fa-check"></i> Room
                                                                            Service</li>
                                                                        <li><i class="fa fa-check"></i>
                                                                            Elevator Lift</li>
                                                                        <li><i class="fa fa-check"></i> Laundry
                                                                            Service</li>
                                                                        <li><i class="fa fa-check"></i> Power
                                                                            Backup</li>
                                                                        <li><i class="fa fa-check"></i> Free
                                                                            Parking</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xl-3 col-sm-6">
                                                                    <h6><img src="../admin-assets/images/icon/hotel/credit-card.png"
                                                                            class="img-fluid blur-up lazyload"
                                                                            alt=""> payment mode</h6>
                                                                    <ul>
                                                                        <li><i class="fa fa-check"></i> visa
                                                                            card</li>
                                                                        <li><i class="fa fa-check"></i> master
                                                                            card</li>
                                                                        <li><i class="fa fa-check"></i>
                                                                            American express</li>
                                                                        <li><i class="fa fa-check"></i> debit
                                                                            card</li>
                                                                        <li><i class="fa fa-check"></i> cash
                                                                        </li>
                                                                        <li><i class="fa fa-check"></i> online
                                                                            banking</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xl-3 col-sm-6">
                                                                    <h6><img src="../admin-assets/images/icon/hotel/cctv.png"
                                                                            class="img-fluid blur-up lazyload"
                                                                            alt=""> security</h6>
                                                                    <ul>
                                                                        <li><i class="fa fa-check"></i>
                                                                            Security Guard</li>
                                                                        <li><i class="fa fa-check"></i> CCTV
                                                                        </li>
                                                                        <li><i class="fa fa-check"></i>
                                                                            emergency exit</li>
                                                                        <li><i class="fa fa-check"></i> doctor
                                                                            on call</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xl-3 col-sm-6">
                                                                    <h6><img src="../admin-assets/images/icon/hotel/tray.png"
                                                                            class="img-fluid blur-up lazyload"
                                                                            alt=""> food & drinks</h6>
                                                                    <ul>
                                                                        <li><i class="fa fa-check"></i>
                                                                            restaurant</li>
                                                                        <li><i class="fa fa-check"></i> bar
                                                                        </li>
                                                                    </ul>
                                                                    <h6 class="mt-2"><img
                                                                            src="../admin-assets/images/icon/hotel/barbell.png"
                                                                            class="img-fluid blur-up lazyload"
                                                                            alt=""> activities</h6>
                                                                    <ul>
                                                                        <li><i class="fa fa-check"></i> gym
                                                                        </li>
                                                                        <li><i class="fa fa-check"></i> game
                                                                            zone</li>
                                                                        <li><i class="fa fa-check"></i>
                                                                            swimming pool</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="menu-part tab-pane fade map" id="location">
                                                            <iframe
                                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.9147718689!2d-74.11976358820196!3d40.69740344169578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1568001991098!5m2!1sen!2sin"
                                                                style="border:0;" allowfullscreen=""></iframe>
                                                        </div>
                                                        <div class="menu-part tab-pane fade review" id="review">
                                                            <div class="review-box">
                                                                <div class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <span>The stay in the hotel was
                                                                        excellent</span>
                                                                </div>
                                                                <h6>by xyz, jun 18, 2019</h6>
                                                                <p>Our stay at sea view was pleasant. We stayed
                                                                    here for a day and the view from
                                                                    the room was brilliant. Rooms were clean
                                                                    hygienic and big. foods were
                                                                    amazing. rooms were neat and clean.staff is
                                                                    very courteous and
                                                                    cooperative.great place to stay. Good
                                                                    atmosphere, Staff was amazing..well
                                                                    education..mannered. Room was spacious and
                                                                    cleaned more then an expected.
                                                                </p>
                                                            </div>
                                                            <div class="review-box">
                                                                <div class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <span>Awesome Stay..value for money</span>
                                                                </div>
                                                                <h6>by xyz, jun 18, 2019</h6>
                                                                <p>We were there for 3 nights and hotel was too
                                                                    good. Greenery was flaunting
                                                                    everywhere. There were games kept for our
                                                                    entertainment. View from room was
                                                                    good. Hotel staff behavior was nice. They
                                                                    provided each and every
                                                                    service in hand. Overall stay was too good.
                                                                </p>
                                                            </div>
                                                            <div class="review-box">
                                                                <div class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <span>Best getaway destination with
                                                                        family</span>
                                                                </div>
                                                                <h6>by xyz, jun 18, 2019</h6>
                                                                <p>The location, view from the rooms are just
                                                                    awesome. Very cool landscaping has
                                                                    been done Around the hotel. There are small
                                                                    activities that you can indulge
                                                                    with your family. Pool wasn't functional at
                                                                    the time of our
                                                                    stay. In all, the stay is really peaceful,
                                                                    calm and Silent. A place we would
                                                                    definitely want to visit again.</p>
                                                            </div>
                                                        </div>
                                                        <div class="menu-part tab-pane fade policy" id="policy">
                                                            <p>Check-in: 2.00 PM, Check-out: 12.00 PM</p>
                                                            <p>The primary guest must be at least 18 years of
                                                                age to check into this hotel.</p>
                                                            <p>It is mandatory for guests to present valid photo
                                                                identification at the time of
                                                                check-in. According to government regulations, a
                                                                valid Photo ID has to be
                                                                carried by every person above the age of 18
                                                                staying at the hotel.
                                                                The identification proofs accepted are Aadhar
                                                                Card, Driving License, Voter ID
                                                                Card, and Passport. Without Original copy of
                                                                valid ID the guest will not be
                                                                allowed to check-in.
                                                            </p>
                                                            <p>Local ID proof & Pan card will not be acceptable
                                                                as ID proof.</p>
                                                            <p>Unless mentioned, the tariff does not include
                                                                charges for optional room services
                                                                (such as telephone calls, room service, mini
                                                                bar, snacks, laundry extra bed
                                                                etc.). In case, such additional charges are
                                                                levied by the
                                                                hotel(s), we shall not be held responsible for
                                                                it.</p>
                                                            <p>Personal food and beverages are strictly not
                                                                permitted on the hotel premises.</p>
                                                            <p>The hotel shall not be responsible for any loss
                                                                of or damage to your personal
                                                                belongings.In case any damage is done to the
                                                                hotel property by guests during
                                                                their stay, it will be the sole accountability
                                                                of the guest.</p>
                                                            <p>No charge for children below 6 years and the
                                                                extra cost will be applicable for
                                                                availing an extra bed in a double occupancy
                                                                room. </p>
                                                            <p>Should any action by a guest be deemed
                                                                inappropriate by the hotel, or if any
                                                                inappropriate behaviour is brought to the
                                                                attention of the hotel, the hotel
                                                                reserves the right, after the allegations have
                                                                been investigated,
                                                                to take action against the guest.</p>
                                                            <p>We would love to host you but in case your plans
                                                                change, our simple cancellation
                                                                process makes sure you receive a quick
                                                                confirmation and fast refunds. Our
                                                                standard check-in time is 12 noon and you can
                                                                check-in any time
                                                                after that till your reservation is valid.</p>
                                                            <p>Pets are not allowed in the hotel premises.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </section>
                                <!-- section end -->
                            </div>

                        </div>



                    </div>
                </div>

            </div>
        @endsection
