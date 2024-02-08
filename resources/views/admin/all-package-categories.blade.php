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
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header card-header--2">
                                <div>
                                    <h5 class="all-package-heding5">All Package Categories </h5>
                                </div>
                                <form class="d-inline-flex">
                                    <a href="{{ route('add.package.form') }}" class="btn btn-theme"> <i
                                            data-feather="plus-square"></i>Add New
                                    </a>
                                </form>
                            </div>

                            <div class="card-body">
                                <div>
                                    <div class="table-responsive table-desi">
                                        <table class="all-package-catogories table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Category Name</th>
                                                    <th>No. Of Tours</th>
                                                    <th>Total Days</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($packageCategories as $index => $packageCategory)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>{{ $packageCategory->tour_name }}</td>
                                                        <td>{{ $packageCategory->packageCount }}</td>
                                                        <td>{{ $packageCategory->totalDays }} Days</td>
                                                        <td><a href="{{ route('edit.package.category', ['id' => $packageCategory->id]) }}"><i
                                                                    class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        </td>
                                                        {{-- <td><a
                                                                href="{{ route('delete.package.category', ['id' => $packageCategory->id]) }}"><i
                                                                    class="fa fa-trash-o" aria-hidden="true"></i></a></td> --}}
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination-box">
                                <nav class="ms-auto me-auto " aria-label="...">
                                    <ul class="pagination pagination-primary">
                                        <li class="page-item disabled"><a class="page-link" href="javascript:void(0)"
                                                tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">2
                                                <span class="sr-only">(current)</span></a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid end-->
            </div>
        </div>
    </div>
    <!-- Page Body Ends-->
@endsection
