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
                    <div class="col-12">
                        <div class="row">
                            <div class="col-sm-12">
                                <!--Hotel detail start-->
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Add New Hotel</h5>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('add.hotel') }}" class="theme-form mega-form">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label-title">Hotel Name</label>
                                                <input class="form-control" type="text" name="name"
                                                    placeholder="Hotel Name">
                                            </div>

                                            <div class="mb-3">
                                                <label for="hotel-category" class="form-label-title ">Hotel Category</label>
                                                <select id="hotel-category" name="category_id"
                                                    class="form-control js-example-basic-single col-sm-12">
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->hotel_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label-title  ">Facility</label>
                                                <input class="form-control" type="text" name="tags"
                                                    value="pfTag1,pfTag2,pfTag3" data-role="tagsinput" />
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label-title  ">Address</label>
                                                <input type="text" placeholder="Address" class="form-control" />
                                            </div>

                                            <div class="row g-3">

                                                <div class="col-sm-6">
                                                    <select name="country_id" id="country_id" class="select form-control">
                                                        <option disabled selected value="">Country</option>
                                                        @foreach ($countries as $country)
                                                            <option value="{{ $country->id }}">{{ $country->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                </div>

                                                <div class="col-sm-6">
                                                    <select name="state_id" class="select form-control">
                                                        <option disabled selected value="">State</option>
                                                        <!-- States will be populated based on the selected country via JavaScript -->
                                                    </select>
                                                </div>


                                                <div class="col-sm-6">
                                                    <select class="select form-control">
                                                        <option disabled selected value="">City</option>
                                                        <option value="2">Vienna</option>
                                                        <option value="3"> Nassau</option>
                                                        <option value="4"> Manama</option>
                                                    </select>
                                                </div>

                                                <div class="col-sm-6">
                                                    <input type="text" placeholder="Zip" id="form3Example3"
                                                        class="form-control" />
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label-title mt-4">Contact Number</label>
                                                <input class="form-control" type="Number" placeholder="Contact Number">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label-title "> Email Address</label>
                                                <input class="form-control" type="email" placeholder=" Email address">
                                            </div>
                                            <div class="row">

                                                <div class="col-6">
                                                    <label class="form-label-title ">Check In</label>
                                                    <div class="input-group date" id="CheckIn"
                                                        data-target-input="nearest">
                                                        <input class="form-control datetimepicker-input digits"
                                                            type="text" data-target="#CheckIn">
                                                        <div class="input-group-text" data-target="#CheckIn"
                                                            data-toggle="datetimepicker"><i class="fa fa-clock-o"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <label class="form-label-title ">Check Out</label>
                                                    <div class="input-group date" id="CheckOut"
                                                        data-target-input="nearest">
                                                        <input class="form-control datetimepicker-input digits"
                                                            type="text" data-target="#CheckOut">
                                                        <div class="input-group-text" data-target="#CheckOut"
                                                            data-toggle="datetimepicker"><i class="fa fa-clock-o"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="card-footer text-end">
                                        <button class="btn btn-primary me-3">Submit</button>
                                        <button class="btn btn-outline-primary">Cancel</button>
                                    </div>

                                </div>
                                <!--Hotel detail end-->
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

            <script>
                $(document).ready(function() {
                    $("#country_id").on('change', function() {
                        var country = $(this).val();
                        $.ajax({
                            url: "{{ route('add.new.hotel') }}", // Update the URL to match the route name
                            type: "GET",
                            data: {
                                'country': country
                            },
                            success: function(data) {
                                var states = data.states;
                                var html = '<option disabled selected value="">State</option>';
                                if (states.length > 0) {
                                    $.each(states, function(key, value) {
                                        html += '<option value="' + value.id + '">' + value
                                            .name + '</option>';
                                    });
                                }
                                $("#state_id").html(html); // Update the state select input
                            }
                        });
                    });
                });
            </script>


            <!-- Container-fluid Ends-->
        @endsection
