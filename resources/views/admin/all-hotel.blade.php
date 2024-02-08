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

                  <div>
                    <h5>All Hotel</h5>
                  </div>
                  <form class="d-inline-flex">
                    <a href="add-new-hotel.php" class="btn btn-theme"> <i data-feather="plus-square"></i>Add New
                    </a>
                  </form>
                </div>

                <div class="card-body">
                  <div>
                    <div class="all-hotel-table table-responsive table-desi">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>

                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><span><img src="../admin-assets/images/hotel/1.jpg" alt="users"></span>
                            </td>
                            <td><a href="#"><span class="  d-block fw-bold ">Capella Ubud</span><span>
                                  Indonesia</span></a>
                            </td>
                            <td> +304-921-8122</td>
                            <td>KevinAMillett@jourrapide.com</td>

                            <td>
                              <a href="hotel-details"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><span><img src="../admin-assets/images/hotel/2.jpg" alt="users"></span>
                            </td>
                            <td><a href="#"><span class="  d-block fw-bold">Hotel Amparo</span><span>Mexico</span></a>
                            </td>
                            <td> +304-921-8122</td>
                            <td>KevinAMillett@jourrapide.com</td>

                            <td>
                              <a href="hotel-details.php"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><span><img src="../admin-assets/images/hotel/3.jpg" alt="users"></span>
                            </td>
                            <td><a href="#"><span class="  d-block fw-bold">Fogo Island
                                  Inn</span><span>Canada</span></a>
                            </td>
                            <td> +304-921-8122</td>
                            <td>KevinAMillett@jourrapide.com</td>

                            <td>
                              <a href="hotel-details.php"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><span><img src="../admin-assets/images/hotel/4.jpg" alt="users"></span>
                            </td>
                            <td><a href="#"><span class="  d-block fw-bold">The
                                  Ritz-Carlton</span><span>Indonesia</span></a>
                            </td>
                            <td> +304-921-8122</td>
                            <td>KevinAMillett@jourrapide.com</td>

                            <td>
                              <a href="hotel-details.php"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><span><img src="../admin-assets/images/hotel/5.jpg" alt="users"></span>
                            </td>
                            <td><a href="#"><span class="  d-block fw-bold">Waldorf Astoria Maldives
                                </span><span>Ithaafushi</span></a>
                            </td>
                            <td> +304-921-8122</td>
                            <td>KevinAMillett@jourrapide.com</td>

                            <td>
                              <a href="hotel-details.php"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><span><img src="../admin-assets/images/hotel/6.jpg" alt="users"></span>
                            </td>
                            <td><a href="#"><span class="  d-block fw-bold">Secret Bay</span><span> Dominica</span></a>
                            </td>
                            <td> +304-921-8122</td>
                            <td>KevinAMillett@jourrapide.com</td>

                            <td>
                              <a href="hotel-details.php"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><span><img src="../admin-assets/images/hotel/7.jpg" alt="users"></span>
                            </td>
                            <td><a href="#"><span class="  d-block fw-bold">Manoir Hovey</span><span>North Hatley,
                                  Quebec</span></a>
                            </td>
                            <td> +304-921-8122</td>
                            <td>KevinAMillett@jourrapide.com</td>

                            <td>
                              <a href="hotel-details.php"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><span><img src="../admin-assets/images/hotel/8.jpg" alt="users"></span>
                            </td>
                            <td><a href="#"><span class="  d-block fw-bold">Deer Path Inn</span><span>Lake Forest,
                                  Illinois</span></a>
                            </td>
                            <td> +304-921-8122</td>
                            <td>KevinAMillett@jourrapide.com</td>

                            <td>
                              <a href="hotel-details.php"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><span><img src="../admin-assets/images/hotel/9.jpg" alt="users"></span>
                            </td>
                            <td><a href="#"><span class="  d-block fw-bold">The Leela Palace
                                  Udaipur</span><span>India</span></a>
                            </td>
                            <td> +304-921-8122</td>
                            <td>KevinAMillett@jourrapide.com</td>

                            <td>
                              <a href="hotel-details.php"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><span><img src="../admin-assets/images/hotel/10.jpg" alt="users"></span>
                            </td>
                            <td><a href="#"><span class="  d-block fw-bold">Katikies
                                  Santorini</span><span>Greece</span></a>
                            </td>
                            <td> +304-921-8122</td>
                            <td>KevinAMillett@jourrapide.com</td>

                            <td>
                              <a href="hotel-details.php"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><span><img src="../admin-assets/images/hotel/11.jpg" alt="users"></span>
                            </td>
                            <td><a href="#"><span class="  d-block fw-bold">Oyster Box</span><span>Umhlanga Rocks, South
                                  Africa</span></a>
                            </td>
                            <td> +304-921-8122</td>
                            <td>KevinAMillett@jourrapide.com</td>

                            <td>
                              <a href="hotel-details.php"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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