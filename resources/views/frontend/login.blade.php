@extends('frontend.layouts-one.main')

@section ('main-container')
    <!-- breadcrumb start -->
    <section class="breadcrumb-section pt-0">
        <img src="frontend/images/login.png" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="breadcrumb-content">
            <div>
                <h2>login</h2>
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">login</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="title-breadcrumb">Rica</div>
    </section>
    <!-- breadcrumb end -->


    <!-- section start -->
    <section class="section-b-space dark-cls animated-section">
        <img src="frontend/images/cab/grey-bg.jpg" alt="" class="img-fluid blur-up lazyload bg-img">
        <div class="animation-section">
            <div class="cross po-1"></div>
            <div class="cross po-2"></div>
            <div class="round po-4"></div>
            <div class="round po-5"></div>
            <div class="round r-y po-8"></div>
            <div class="square po-10"></div>
            <div class="square po-11"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="offset-lg-3 col-lg-6 offset-sm-2 col-sm-8 col-12">
                    <div class="account-sign-in">
                        <div class="title">
                            <h3>Login</h3>
                        </div>
                        <div class="login-with">
                            <h6>log in with</h6>
                            <div class="login-social row">
                                <div class="col">
                                    <a class="boxes">
                                        <img src="frontend/images/icon/social/facebook.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                        <h6>facebook</h6>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="boxes">
                                        <img src="frontend/images/icon/social/google.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                        <h6>google</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="divider">
                                <h6>OR</h6>
                            </div>
                        </div>
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">user name or Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                    anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Password">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">remember me</label>
                            </div>
                            <div class="button-bottom">
                                <button type="submit" class="w-100 btn btn-solid">login</button>
                                <div class="divider">
                                    <h6>or</h6>
                                </div>
                                <button type="submit" class="w-100 btn btn-solid btn-outline"
                                    onclick="window.location.href = 'register.php';">create account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->
@endsection
