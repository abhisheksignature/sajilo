<!-- Header Section -->
<?php include_once('includes/header.php') ?>


    <!-- breadcrumb start -->
    <section class="breadcrumb-section pt-0">
        <img src="assets/images/tour/spain4.jpg" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="breadcrumb-content pt-0">
            <div>
                <h2>review</h2>
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item">holidays</li>
                        <li class="breadcrumb-item active">review</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="title-breadcrumb">Rica</div>
    </section>
    <!-- breadcrumb end -->


    <!-- booking section start -->
    <section class="section-b-space bg-inner animated-section">
        <div class="animation-section">
            <div class="cross po-2"></div>
            <div class="round po-5"></div>
            <div class="round r-2 po-6"></div>
            <div class="round r-2 po-7"></div>
            <div class="round r-y po-8"></div>
            <div class="square po-10"></div>
            <div class="square s-2 po-12"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="guest-detail">
                        <h2>Traveller Information</h2>
                        <form>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col first-name">
                                        <label>first name</label>
                                        <input type="text" id="firstName" class="form-control" placeholder="First name">
                                    </div>
                                    <div class="col">
                                        <label>last name</label>
                                        <input type="text" id="lastName" class="form-control" placeholder="Last name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" class="form-control" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">Booking confirmation will be sent to
                                    this email ID.</small>
                            </div>
                            <div class="form-group">
                                <label>contact info</label>
                                <input id="mobile-no" type="tel" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">special request</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    placeholder="e.g.. early check-in, airport transfer"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">have a coupon code?</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Promo Code">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">apply</span>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-btn">
                                <button onclick="window.location.href='tour-checkout.php';" class="btn btn-solid"
                                    type="button">pay now</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 booking-order">
                    <div class="summery-box">
                        <h2>booking summery</h2>
                        <div class="hotel-section">
                            <div class="hotel-img">
                                <img src="assets/images/tour/spain4.jpg" class="img-fluid blur-up lazyload" alt="">
                            </div>
                            <div class="hotel-detail">
                                <h6>splendid spain</h6>
                                <p>8 night | 7 days</p>
                            </div>
                        </div>
                        <div class="summery-section">
                            <div class="box">
                                <div class="left">
                                    <div class="up">
                                        <h6>destination</h6>
                                        <h5>spain</h5>
                                    </div>
                                    <div class="down">
                                        <h6>tour start</h6>
                                        <h5>9 nov, 2019</h5>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="up">
                                        <h6>Duration</h6>
                                        <h5>7 days</h5>
                                    </div>
                                    <div class="down">
                                        <h6>tour end</h6>
                                        <h5>15 nov, 2019</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="summery-section">
                            <h5 class="mb-0">2 guest, 1 deluxe room</h5>
                            <a href="tour-single-1.php" class="edit-cls">edit</a>
                        </div>
                        <div class="summery-section">
                            <div class="payment-details">
                                <h5>payment details</h5>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>base price</td>
                                            <td>$2510</td>
                                        </tr>
                                        <tr>
                                            <td>promo discount</td>
                                            <td>- $250</td>
                                        </tr>
                                        <tr>
                                            <td>tax & service fees</td>
                                            <td>+ $150</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="summery-section">
                            <div class="payment-details">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>payable amount</td>
                                            <td class="amount">$2410</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- booking section end -->


   <!-- Footer Section -->
<?php include_once('includes/footer.php') ?>