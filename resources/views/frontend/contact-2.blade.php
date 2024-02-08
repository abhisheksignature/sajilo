<!-- Header Section -->
@extends('frontend.layouts-one.main')

@section ('main-container')
    <!-- breadcrumb start -->
    <section class="breadcrumb-section pt-0">
        <img src="frontend/images/contact-us.png" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="breadcrumb-content">
            <div>
                <h2>contact us</h2>
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">contact us</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="title-breadcrumb">Rica</div>
    </section>
    <!-- breadcrumb end -->


    <!-- contact detail section start -->
    <section class="contact_section small-section pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="contact_wrap">
                        <div class="title_bar">
                            <i class="fas fa-map-marker-alt"></i>
                            <h4>Address</h4>
                        </div>
                        <div class="contact_content">
                            <p>549 Sulphur Springs Road <br>
                                Downers Grove, IL 60515</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="contact_wrap">
                        <div class="title_bar">
                            <i class="fas fa-envelope"></i>
                            <h4>email address</h4>
                        </div>
                        <div class="contact_content">
                            <ul>
                                <li>Support@rica.com</li>
                                <li>info@rica.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="contact_wrap">
                        <div class="title_bar">
                            <i class="fas fa-phone-alt"></i>
                            <h4>phone</h4>
                        </div>
                        <div class="contact_content">
                            <ul>
                                <li>+91 123 - 456 - 7890</li>
                                <li>+86 163 - 451 - 7894</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="contact_wrap">
                        <div class="title_bar">
                            <i class="fas fa-fax"></i>
                            <h4>fax</h4>
                        </div>
                        <div class="contact_content">
                            <ul>
                                <li>+1 212 999 8888</li>
                                <li>+44 1-2222 8888</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact detail section end -->


    <!-- get in touch section start -->
    <section class="small-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="get-in-touch">
                        <h3>get in touch</h3>
                        <form>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="name" placeholder="first name"
                                        required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="last-name" placeholder="last name"
                                        required="">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="text" class="form-control" id="review" placeholder="phone number"
                                        required="">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="text" class="form-control" id="email" placeholder="email address"
                                        required="">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" placeholder="Write Your Message"
                                        id="exampleFormControlTextarea1" rows="6"></textarea>
                                </div>
                                <div class="col-md-12 submit-btn">
                                    <button class="btn btn-solid" type="submit">Send Your Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.1583091352!2d-74.11976373946229!3d40.69766374859258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1563449626439!5m2!1sen!2sin"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- get in touch section end -->
@endsection
