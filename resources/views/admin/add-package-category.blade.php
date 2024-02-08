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
                                        <h5>Add New Package Category</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="theme-form mega-form">
                                            <form action="{{ route('add.package.category') }}" method="post"
                                                enctype="multipart/form-data" id="packageForm">
                                                @csrf
                                                <div class="mb-3">
                                                    <label class="form-label-title">Tour Name</label>
                                                    <input class="form-control" type="text" name="tour_name"
                                                        placeholder="Tour name">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label-title">Tour Places</label>
                                                    <input class="form-control" type="text" name="tour_place" value="london"
                                                        data-role="tagsinput" />
                                                </div>

                                                <label class="form-label-title">Tour package Description</label>
                                                <textarea id="editor1" name="tour_description" cols="30"
                                                    rows="10"></textarea>

                                                {{-- <div class="mb-3">
                                                    <label class="form-label-title">Image</label>
                                                    <input class="form-control" type="file" name="image_path">
                                                </div> --}}

                                                <div class="card-footer text-end">
                                                    <button class="btn btn-primary me-3" type="submit">Submit</button>
                                                    <button class="btn btn-outline-primary" type="button"
                                                        onclick="cancelForm()">Cancel</button>
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
    </div>

    <script>
        function cancelForm() {
            // Reset the form fields
            document.getElementById('packageForm').reset();
        }
    </script>
@endsection
