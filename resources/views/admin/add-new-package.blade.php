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
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Add New Package</h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('add.package') }}" method="post"
                                            class="theme-form mega-form" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label-title">Tour Name</label>
                                                <input class="form-control" type="text" name="package_name"
                                                    placeholder="Tour name">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label-title">Tour Places</label>
                                                <input class="form-control" type="text" name="package_place"
                                                    placeholder="Enter Your Location" data-role="tagsinput" />
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label-title">Upload Tour Banner Image here</label>
                                                <input type="file" name="image_path" class="form-control">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label-title">Tour Duration</label>
                                                <input class="form-control" type="number" name="package_duration"
                                                    placeholder="Enter Duration of tour">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label-title">Package Price</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">$</span>
                                                    <input class="form-control" name="package_price" placeholder="$200"
                                                        type="text" aria-label="Amount (to the nearest dollar)">
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="tour-category" class="form-label-title">Tour Category</label>
                                                <select id="tour-category" name="package_category_id"
                                                    class="js-example-basic-single col-sm-12">
                                                    @foreach ($packageCategories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->tour_name }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                            </div>

                                            <div class="card-footer text-end">
                                                <button type="submit" class="btn btn-primary me-3">Submit</button>
                                                <button type="button" class="btn btn-outline-primary">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
        @endsection
