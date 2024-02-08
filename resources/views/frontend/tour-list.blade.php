@extends('frontend.layouts-one.main')

@section ('main-container')
    <!-- breadcrumb start -->
    <section class="breadcrumb-section parallax-img pt-0">
        <img src="frontend/images/inner-pages/holidaytour.png" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="breadcrumb-content overlay-black">
            <div>
                <h2>holiday package</h2>
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">holiday package</li>
                    </ol>
                </nav>
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
    <!-- breadcrumb end -->


    <!-- section start -->
    <section class="xs-section bg-inner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="filter-panel right-filter open-cls">
                        <div class="left-filter">
                            <div class="respon-filter-btn">
                                <h6> filter <i class="fas fa-sort-down"></i></h6>
                                <span class="according-menu"></span>
                            </div>
                            <div class="filters respon-filter-content filter-button-group">
                                <ul>
                                    <li class="active" data-filter="*">All</li>
                                    <li data-filter=".popular">popular</li>
                                    <li data-filter=".latest">latest</li>
                                    <li data-filter=".trend">trend</li>
                                </ul>
                            </div>
                        </div>
                        <div class="right-panel">
                            <a href="javascript:void(0)" class="view-map me-0"><i class="fas fa-search"></i> find
                                tours</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 onclick-map">
                    <div class="book-table single-table bg-inner">
                        <div class="table-form classic-form">
                            <form>
                                <div class="row w-100">
                                    <div class="form-group col p-0">
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Starting from">
                                        <img src="frontend/images/icon/table-no.png" class="img-fluid blur-up lazyload"
                                            alt="">
                                    </div>
                                    <div class="form-group col p-0">
                                        <input type="text" class="form-control" placeholder="Going to">
                                        <img src="frontend/images/icon/table-no.png" class="img-fluid blur-up lazyload"
                                            alt="">
                                    </div>
                                    <div class="col p-0">
                                        <input placeholder="During Date" id="datepicker" />
                                    </div>
                                </div>
                                <a href="#" class="btn btn-rounded color1">search</a>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="left-sidebar sticky-cls-top">
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
                                        <h6 class="collapse-block-title">star category</h6>
                                        <div class="collection-collapse-block-content">
                                            <div class="collection-brand-filter">
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="five">
                                                    <label class="form-check-label rating" for="five">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="ms-1">(4025)</span>
                                                    </label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="four">
                                                    <label class="form-check-label rating" for="four">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <span class="ms-1">(2012)</span>
                                                    </label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="three">
                                                    <label class="form-check-label rating" for="three">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <span class="ms-1">(25)</span>
                                                    </label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="two">
                                                    <label class="form-check-label rating" for="two">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <span class="ms-1">(1)</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-block">
                                    <div class="collection-collapse-block open">
                                        <h6 class="collapse-block-title">flights</h6>
                                        <div class="collection-collapse-block-content">
                                            <div class="collection-brand-filter">
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="zara">
                                                    <label class="form-check-label" for="zara">with flights</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="vera-moda">
                                                    <label class="form-check-label" for="vera-moda">without
                                                        flights</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-block">
                                    <div class="collection-collapse-block open">
                                        <h6 class="collapse-block-title">travel type</h6>
                                        <div class="collection-collapse-block-content">
                                            <div class="collection-brand-filter">
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="restaurant">
                                                    <label class="form-check-label" for="restaurant">family</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="wifi">
                                                    <label class="form-check-label" for="wifi">honeymoon</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="spa">
                                                    <label class="form-check-label" for="spa">beach</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="pet">
                                                    <label class="form-check-label" for="pet">cruise</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="parking">
                                                    <label class="form-check-label" for="parking">adventure</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="swimming">
                                                    <label class="form-check-label" for="swimming">shopping</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-block">
                                    <div class="collection-collapse-block open">
                                        <h6 class="collapse-block-title">budget</h6>
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
                                        <h6 class="collapse-block-title">trip duration</h6>
                                        <div class="collection-collapse-block-content">
                                            <div class="collection-brand-filter">
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="english">
                                                    <label class="form-check-label" for="english">upto 3
                                                        nights</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="sign">
                                                    <label class="form-check-label" for="sign">4 to 7 nights</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="italiano">
                                                    <label class="form-check-label" for="italiano">7 to 11
                                                        nights</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="suomi">
                                                    <label class="form-check-label" for="suomi">11 to 15
                                                        nights</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="espanol">
                                                    <label class="form-check-label" for="espanol">15 to 21
                                                        nights</label>
                                                </div>
                                                <div class="form-check collection-filter-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="french">
                                                    <label class="form-check-label" for="french">above 21
                                                        nights</label>
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
                    <div class="container">
                        <div class="list-view row content grid">
                            <div class="list-box col-12 popular grid-item wow fadeInUp">
                                <div class="list-img">
                                    <a href="tour-single-6.php">
                                        <img src="frontend/images/tour/tour/11.jpg" class="img-fluid blur-up lazyload"
                                            alt="">
                                    </a>
                                </div>
                                <div class="list-content">
                                    <div>
                                        <a href="tour-single-6.php">
                                            <h5>splendid spain</h5>
                                        </a>
                                        <p>6 Night | 7 Days</p>
                                        <h6><i class="fas fa-plane-departure me-3"></i> Kuta (2N) → Lombok (2N) → Ubud
                                            (2N) <i class="fas fa-plane-arrival ms-3"></i></h6>
                                        <div class="facility-icon">
                                            <div class="facility-box">
                                                <img src="frontend/images/icon/tour/hotel.png"
                                                    class="img-fluid blur-up lazyload" alt="" data-bs-toggle="tooltip"
                                                    data-placement="top" title="Hotel">
                                                <span>hotel</span>
                                            </div>
                                            <div class="facility-box">
                                                <img src="frontend/images/icon/tour/airplane.png"
                                                    class="img-fluid blur-up lazyload" alt="" data-bs-toggle="tooltip"
                                                    data-placement="top" title="Flight">
                                                <span>flight</span>
                                            </div>
                                            <div class="facility-box">
                                                <img src="frontend/images/icon/tour/fork.png"
                                                    class="img-fluid blur-up lazyload" alt="" data-bs-toggle="tooltip"
                                                    data-placement="top" title="Meals">
                                                <span>meals</span>
                                            </div>
                                            <div class="facility-box">
                                                <img src="frontend/images/icon/tour/photo-camera.png"
                                                    class="img-fluid blur-up lazyload" alt="" data-bs-toggle="tooltip"
                                                    data-placement="top" title="Sightseeing">
                                                <span>sightseeing</span>
                                            </div>
                                            <div class="facility-box">
                                                <img src="frontend/images/icon/tour/visa.png"
                                                    class="img-fluid blur-up lazyload" alt="" data-bs-toggle="tooltip"
                                                    data-placement="top" title="Visa">
                                                <span>visa</span>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <del>$1300</del>$1254 <span>/ per person</span>
                                        </div>
                                        <div class="offer-box">
                                            <i class="fas fa-fire"></i> 8 people booked this package today
                                        </div>
                                        <a href="tour-single-6.php" class="btn btn-solid color1 book-now">view
                                            details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="list-box col-12 latest grid-item wow fadeInUp">
                                <div class="list-img">
                                    <a href="tour-single-6.php">
                                        <img src="frontend/images/tour/tour/15.jpg" class="img-fluid blur-up lazyload"
                                            alt="">
                                    </a>
                                </div>
                                <div class="list-content">
                                    <div>
                                        <a href="tour-single-6.php">
                                            <h5>spectacular south africa</h5>
                                        </a>
                                        <p>6 Night | 7 Days</p>
                                        <h6><i class="fas fa-plane-departure me-3"></i> Kuta (2N) → Lombok (2N) → Ubud
                                            (2N) <i class="fas fa-plane-arrival ms-3"></i></h6>
                                        <div class="facility-icon">
                                            <div class="facility-box">
                                                <img src="frontend/images/icon/tour/hotel.png"
                                                    class="img-fluid blur-up lazyload" alt="" data-bs-toggle="tooltip"
                                                    data-placement="top" title="Hotel">
                                                <span>hotel</span>
                                            </div>
                                            <div class="facility-box">
                                                <img src="frontend/images/icon/tour/airplane.png"
                                                    class="img-fluid blur-up lazyload" alt="" data-bs-toggle="tooltip"
                                                    data-placement="top" title="Flight">
                                                <span>flight</span>
                                            </div>
                                            <div class="facility-box">
                                                <img src="frontend/images/icon/tour/visa.png"
                                                    class="img-fluid blur-up lazyload" alt="" data-bs-toggle="tooltip"
                                                    data-placement="top" title="Visa">
                                                <span>visa</span>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <del>$1300</del>$1254 <span>/ per person</span>
                                        </div>
                                        <a href="tour-single-6.php" class="btn btn-solid color1 book-now">view
                                            details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="list-box col-12 popular grid-item wow fadeInUp">
                                <div class="list-img">
                                    <a href="tour-single-6.php">
                                        <img src="frontend/images/tour/tour/13.jpg" class="img-fluid blur-up lazyload"
                                            alt="">
                                    </a>
                                </div>
                                <div class="list-content">
                                    <div>
                                        <a href="tour-single-6.php">
                                            <h5>canadian delight</h5>
                                        </a>
                                        <p>6 Night | 7 Days</p>
                                        <h6><i class="fas fa-plane-departure me-3"></i> Kuta (2N) → Lombok (2N) → Ubud
                                            (2N) <i class="fas fa-plane-arrival ms-3"></i></h6>
                                        <div class="facility-icon">
                                            <div class="facility-box">
                                                <img src="frontend/images/icon/tour/hotel.png"
                                                    class="img-fluid blur-up lazyload" alt="" data-bs-toggle="tooltip"
                                                    data-placement="top" title="Hotel">
                                                <span>hotel</span>
                                            </div>
                                            <div class="facility-box">
                                                <img src="frontend/images/icon/tour/fork.png"
                                                    class="img-fluid blur-up lazyload" alt="" data-bs-toggle="tooltip"
                                                    data-placement="top" title="Meals">
                                                <span>meals</span>
                                            </div>
                                            <div class="facility-box">
                                                <img src="frontend/images/icon/tour/photo-camera.png"
                                                    class="img-fluid blur-up lazyload" alt="" data-bs-toggle="tooltip"
                                                    data-placement="top" title="Sightseeing">
                                                <span>sightseeing</span>
                                            </div>
                                            <div class="facility-box">
                                                <img src="frontend/images/icon/tour/visa.png"
                                                    class="img-fluid blur-up lazyload" alt="" data-bs-toggle="tooltip"
                                                    data-placement="top" title="Visa">
                                                <span>visa</span>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <del>$1300</del>$1254 <span>/ per person</span>
                                        </div>
                                        <a href="tour-single-6.php" class="btn btn-solid color1 book-now">view
                                            details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="list-box col-12 trend grid-item wow fadeInUp">
                                <div class="list-img">
                                    <a href="tour-single-6.php">
                                        <img src="frontend/images/tour/tour/7.jpg" class="img-fluid blur-up lazyload"
                                            alt="">
                                    </a>
                                </div>
                                <div class="list-content">
                                    <div>
                                        <a href="tour-single-6.php">
                                            <h5>beautiful bali</h5>
                                        </a>
                                        <p>6 Night | 7 Days</p>
                                        <h6><i class="fas fa-plane-departure me-3"></i> Kuta (2N) → Lombok (2N) → Ubud
                                            (2N) <i class="fas fa-plane-arrival ms-3"></i></h6>
                                        <div class="facility-icon">
                                            <div class="facility-box">
                                                <img src="frontend/images/icon/tour/hotel.png"
                                                    class="img-fluid blur-up lazyload" alt="" data-bs-toggle="tooltip"
                                                    data-placement="top" title="Hotel">
                                                <span>hotel</span>
                                            </div>
                                            <div class="facility-box">
                                                <img src="frontend/images/icon/tour/airplane.png"
                                                    class="img-fluid blur-up lazyload" alt="" data-bs-toggle="tooltip"
                                                    data-placement="top" title="Flight">
                                                <span>flight</span>
                                            </div>
                                            <div class="facility-box">
                                                <img src="frontend/images/icon/tour/photo-camera.png"
                                                    class="img-fluid blur-up lazyload" alt="" data-bs-toggle="tooltip"
                                                    data-placement="top" title="Sightseeing">
                                                <span>sightseeing</span>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <del>$1300</del>$1254 <span>/ per person</span>
                                        </div>
                                        <a href="tour-single-6.php" class="btn btn-solid color1 book-now">view
                                            details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <nav aria-label="Page navigation example" class="pagination-section">
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
        </div>
    </section>
    <!-- section End -->

    @endsection
