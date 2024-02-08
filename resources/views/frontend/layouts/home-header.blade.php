<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="rica">
    <meta name="keywords" content="rica">
    <meta name="author" content="rica">
    <link rel="icon" href="{{ url('frontend/images/favicon.png') }}" type="image/x-icon" />

    <title>Rica</title>

    <!--Google font-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Vampiro+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{url('frontend/css/font-awesome.css')}}"/>

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{url('frontend/css/animate.css')}}"/>

    <!-- Date-time picker css -->
    <link rel="stylesheet" type="text/css" href="{{url('frontend/css/datepicker.min.css')}}"/>

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{url('frontend/css/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('frontend/css/slick-theme.css')}}"/>

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{url('frontend/css/bootstrap.css')}}"/>

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{url('frontend/css/themify-icons.css')}}"/>

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{url('frontend/css/color1.css')}}"/>

</head>

<body>

    <!-- pre-loader start -->
    <div class="loader-wrapper img-gif">
        <img src="{{ url('frontend/images/loader.gif') }}" alt="" />

    </div>
    <!-- pre-loader end -->


    <!-- header start -->
    <header class="light_header mix-2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="menu">
                        <div class="brand-logo">
                            <a href="">       
                                <!-- <img src="assets/images/icon/footer-logo.png" alt=""
                                    class="img-fluid blur-up lazyload"> -->
                                    <p>Logo Here</p>
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
                                            <a href="" class="nav-link menu-title">Home</a>
                                        </li> 
                                        <li class="dropdown">
                                            <a href="hotel-list" class="nav-link menu-title">hotel</a>
                                            
                                        </li>
                                        <li class="dropdown">
                                            <a href="tour-list" class="nav-link menu-title">tour</a>
                                            
                                        </li>
                                        <li class="dropdown">
                                            <a href="flight-left-sidebar" class="nav-link menu-title">flight</a>
                                        </li>
                                        
                                        <li class="dropdown">
                                            <a href="about-us" class="nav-link menu-title">about</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="contact" class="nav-link menu-title">contact</a>
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
                                <a href="sign-up">
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
        <!-- <div class="container-fluid border-top">
            <div class="row">
                <div class="col-12">
                    <ul class="nav mix-pills nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-hotel-tab" data-bs-toggle="pill" href="#pills-hotel"
                                role="tab" aria-controls="pills-hotel" aria-selected="true">
                                <svg id="Capa_1" enable-background="new 0 0 512 512" viewBox="0 0 512 512"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="m406.312 482v-384.132h-39.99v-64.972h-95.322v-32.896h-30v32.896h-95.322v64.972h-39.99v384.132h-54.4v30h409.424v-30zm-230.634-419.104h160.644v34.972h-160.644zm140.634 419.104h-45.312v-109.629h45.312zm-75.312 0h-45.312v-109.629h45.312zm105.312 0v-139.629h-180.624v139.629h-30v-354.132h240.624v354.132z" />
                                        <path d="m165.688 158.205h30v30h-30z" />
                                        <path d="m316.312 158.205h30v30h-30z" />
                                        <path d="m241 158.205h30v30h-30z" />
                                        <path d="m165.688 218.541h30v30h-30z" />
                                        <path d="m316.312 218.541h30v30h-30z" />
                                        <path d="m241 218.541h30v30h-30z" />
                                        <path d="m165.688 278.878h30v30h-30z" />
                                        <path d="m316.312 278.878h30v30h-30z" />
                                        <path d="m241 278.878h30v30h-30z" />
                                    </g>
                                </svg> hotel
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-holiday-tab" data-bs-toggle="pill" href="#pills-holiday"
                                role="tab" aria-controls="pills-holiday" aria-selected="false">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 469.17 469.17" style="enable-background:new 0 0 469.17 469.17;"
                                    xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M154.585,134.152c-53.019,0-96,42.981-96,96c0,53.019,42.981,96,96,96c53.019,0,96-42.981,96-96
			C250.585,177.133,207.604,134.152,154.585,134.152z M225.632,194.152h-34.598c-3.309-16.58-8.477-29.981-13.754-40.32
			C198.422,160.141,215.777,174.801,225.632,194.152z M178.585,230.152c0,7.142-0.535,13.703-1.27,20h-45.457
			c-0.738-6.297-1.274-12.859-1.274-20c0-7.145,0.527-13.705,1.258-20h45.489C178.058,216.447,178.585,223.008,178.585,230.152z
			 M152.257,150.386c0.789-0.023,1.531-0.234,2.328-0.234c0.805,0,1.55,0.215,2.351,0.238c6.004,9.211,13.305,23.782,17.726,43.762
			H134.51C138.952,174.103,146.28,159.539,152.257,150.386z M131.89,153.832c-5.258,10.317-10.43,23.733-13.742,40.32h-34.61
			C93.394,174.801,110.749,160.145,131.89,153.832z M74.585,230.152c0-6.946,1.168-13.57,2.84-20h38.293
			c-0.668,6.336-1.133,12.926-1.133,20c0,7.078,0.477,13.66,1.156,20H77.425C75.753,243.722,74.585,237.098,74.585,230.152z
			 M83.538,266.152h34.649c3.344,16.617,8.519,30.133,13.68,40.313C110.737,300.152,93.39,285.496,83.538,266.152z M156.909,309.918
			c-0.789,0.024-1.527,0.234-2.324,0.234s-1.535-0.211-2.328-0.234c-5.734-8.82-13.203-23.424-17.726-43.766h40.11
			C170.124,286.481,162.663,301.078,156.909,309.918z M177.311,306.465c5.168-10.19,10.34-23.695,13.676-40.313h34.645
			C215.78,285.494,198.436,300.149,177.311,306.465z M193.433,250.152c0.676-6.34,1.152-12.922,1.152-20
			c0-7.074-0.461-13.664-1.129-20h38.289c1.672,6.43,2.84,13.055,2.84,20c0,6.946-1.168,13.57-2.84,20H193.433z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <rect x="74.585" y="374.152" width="160" height="16" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <rect x="333.559" y="268.423"
                                                transform="matrix(0.2589 -0.9659 0.9659 0.2589 -7.9406 542.4973)"
                                                width="32" height="16" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>

                                            <rect x="266.652" y="368.841"
                                                transform="matrix(0.2588 -0.9659 0.9659 0.2588 -124.8553 590.9692)"
                                                width="111.997" height="16" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M434.858,50.792L249.402,1.098C246.628,0.355,243.842,0,241.101,0c-14.129,0.001-27.058,9.43-30.89,23.726l-16.726,62.426
			H26.585c-8.836,0-16,7.163-16,16v320c0,8.837,7.164,16,16,16h184.801l111.664,29.92c2.774,0.743,5.558,1.098,8.301,1.098
			c14.129,0,27.058-9.43,30.89-23.726l95.246-355.461C462.062,72.913,451.929,55.366,434.858,50.792z M26.585,422.152v-320h240
			c8.824,0,16,7.178,16,16v288c0,8.822-7.176,16-16,16H26.585z M442.034,85.842l-95.246,355.461
			c-1.875,6.988-8.222,11.868-15.438,11.868c-1.39,0-2.789-0.186-4.16-0.554l-55.793-14.95c15.37-2.335,27.187-15.49,27.187-31.514
			V279.309l8.195,2.196l8.285-30.91l-15.457-4.141l-1.023,3.824V123.129c4.988,1.337,10.746,2.88,16.328,4.376l18.922,61.862
			l13.246,3.55l-1.254-57.129c8.699,2.332,17.582,4.711,23.402,6.271l10.285,18.137l8.832,2.366l-1.519-25.253l13.942-21.111
			l-8.832-2.366l-17.973,10.565c-5.824-1.559-14.703-3.939-23.406-6.271l29.652-48.846l-13.246-3.55l-47.317,44.114
			c-9.305-2.493-19.457-5.215-24.957-6.687c-5.39-10.074-15.886-17.004-28.105-17.004h-56.539l15.617-58.284
			c1.875-6.987,8.223-11.867,15.438-11.868c1.39,0,2.789,0.186,4.16,0.554l185.457,49.694c4.129,1.106,7.578,3.754,9.715,7.455
			C442.57,77.404,443.139,81.715,442.034,85.842z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <rect x="339.372" y="218.479"
                                                transform="matrix(0.2558 -0.9667 0.9667 0.2558 39.6998 504.257)"
                                                width="16" height="15.728" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>

                                            <rect x="369.74" y="226.546"
                                                transform="matrix(0.2558 -0.9667 0.9667 0.2558 54.5006 539.6177)"
                                                width="15.999" height="15.728" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>

                                            <rect x="309.006" y="210.437"
                                                transform="matrix(0.2558 -0.9667 0.9667 0.2558 24.8764 468.9158)"
                                                width="15.999" height="15.728" />
                                        </g>
                                    </g>
                                </svg> holiday
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-flight-tab" data-bs-toggle="pill" href="#pills-flight" role="tab"
                                aria-controls="pills-flight" aria-selected="false">
                                <svg id="Capa_1" enable-background="new 0 0 512.396 512.396"
                                    viewBox="0 0 512.396 512.396" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="m422.098 0h-254.175c-9.813 0-17.5 8.126-17.5 18.5v43.922c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-43.922c0-1.614.655-3.5 2.5-3.5h254.175c1.378 0 2.5 1.121 2.5 2.5v175.362h-62.625v-63.69c0-9.649-7.851-17.5-17.5-17.5h-179.05v-11.945c0-4.143-3.358-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v11.945h-60.125c-9.649 0-17.5 7.851-17.5 17.5v365.725c0 9.649 7.851 17.5 17.5 17.5h27.226c4.142 0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5h-27.226c-1.378 0-2.5-1.121-2.5-2.5v-365.725c0-1.379 1.122-2.5 2.5-2.5h254.175c1.378 0 2.5 1.121 2.5 2.5v178.725c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-100.035h62.625v175.362c0 1.379-1.122 2.5-2.5 2.5h-60.125v-40.654c0-4.143-3.358-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v149.826c0 1.379-1.122 2.5-2.5 2.5h-190.293c-4.142 0-7.5 3.357-7.5 7.5s3.358 7.5 7.5 7.5h190.293c9.649 0 17.5-7.851 17.5-17.5v-94.172h60.125c9.649 0 17.5-7.851 17.5-17.5v-365.724c0-9.649-7.85-17.5-17.5-17.5z" />
                                        <path
                                            d="m217.385 173.305c-54.237 0-98.362 44.125-98.362 98.361 0 54.237 44.125 98.362 98.362 98.362s98.362-44.125 98.362-98.362c0-54.236-44.125-98.361-98.362-98.361zm83.008 90.861h-26.614c-1.727-34.326-15.147-56.92-28.095-70.908 29.826 10.798 51.773 38.154 54.709 70.908zm-90.508-69.627v69.627h-33.34c2.184-38.692 20.952-59.812 33.34-69.627zm0 84.627v69.63c-12.382-9.809-31.156-30.93-33.34-69.63zm15 69.811v-69.811h33.857c-2.206 39.087-21.349 60.14-33.857 69.811zm0-84.811v-69.812c12.508 9.669 31.651 30.719 33.857 69.812zm-35.258-71.091c-12.901 14.005-26.385 36.683-28.117 71.091h-27.132c2.954-32.95 25.151-60.429 55.249-71.091zm-55.249 86.091h27.132c1.732 34.409 15.216 57.087 28.117 71.092-30.098-10.662-52.295-38.141-55.249-71.092zm111.301 70.911c12.949-13.989 26.372-36.585 28.1-70.911h26.614c-2.936 32.756-24.886 60.114-54.714 70.911z" />
                                        <path
                                            d="m173.577 443.351c-4.142 0-7.5 3.357-7.5 7.5s3.358 7.5 7.5 7.5h87.617c4.142 0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5z" />
                                        <path
                                            d="m288.091 412.589c0-4.143-3.358-7.5-7.5-7.5h-126.411c-4.142 0-7.5 3.357-7.5 7.5s3.358 7.5 7.5 7.5h126.41c4.143 0 7.501-3.358 7.501-7.5z" />
                                    </g>
                                </svg> flight
                            </a>
                        </li>
                        
    </header> -->
    <!--  header end -->