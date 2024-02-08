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
                    <h5>All Users</h5>
                  </div>

                  <form class="d-inline-flex">
                    <a href="add-user" class="align-items-center btn btn-theme"> <i
                        data-feather="plus-square"></i>Add New
                    </a>
                  </form>

                </div>

                <div class="card-body">
                  <div>
                    <div class="table-responsive table-desi">
                      <table class="user-table table table-striped">
                        <thead>
                          <tr>
                            <th>User</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Country</th>
                            <th>Listings</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><span><img src="admin-assets/images/users/1.jpg" alt="users"></span>
                            </td>
                            <td><a href="#"><span class="d-block ">Everett C. Green</span><span>Essex Court</span></a>
                            </td>
                            <td> +802-370-2430</td>
                            <td>
                              EverettCGreen@rhyta.com</td>
                            <td class="font-primary">America</td>
                            <td>
                              <span>02</span>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><span><img src="admin-assets/images/users/2.jpg" alt="users"></span>
                            </td>
                            <td><a href="#"><span class="  d-block">Caroline L. Harris</span><span>Davis Lane</span></a>
                            </td>
                            <td> +
                              720-276-9403</td>
                            <td>CarolineLHarris@rhyta.com</td>
                            <td class="font-primary">Denver</td>
                            <td>
                              <span>02</span>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><span><img src="admin-assets/images/users/3.jpg" alt="users"></span>
                            </td>
                            <td><a href="#"><span class="  d-block">lucy j. Morile</span><span>Clifton</span></a>
                            </td>
                            <td> +351-756-654</td>
                            <td>LucyMorile456@gmail.com</td>
                            <td class="font-primary">Clifton</td>
                            <td>
                              <span>02</span>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><span><img src="admin-assets/images/users/4.jpg" alt="users"></span>
                            </td>
                            <td><a href="#"><span class="  d-block"> Jennifer A.
                                  Straight</span><span>Brunswick</span></a>
                            </td>
                            <td> +912-265-1550</td>
                            <td>JenniferAStraight@rhyta.com</td>
                            <td class="font-primary">Austin Avenue</td>
                            <td>
                              <span>02</span>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><span><img src="admin-assets/images/users/5.jpg" alt="users"></span>
                            </td>
                            <td><a href="#"><span class="  d-block">Louise J. Stiles</span><span>Indianapolis</span></a>
                            </td>
                            <td> +304-921-8122</td>
                            <td>KevinAMillett@jourrapide.com</td>
                            <td class="font-primary"> Barfield Lane</td>
                            <td>
                              <span>02</span>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><span><img src="admin-assets/images/users/6.jpg" alt="users"></span>
                            </td>
                            <td><a href="#"><span class="  d-block">Scott T. Thomas</span><span>Kotzebue</span></a>
                            </td>
                            <td> +907-442-8122</td>
                            <td>czxc@packiu.com</td>
                            <td class="font-primary">Blackwell Street</td>
                            <td>
                              <span>02</span>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><span><img src="admin-assets/images/users/7.jpg" alt="users"></span>
                            </td>
                            <td><a href="#"><span class="  d-block">Ricky M. Gaynor</span><span>Coleraine</span></a>
                            </td>
                            <td> +218-244-7026</td>
                            <td>KevinAMillett@jourrapide.com</td>
                            <td class="font-primary">Coleraine</td>
                            <td>
                              <span>02</span>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><span><img src="admin-assets/images/users/8.jpg" alt="users"></span>
                            </td>
                            <td><a href="#"><span class="  d-block">Dillon J. Bradshaw</span><span>Redbud
                                  Drive</span></a>
                            </td>
                            <td> +
                              347-649-7283</td>
                            <td>DillonJBradshaw@teleworm.us</td>
                            <td class="font-primary">Long Island City</td>
                            <td>
                              <span>02</span>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><span><img src="admin-assets/images/users/9.jpg" alt="users"></span>
                            </td>
                            <td><a href="#"><span class="  d-block">Lorna M. Bonner</span><span> Broadway
                                  Street</span></a>
                            </td>
                            <td> +843-765-6166</td>
                            <td>LornaMBonner@teleworm.us</td>
                            <td class="font-primary">Florence</td>
                            <td>
                              <span>02</span>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><span><img src="admin-assets/images/users/10.jpg" alt="users"></span>
                            </td>
                            <td><a href="#"><span class="  d-block">Richard A. Johnson</span><span>Garrett
                                  Street</span></a>
                            </td>
                            <td> +
                              267-948-4207</td>
                            <td>RichardAJohnson@rhyta.com</td>
                            <td class="font-primary">Philadelphia</td>
                            <td>
                              <span>02</span>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td><span><img src="admin-assets/images/users/11.jpg" alt="users"></span>
                            </td>
                            <td><a href="#"><span class="  d-block">Lorraine D. McDowell</span><span> Woodland
                                  Terrace</span></a>
                            </td>
                            <td> +916-942-7555</td>
                            <td>
                              LorraineDMcDowell@dayrep.com</td>
                            <td class="font-primary">Fair Oaks</td>
                            <td>
                              <span>02</span>
                            </td>
                            <td>
                              <a href="javascript:void(0)"><i class="fa fa-eye" aria-hidden="true"></i></a>
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