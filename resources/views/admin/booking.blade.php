@extends('admin.layouts.main')

@section ('main-container')
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
                <div class="card-header  card-header--2">

                  <h5>All Bookings</h5>


                </div>

                <div class="card-body">
                  <div>
                    <div class="table-responsive table-desi">
                      <table class="Booking-table table table-striped">
                        <thead>
                          <tr>
                            <th>Type</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Order Date</th>

                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><i class="fa fa-plane"> </i>
                            </td>
                            <td><a href="#"><span class="d-block ">Dubai To Paris</span></a>
                            </td>
                            <td>$2500</td>
                            <td> 20 Oct, 2020</td>


                            <td>
                              <span class="status status--past">Past</span>
                            </td>

                            <td>

                              <div data-bs-toggle="tooltip" data-bs-placement="left" title="cancel">
                                <i data-feather="x"></i>
                              </div>

                            </td>
                          </tr>
                          <tr>
                            <td><i class="fa fa-building"> </i>
                            </td>
                            <td><a href="#"><span class="  d-block">Sea View Hotel</span></a>
                            </td>
                            <td>$2500</td>
                            <td> 20 Oct, 2020</td>


                            <td>
                              <span class="status status--cancel">Cancelled</span>
                            </td>

                            <td>
                              <div data-bs-toggle="tooltip" data-bs-placement="left" title="cancel">
                                <i data-feather="x"></i>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td><i class="fa fa-car"> </i>
                            </td>
                            <td><a href="#"><span class="  d-block">Paris To Toulouse</span></a>
                            </td>
                            <td>$2500</td>
                            <td> 20 Oct, 2020</td>


                            <td>
                              <span class="status status--upcoming">Upcoming</span>
                            </td>

                            <td>
                              <div data-bs-toggle="tooltip" data-bs-placement="left" title="cancel">
                                <i data-feather="x"></i>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td><i class="fa fa-plane"> </i>
                            </td>
                            <td><a href="#"><span class="  d-block">Dubai To Paris</span></a>
                            </td>
                            <td>$2500</td>
                            <td> 20 Oct, 2020</td>


                            <td>
                              <span class="status status--upcoming">Upcoming</span>

                            </td>

                            <td>
                              <div data-bs-toggle="tooltip" data-bs-placement="left" title="cancel">
                                <i data-feather="x"></i>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td><i class="fa fa-building"> </i>
                            </td>
                            <td><a href="#"><span class="  d-block">Sea View Hotel</span></a>
                            </td>
                            <td>$2500</td>
                            <td> 20 Oct, 2020</td>


                            <td>
                              <span class="status status--past">Past</span>
                            </td>

                            <td>
                              <div data-bs-toggle="tooltip" data-bs-placement="left" title="cancel">
                                <i data-feather="x"></i>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td><i class="fa fa-car"> </i>
                            </td>
                            <td><a href="#"><span class="  d-block">Paris To Toulouse</span></a>
                            </td>
                            <td>$2500</td>
                            <td> 20 Oct, 2020</td>


                            <td>
                              <span class="status status--cancel">Cancelled</span>
                            </td>

                            <td>
                              <div data-bs-toggle="tooltip" data-bs-placement="left" title="cancel">
                                <i data-feather="x"></i>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td><i class="fa fa-plane"> </i>
                            </td>
                            <td><a href="#"><span class="  d-block">Dubai To Paris</span></a>
                            </td>
                            <td>$2500</td>
                            <td> 20 Oct, 2020</td>


                            <td>
                              <span class="status status--past">Past</span>
                            </td>

                            <td>
                              <div data-bs-toggle="tooltip" data-bs-placement="left" title="cancel">
                                <i data-feather="x"></i>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td><i class="fa fa-building"> </i>
                            </td>
                            <td><a href="#"><span class="  d-block">Sea View Hotel</span></a>
                            </td>
                            <td>$2500</td>
                            <td> 20 Oct, 2020</td>


                            <td>
                              <span class="status status--upcoming">Upcoming</span>

                            </td>

                            <td>
                              <div data-bs-toggle="tooltip" data-bs-placement="left" title="cancel">
                                <i data-feather="x"></i>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td><i class="fa fa-car"> </i>
                            </td>
                            <td><a href="#"><span class=" d-block">Paris To Toulouse</span></a>
                            </td>
                            <td>$2500</td>
                            <td> 20 Oct, 2020</td>


                            <td>
                              <span class="status status--cancel">Cancelled</span>
                            </td>

                            <td>
                              <div data-bs-toggle="tooltip" data-bs-placement="left" title="cancel">
                                <i data-feather="x"></i>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td><i class="fa fa-plane"> </i>
                            </td>
                            <td><a href="#"><span class="  d-block">Dubai To Paris</span></a>
                            </td>
                            <td>$2500</td>
                            <td> 20 Oct, 2020</td>


                            <td>
                              <span class="status status--past">Past</span>

                            </td>

                            <td>
                              <div data-bs-toggle="tooltip" data-bs-placement="left" title="cancel">
                                <i data-feather="x"></i>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td><i class="fa fa-building"> </i>
                            </td>
                            <td><a href="#"><span class="  d-block">Sea View Hotel</span></a>
                            </td>
                            <td>$2500</td>
                            <td> 20 Oct, 2020</td>


                            <td>
                              <span class="status status--cancel">Cancelled</span>
                            </td>

                            <td>
                              <div data-bs-toggle="tooltip" data-bs-placement="left" title="cancel">
                                <i data-feather="x"></i>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
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

          </div>
        </div>
        <!-- Container-fluid Ends-->
@endsection