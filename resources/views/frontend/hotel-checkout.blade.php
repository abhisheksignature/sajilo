<!-- Header Section -->
<?php include_once('includes/header.php') ?>


    <!-- breadcrumb start -->
    <section class="breadcrumb-section pt-0">
        <img src="assets/images/inner-pages/bg-bread.jpg" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="breadcrumb-content">
            <div>
                <h2>checkout</h2>
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="hotel-booking.php">review</a></li>
                        <li class="breadcrumb-item active">checkout</li>
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
                    <div class="summery-box">
                        <h2>payment option</h2>
                        <div class="review-section">
                            <div class="review_box shadow-none">
                                <div class="flight_detail payment-gateway p-0">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="h_one">
                                                <div class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#one"
                                                    aria-expanded="true" aria-controls="one">
                                                    <label for='r_one'>
                                                        <input type='radio' class="radio_animated ms-0" checked
                                                            id='r_one' name='occupation' value='Working' required />
                                                        debit card
                                                    </label>
                                                </div>
                                            </div>
                                            <div id="one" class="collapse show" aria-labelledby="h_one"
                                                data-bs-parent="#accordionExample">
                                                <div class="card-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="name">name on card</label>
                                                            <input type="text" class="form-control" id="name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="number">card number</label>
                                                            <input type="text" class="form-control" id="number">
                                                            <img src="assets/images/creditcards.png" alt=""
                                                                class="img-fluid blur-up lazyload">
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-4">
                                                                <label for="month">month</label>
                                                                <select id="month" class="form-control">
                                                                    <option selected>Month...</option>
                                                                    <option>January</option>
                                                                    <option>February</option>
                                                                    <option>March</option>
                                                                    <option>April</option>
                                                                    <option>May</option>
                                                                    <option>June</option>
                                                                    <option>July</option>
                                                                    <option>August</option>
                                                                    <option>September</option>
                                                                    <option>October</option>
                                                                    <option>November</option>
                                                                    <option>December</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="year">year</label>
                                                                <select id="year" class="form-control">
                                                                    <option selected>Year...</option>
                                                                    <option>...</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="cvv">cvv</label>
                                                                <input type="password" maxlength="4"
                                                                    class="form-control" id="cvv">
                                                                <img src="assets/images/cvv.png"
                                                                    class="img-fluid blur-up lazyload" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="payment-btn">
                                                            <button type="button"
                                                                onclick="window.location.href='hotel-booking-success.php';"
                                                                class="btn btn-solid color1">make payment</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="h_two">
                                                <div class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#two"
                                                    aria-expanded="true" aria-controls="two">
                                                    <label for='r_two'>
                                                        <input type='radio' class="radio_animated ms-0" id='r_two'
                                                            name='occupation' value='Working' required /> credit card
                                                    </label>
                                                </div>
                                            </div>
                                            <div id="two" class="collapse" aria-labelledby="h_two"
                                                data-bs-parent="#accordionExample">
                                                <div class="card-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="c-name">name on card</label>
                                                            <input type="text" class="form-control" id="c-name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="c-number">card number</label>
                                                            <input type="text" class="form-control" id="c-number">
                                                            <img src="assets/images/creditcards.png" alt=""
                                                                class="img-fluid blur-up lazyload">
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-4">
                                                                <label for="c-month">month</label>
                                                                <select id="c-month" class="form-control">
                                                                    <option selected>Month...</option>
                                                                    <option>January</option>
                                                                    <option>February</option>
                                                                    <option>March</option>
                                                                    <option>April</option>
                                                                    <option>May</option>
                                                                    <option>June</option>
                                                                    <option>July</option>
                                                                    <option>August</option>
                                                                    <option>September</option>
                                                                    <option>October</option>
                                                                    <option>November</option>
                                                                    <option>December</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="c-year">year</label>
                                                                <select id="c-year" class="form-control">
                                                                    <option selected>Year...</option>
                                                                    <option>...</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="c-cvv">cvv</label>
                                                                <input type="password" class="form-control"
                                                                    maxlength="4" id="c-cvv">
                                                                <img src="assets/images/cvv.png"
                                                                    class="img-fluid blur-up lazyload" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="payment-btn">
                                                            <button type="button"
                                                                onclick="window.location.href='hotel-booking-success.php';"
                                                                class="btn btn-solid color1">make payment</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="h_three">
                                                <div class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#three"
                                                    aria-expanded="true" aria-controls="three">
                                                    <label for='r_three'>
                                                        <input type='radio' class="radio_animated ms-0" id='r_three'
                                                            name='occupation' value='Working' required /> net banking
                                                    </label>
                                                </div>
                                            </div>
                                            <div id="three" class="collapse" aria-labelledby="h_three"
                                                data-bs-parent="#accordionExample">
                                                <div class="card-body">
                                                    <form class="wallet-section">
                                                        <h6>select popular banks</h6>
                                                        <div class="row">
                                                            <div class="form-check col-md-6">
                                                                <input class="form-check-input radio_animated"
                                                                    type="radio" name="exampleRadios1" id="Radios1"
                                                                    value="option1" checked>
                                                                <label class="form-check-label" for="Radios1">
                                                                    Industrial & Commercial Bank
                                                                </label>
                                                            </div>
                                                            <div class="form-check col-md-6">
                                                                <input class="form-check-input radio_animated"
                                                                    type="radio" name="exampleRadios1" id="Radios2"
                                                                    value="option2">
                                                                <label class="form-check-label" for="Radios2">
                                                                    Construction Bank Corp.
                                                                </label>
                                                            </div>
                                                            <div class="form-check col-md-6">
                                                                <input class="form-check-input radio_animated"
                                                                    type="radio" name="exampleRadios1" id="Radios3"
                                                                    value="option2">
                                                                <label class="form-check-label" for="Radios3">
                                                                    Agricultural Bank
                                                                </label>
                                                            </div>
                                                            <div class="form-check col-md-6">
                                                                <input class="form-check-input radio_animated"
                                                                    type="radio" name="exampleRadios1" id="Radios4"
                                                                    value="option2">
                                                                <label class="form-check-label" for="Radios4">
                                                                    HSBC Holdings
                                                                </label>
                                                            </div>
                                                            <div class="form-check col-md-6">
                                                                <input class="form-check-input radio_animated"
                                                                    type="radio" name="exampleRadios1" id="Radios5"
                                                                    value="option2">
                                                                <label class="form-check-label" for="Radios5">
                                                                    Bank of America
                                                                </label>
                                                            </div>
                                                            <div class="form-check col-md-6">
                                                                <input class="form-check-input radio_animated"
                                                                    type="radio" name="exampleRadios1" id="Radios6"
                                                                    value="option2">
                                                                <label class="form-check-label" for="Radios6">
                                                                    JPMorgan Chase & Co.
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mt-3">
                                                            <label for="net-b">select bank</label>
                                                            <select id="net-b" class="form-control">
                                                                <option selected>Choose Bank...</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div>
                                                        <div class="payment-btn">
                                                            <button type="button"
                                                                onclick="window.location.href='hotel-booking-success.php';"
                                                                class="btn btn-solid color1">make payment</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="h_four">
                                                <div class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#four"
                                                    aria-expanded="true" aria-controls="four">
                                                    <label for='r_four'>
                                                        <input type='radio' class="radio_animated ms-0" id='r_four'
                                                            name='occupation' value='Working' required /> my wallet
                                                    </label>
                                                </div>
                                            </div>
                                            <div id="four" class="collapse" aria-labelledby="h_four"
                                                data-bs-parent="#accordionExample">
                                                <div class="card-body">
                                                    <form class="wallet-section">
                                                        <h6>select your wallet</h6>
                                                        <div class="row">
                                                            <div class="form-check col-md-6">
                                                                <input class="form-check-input radio_animated"
                                                                    type="radio" name="exampleRadios2"
                                                                    id="exampleRadios1" value="option1" checked>
                                                                <label class="form-check-label" for="exampleRadios1">
                                                                    Adyen
                                                                </label>
                                                            </div>
                                                            <div class="form-check col-md-6">
                                                                <input class="form-check-input radio_animated"
                                                                    type="radio" name="exampleRadios2"
                                                                    id="exampleRadios2" value="option2">
                                                                <label class="form-check-label" for="exampleRadios2">
                                                                    Airtel Money
                                                                </label>
                                                            </div>
                                                            <div class="form-check col-md-6">
                                                                <input class="form-check-input radio_animated"
                                                                    type="radio" name="exampleRadios2"
                                                                    id="exampleRadios3" value="option2">
                                                                <label class="form-check-label" for="exampleRadios3">
                                                                    AlliedWallet
                                                                </label>
                                                            </div>
                                                            <div class="form-check col-md-6">
                                                                <input class="form-check-input radio_animated"
                                                                    type="radio" name="exampleRadios2"
                                                                    id="exampleRadios4" value="option2">
                                                                <label class="form-check-label" for="exampleRadios4">
                                                                    Apple Pay
                                                                </label>
                                                            </div>
                                                            <div class="form-check col-md-6">
                                                                <input class="form-check-input radio_animated"
                                                                    type="radio" name="exampleRadios2"
                                                                    id="exampleRadios5" value="option2">
                                                                <label class="form-check-label" for="exampleRadios5">
                                                                    Brinks
                                                                </label>
                                                            </div>
                                                            <div class="form-check col-md-6">
                                                                <input class="form-check-input radio_animated"
                                                                    type="radio" name="exampleRadios2"
                                                                    id="exampleRadios6" value="option2">
                                                                <label class="form-check-label" for="exampleRadios6">
                                                                    CardFree
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="payment-btn">
                                                            <button type="button"
                                                                onclick="window.location.href='hotel-booking-success.php';"
                                                                class="btn btn-solid color1">make payment</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 booking-order">
                    <div class="summery-box">
                        <h2>booking summery</h2>
                        <div class="hotel-section">
                            <div class="hotel-img">
                                <img src="assets/images/hotel/room/1.jpg" class="img-fluid blur-up lazyload" alt="">
                            </div>
                            <div class="hotel-detail">
                                <h6>sea view hotel</h6>
                                <p>Mina Road, Bur Dubai, Dubai</p>
                            </div>
                        </div>
                        <div class="summery-section">
                            <div class="box">
                                <div class="left">
                                    <div class="up">
                                        <h6>check in</h6>
                                        <h5>tue, 18 sep 2019</h5>
                                    </div>
                                    <div class="down">
                                        <h6>check in time</h6>
                                        <h5>2.00 pm</h5>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="up">
                                        <h6>check out</h6>
                                        <h5>fri, 21 sep 2019</h5>
                                    </div>
                                    <div class="down">
                                        <h6>check out time</h6>
                                        <h5>12.00 pm</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="summery-section">
                            <h5 class="mb-0">2 guest, 1 deluxe room, 3 night</h5>
                            <a href="hotel-single-1.php" class="edit-cls">edit</a>
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