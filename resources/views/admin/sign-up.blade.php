<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="admin-assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="admin-assets/images/favicon.png" type="image/x-icon">
    <title>Rica - sign up</title>
    <!-- Google font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="admin-assets/css/font-awesome.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="admin-assets/css/vendors/themify.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="admin-assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="admin-assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="admin-assets/css/style.css">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="admin-assets/css/responsive.css">
</head>

<body>
    <!-- login page start-->
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card">
                    <div>
                        <div>
                            <a class="logo" href="{{ url('/') }}">
                                <!-- Your logo here -->
                                <p>Logo here</p>
                            </a>
                        </div>
                        <div class="login-main">
                            <form class="theme-form" method="post" action="{{ route('admin.register') }}">
                                @csrf <!-- CSRF token for security -->
                                <h4>Create your account</h4>
                                <p>Enter your personal details to create an account</p>
                                <div class="form-group">
                                    <label class="col-form-label form-label-title  pt-0">Your Name</label>
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <input class="form-control" type="text" name="first_name" required
                                                placeholder="First name">
                                        </div>
                                        <div class="col-6">
                                            <input class="form-control" type="text" name="last_name" required
                                                placeholder="Last name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label form-label-title ">Email Address</label>
                                    <input class="form-control" type="email" name="email" required
                                        placeholder="Test@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label form-label-title ">Password</label>
                                    <div class="form-input position-relative">
                                        <input class="form-control" type="password" name="password" required
                                            placeholder="*********">
                                        <div class="show-hide"><span class="show"></span></div>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <div class="checkbox p-0">
                                        <input id="checkbox1" type="checkbox">
                                        <label class="text-muted" for="checkbox1">Agree with<a class="ms-2"
                                                href="#">Privacy Policy</a></label>
                                    </div>
                                    <button class="btn btn-primary btn-block w-100" type="submit">Create
                                        Account</button>
                                </div>
                                <h6 class="text-muted mt-4 or">Or signup with</h6>
                                <div class="social mt-4">
                                    <div class="btn-showcase">
                                        <a class="btn btn-light" href="https://www.linkedin.com/login" target="_blank">
                                            <i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn
                                        </a>
                                        <a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank">
                                            <i class="txt-twitter" data-feather="twitter"></i> Twitter
                                        </a>
                                        <a class="btn btn-light" href="https://www.facebook.com/" target="_blank">
                                            <i class="txt-fb" data-feather="facebook"></i> Facebook
                                        </a>
                                    </div>
                                </div>
                                <p class="mt-4 mb-0">Already have an account?<a class="ms-2" href="admin-login">Sign
                                        in</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        <!-- latest jquery-->
        <script src="admin-assets/js/jquery-3.5.1.min.js"></script>
        <!-- Bootstrap js-->
        <script src="admin-assets/js/bootstrap/bootstrap.bundle.min.js"></script>
        <!-- feather icon js-->
        <script src="admin-assets/js/icons/feather-icon/feather.min.js"></script>
        <script src="admin-assets/js/icons/feather-icon/feather-icon.js"></script>
        <!-- scrollbar js-->
        <!-- Sidebar jquery-->
        <script src="admin-assets/js/config.js"></script>
        <!-- Plugins JS start-->
        <!-- Plugins JS Ends-->
        <!-- Theme js-->
        <script src="admin-assets/js/script.js"></script>
        <!-- login js-->
        <!-- Plugin used-->
    </div>
</body>

</html>