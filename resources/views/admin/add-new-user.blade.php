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

            <div class="col-12">
              <div class="row">
                <div class="col-sm-12">
                  <div class="card">
                    <div class="card-header">
                      <h5>Add New User</h5>
                    </div>
                    <div class="card-body">
                      <form class="theme-form mega-form">

                        <div class="mb-3">
                          <label class="form-label-title ">User Name</label>
                          <input class="form-control" type="text" placeholder="User Name">
                        </div>
                        <div class="mb-3">
                          <label class="form-label-title ">Email Address</label>
                          <input class="form-control" type="email" placeholder="Email Address">
                        </div>
                        <div class="mb-3">
                          <label class="form-label-title ">Contact Number</label>
                          <input class="form-control" type="Number" placeholder="Contact number">
                        </div>

                        <div class="mb-3">
                          <label class="form-label-title ">Company Name</label>
                          <input class="form-control" type="text" placeholder="Company Name">
                        </div>
                        <div class="mb-3">
                          <label class="form-label-title ">Website</label>
                          <input class="form-control" type="text" placeholder="Website">
                        </div>

                        <div class="mb-3">
                          <label class="form-label-title ">Upload item Image here
                          </label>
                          <div class="dropzone" id="singleFileUpload">
                            <div class="dz-message needsclick"><i class="icon-cloud-up"></i>
                              <h6>Drop files here or click to upload.</h6><span class="note needsclick">(This is just a
                                demo dropzone. Selected files are <strong>not</strong>
                                actually uploaded.)</span>
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
                </div>

              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid Ends-->
@endsection