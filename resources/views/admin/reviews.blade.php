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
                <div class="card">
                    <div class="card-header">
                        <h5>Reviews</h5>
                    </div>
                    <div class="card-body">

                        <div class="review-users">
                            <div class="review-users__img">
                                <img src="admin-assets/images/users/1.png" alt="review 1">
                            </div>
                            <div class="review-users__detail ">
                                <div class="review-users__box">
                                    <h5>jonash </h5>
                                    <span>4 review</span>
                                </div>
                                <div class="star-box mt-3 ">
                                    <span><i data-feather="star"></i></span>
                                    <span><i data-feather="star"></i></span>
                                    <span><i data-feather="star"></i></span>
                                    <span><i data-feather="star"></i></span>
                                    <span><i data-feather="star"></i></span>
                                    <p class="ms-3">7 months ago</p>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores commodi harum
                                    perspiciatis earum
                                    possimus, laudantium architecto ad dolorem iusto repudiandae similique quam assumenda
                                    repellendus
                                    accusantium ducimus rerum consequatur fugit autem?</p>
                            </div>
                        </div>

                        <div class="review-users">
                            <div class="review-users__img">
                                <img src="admin-assets/images/users/2.png" alt="review 1">
                            </div>
                            <div class="review-users__detail ">
                                <div class="review-users__box">
                                    <h5>jonash </h5>
                                    <span>4 review</span>
                                </div>
                                <div class="star-box mt-3">
                                    <span><i data-feather="star"></i></span>
                                    <span><i data-feather="star"></i></span>
                                    <span><i data-feather="star"></i></span>
                                    <span><i data-feather="star"></i></span>
                                    <span><i data-feather="star"></i></span>
                                    <p class="ms-3">7 months ago</p>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores commodi harum
                                    perspiciatis earum
                                    possimus, laudantium architecto ad dolorem iusto repudiandae similique quam assumenda
                                    repellendus
                                    accusantium ducimus rerum consequatur fugit autem?</p>
                            </div>
                        </div>

                        <div class="review-users">
                            <div class="review-users__img">
                                <img src="admin-assets/images/users/3.png" alt="review 1">
                            </div>
                            <div class="review-users__detail ">
                                <div class="review-users__box">
                                    <h5>jonash </h5>
                                    <span>4 review</span>
                                </div>
                                <div class="star-box mt-3">
                                    <span><i data-feather="star"></i></span>
                                    <span><i data-feather="star"></i></span>
                                    <span><i data-feather="star"></i></span>
                                    <span><i data-feather="star"></i></span>
                                    <span><i data-feather="star"></i></span>
                                    <p class="ms-3">7 months ago</p>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores commodi harum
                                    perspiciatis earum
                                    possimus, laudantium architecto ad dolorem iusto repudiandae similique quam assumenda
                                    repellendus
                                    accusantium ducimus rerum consequatur fugit autem?</p>
                            </div>
                        </div>

                        <div class="review-users">
                            <div class="review-users__img">
                                <img src="admin-assets/images/users/4.png" alt="review 1">
                            </div>
                            <div class="review-users__detail ">
                                <div class="review-users__box">
                                    <h5>jonash </h5>
                                    <span>4 review</span>
                                </div>
                                <div class="star-box mt-3">
                                    <span><i data-feather="star"></i></span>
                                    <span><i data-feather="star"></i></span>
                                    <span><i data-feather="star"></i></span>
                                    <span><i data-feather="star"></i></span>
                                    <span><i data-feather="star"></i></span>
                                    <p class="ms-3">7 months ago</p>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores commodi harum
                                    perspiciatis earum
                                    possimus, laudantium architecto ad dolorem iusto repudiandae similique quam assumenda
                                    repellendus
                                    accusantium ducimus rerum consequatur fugit autem?</p>
                            </div>
                        </div>

                        <div class="review-users">
                            <div class="review-users__img">
                                <img src="admin-assets/images/users/5.png" alt="review 1">
                            </div>
                            <div class="review-users__detail ">
                                <div class="review-users__box">
                                    <h5>jonash </h5>
                                    <span>4 review</span>
                                </div>
                                <div class="star-box mt-3">
                                    <span><i data-feather="star"></i></span>
                                    <span><i data-feather="star"></i></span>
                                    <span><i data-feather="star"></i></span>
                                    <span><i data-feather="star"></i></span>
                                    <span><i data-feather="star"></i></span>
                                    <p class="ms-3">7 months ago</p>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores commodi harum
                                    perspiciatis earum
                                    possimus, laudantium architecto ad dolorem iusto repudiandae similique quam assumenda
                                    repellendus
                                    accusantium ducimus rerum consequatur fugit autem?</p>
                            </div>
                        </div>

                    </div>

                    <div class=" pagination-box">
                        <nav class="ms-auto me-auto " aria-label="...">
                            <ul class="pagination pagination-primary">
                                <li class="page-item disabled"><a class="page-link" href="javascript:void(0)"
                                        tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0)">2 <span
                                            class="sr-only">(current)</span></a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
            <!-- Container-fluid Ends-->
        @endsection
