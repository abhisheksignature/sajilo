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
                    <h5 class="all-package-heding5">All Hotel Categories </h5>
                  </div>
                  <form class="d-inline-flex">
                    <a href="add-hotel-category.php" class="btn btn-theme"> <i data-feather="plus-square"></i>Add New
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
                            <th>No. places</th>
                            <th>Total Days</th>
                            <th>Edit</th>

                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Business Travel</td>
                            <td>10</td>
                            <td>35 Days</td>
                            <td><a href="javascript:void(0)"><i class="fa fa-pencil-square-o"
                                  aria-hidden="true"></i></a>
                            </td>
                            <td><a href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>The Impromptu Trip</td>
                            <td>9</td>
                            <td>25 Days</td>
                            <td><a href="javascript:void(0)"><i class="fa fa-pencil-square-o"
                                  aria-hidden="true"></i></a>
                            </td>
                            <td><a href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td> Family Vacation</td>
                            <td>5</td>
                            <td>10 Days</td>
                            <td><a href="javascript:void(0)"><i class="fa fa-pencil-square-o"
                                  aria-hidden="true"></i></a>
                            </td>
                            <td><a href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>Long-Term Slow Trip</td>
                            <td>12</td>
                            <td>16 Days</td>
                            <td><a href="javascript:void(0)"><i class="fa fa-pencil-square-o"
                                  aria-hidden="true"></i></a>
                            </td>
                            <td><a href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td>Package Name Here</td>
                            <td>7</td>
                            <td>15 Days</td>
                            <td><a href="javascript:void(0)"><i class="fa fa-pencil-square-o"
                                  aria-hidden="true"></i></a>
                            </td>
                            <td><a href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>6</td>
                            <td> Group Travel</td>
                            <td>15</td>
                            <td>30 Days</td>
                            <td><a href="javascript:void(0)"><i class="fa fa-pencil-square-o"
                                  aria-hidden="true"></i></a>
                            </td>
                            <td><a href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>7</td>
                            <td>Luxury Travel</td>
                            <td>17</td>
                            <td>40 Days</td>
                            <td><a href="javascript:void(0)"><i class="fa fa-pencil-square-o"
                                  aria-hidden="true"></i></a>
                            </td>
                            <td><a href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>8</td>
                            <td> Volunteer Travel</td>
                            <td>12</td>
                            <td>14 Days</td>
                            <td><a href="javascript:void(0)"><i class="fa fa-pencil-square-o"
                                  aria-hidden="true"></i></a>
                            </td>
                            <td><a href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>9</td>
                            <td> No Destination Travel</td>
                            <td>9</td>
                            <td>8 Days</td>
                            <td><a href="javascript:void(0)"><i class="fa fa-pencil-square-o"
                                  aria-hidden="true"></i></a>
                            </td>
                            <td><a href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>10</td>
                            <td>Adventure Travel
                            </td>
                            <td>20</td>
                            <td>40 Days</td>
                            <td><a href="javascript:void(0)"><i class="fa fa-pencil-square-o"
                                  aria-hidden="true"></i></a>
                            </td>
                            <td><a href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
          <!-- Container-fluid end-->

        </div>

@endsection