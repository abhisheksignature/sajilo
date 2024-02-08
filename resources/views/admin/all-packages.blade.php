@extends('admin.layouts.main')

@section('main-container')
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
                            <div class="card-header  card-header--2">
                                <div>
                                    <h5>All Packages</h5>
                                </div>
                                <form class="d-inline-flex">
                                    <a href="{{ route('add.package') }}" class="btn btn-theme">
                                        <i data-feather="plus-square"></i>Add New
                                    </a>
                                </form>
                            </div>

                            <div class="card-body">
                                <div>
                                    <div class="table-responsive table-desi">
                                        <table class="table table-striped all-package">
                                            <thead>
                                                <tr>
                                                    <th>Tour Image</th>
                                                    <th>Tour Name</th>
                                                    <th>Price</th>
                                                    <th>No. Of Days</th>
                                                    <th>View</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($packages as $package)
                                                    <tr>
                                                        <td><span><img src="{{ asset('storage/' . $package->image_path) }}"
                                                                    alt="Tour Image"></span>
                                                        </td>
                                                        <td><a href="#">{{ $package->package_name }}</a></td>
                                                        <td>${{ $package->package_price }}</td>
                                                        <td>{{ $package->package_duration }} days</td>
                                                        <td>
                                                            <a href="{{ route('package.detail', ['id' => $package->id]) }}">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('package.detail', ['id' => $package->id]) }}">
                                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('package.delete', ['id' => $package->id]) }}">
                                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="pagination-box">
                                {{ $packages->links() }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
