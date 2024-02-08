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
                        <h5>Personal Information</h5>
                    </div>
                    <div class="card-body">
                        <form class="theme-form mega-form" method="post" action="{{ route('admin.profile.update') }}"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="personal-info">
                                <div class="personal-info__img">
                                    <img src="admin-assets/images/users/4.jpg" alt="user4">
                                </div>
                                <div class="personal-info__uplode">
                                    <p>Max file size is 5MB, Minimum dimension 150x150 And Suitable files are .jpg & .png
                                    </p>
                                    <div class="uplode-img">
                                        <input type="file" id="img" name="image_path" accept="image/*">
                                        <label for="img"><i data-feather="upload"></i> Upload Image here</label>
                                    </div>
                                    <button class="btn btn-primary btn--hover" type="submit">Remove image</button>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="form-label-title mt-3">First Name</label>
                                    <input class="form-control" type="text" name="first_name" placeholder="First Name">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label-title mt-3">Last Name</label>
                                    <input class="form-control" type="text" name="last_name" placeholder="Last Name">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label-title mt-3">Email Address</label>
                                    <input class="form-control" type="email" name="email" placeholder="Email Address">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label-title mt-3">Contact Number</label>
                                    <input class="form-control" type="number" name="phone_number"
                                        placeholder="Contact Number">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label-title mt-3">Date of Birth</label>
                                    <div class="input-group date" id="dt-date" data-target-input="nearest">
                                        <div class="input-group">
                                            <input class="datepicker-here form-control digits" type="text"
                                                data-language="en" data-target="#dt-date" name="date_of_birth">
                                            <div class="input-group-text" data-target="#dt-date"
                                                data-toggle="datetimepicker"><i class="fa fa-calendar"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label-title mt-3">Address</label>
                                    <input class="form-control" type="text" name="address" placeholder="Address">
                                </div>
                            </div>
                            <button class="btn btn-primary mt-3" type="submit">Save Change</button>
                        </form>
                    </div>
                     <!-- ... Your existing code for Change Email and Change Password sections ... -->
                <!-- ... Your existing code ... -->
                <div class="col-sm-6">
                    <div class="card-header">
                        <h5>Change Email</h5>
                    </div>
                    <div class="card-body">
                        <form class="theme-form mega-form" method="post" action="{{ route('admin.profile.update') }}">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label-title">Current Email</label>
                                <input class="form-control" type="email" name="old_email"
                                    placeholder="Current Email Address">
                            </div>

                            <div class="mb-3">
                                <label class="form-label-title">New Email</label>
                                <input class="form-control" type="email" name="email" placeholder="New Email address">
                            </div>

                            <div class="mb-3">
                                <label class="form-label-title">New Email Again</label>
                                <input class="form-control" type="email" name="email_confirmation"
                                    placeholder="New Again Email address">
                            </div>

                            <button class="btn btn-primary" type="submit">Change Email</button>
                        </form>
                    </div>
                </div>
                <!-- ... Your existing code ... -->

                <div class="col-sm-6">
                    <div class="card-header">
                        <h5>Change Password</h5>
                    </div>
                    <div class="card-body">
                        <form class="theme-form mega-form" method="post" action="{{ route('admin.profile.update') }}">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label-title">Current Password</label>
                                <input class="form-control" type="password" name="old_password"
                                    placeholder="Current Password">
                            </div>

                            <div class="mb-3">
                                <label class="form-label-title">New Password</label>
                                <input class="form-control" type="password" name="password" placeholder="New Password">
                            </div>

                            <div class="mb-3">
                                <label class="form-label-title">New Password Again</label>
                                <input class="form-control" type="password" name="password_confirmation"
                                    placeholder="New Again Password">
                            </div>

                            <button class="btn btn-primary" type="submit">Change Password</button>
                        </form>
                    </div>
                </div>
                </div>

               
                <!-- ... Your existing code ... -->


            </div>
            <!-- Container-fluid Ends-->
        </div>
    </div>
@endsection
