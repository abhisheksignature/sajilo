@extends('admin.layouts.main')

@section ('main-container')
        <!-- Page Body Start-->
        <div class="page-body-wrapper">


            <!-- Page Sidebar Start-->
            @include('admin.layouts.sidebar')
            <!-- Page Sidebar Ends-->

            
            <div class="page-body">


                <!--room detail start-->
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Add Room Details</h5>
                                        </div>
                                        <div class="card-body">
                                            <form class="theme-form mega-form">

                                            <div class="mb-3">
                                                    <label class="form-label-title ">Hotel</label>
                                                    <select class="form-control js-example-basic-single col-sm-12">

                                                        <option value="SI"> abc hotel</option>
                                                        <option value="DO">xyz hotel</option>
                                                        <option value="SI"> abc hotel</option>
                                                        <option value="DO">xyz hotel</option>
                                                        <option value="SI"> abc hotel</option>
                                                        <option value="DO">xyz hotel</option>
                                                        <option value="SI"> abc hotel</option>
                                                        <option value="DO">xyz hotel</option>

                                                    </select>
                                            </div>

                                                <!-- <div class="mb-3">
                                                    <label class="form-label-title ">Room Category</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">Add
                                                        </span>
                                                        <input class="form-control" placeholder="Add room category" type="text"
                                                            aria-label="">
                                                    </div>
                                                </div> -->


                                                <div class="mb-3">
                                                    <label class="form-label-title ">Room Category</label>
                                                    <select class="form-control js-example-basic-single col-sm-12">


                                                        <option value="SI"> Single Room</option>
                                                        <option value="DO">Double Room</option>
                                                        <option value="TR">Triple Room</option>
                                                        <option value="QU"> Quad Room</option>
                                                        <option value="QU">Queen Room</option>
                                                        <option value="KI"> King Room</option>
                                                        <option value="TW">Twin Room</option>
                                                        <option value="HO">Hollywood Twin Room</option>
                                                        <option value="MI">Mini Suite</option>


                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label-title ">Room Price</label>
                                                    <div class="input-group mb-3"><span class="input-group-text">$
                                                        </span>
                                                        <input class="form-control" placeholder="200" type="text"
                                                            aria-label="Amount (to the nearest dollar)">
                                                    </div>
                                                </div>

                                                <div class="animate-chk">


                                                    <div class="row g-2">
                                                        <div class=" col-xl-12 col-xxl-6 ">
                                                            <label class="form-label-title ">Room Inclusion</label>
                                                            <div class="row g-3">
                                                                <div class=" col-xs-12 col-sm-6">
                                                                    <label class="d-block" for="Inclusion1">
                                                                        <input class="checkbox_animated" id="Inclusion1"
                                                                            type="checkbox" checked="">Wi-Fi
                                                                    </label>
                                                                    <label class="d-block" for="Inclusion2">
                                                                        <input class="checkbox_animated" id="Inclusion2"
                                                                            type="checkbox">USB charger ports
                                                                    </label>
                                                                    <label class="d-block" for="Inclusion3">
                                                                        <input class="checkbox_animated" id="Inclusion3"
                                                                            type="checkbox" checked=""> Smart TV
                                                                    </label>
                                                                    <label class="d-block" for="Inclusion4">
                                                                        <input class="checkbox_animated" id="Inclusion4"
                                                                            type="checkbox"> In-room coffee machine

                                                                    </label>
                                                                </div>
                                                                <div class=" col-xs-12 col-sm-6">
                                                                    <label class="d-block" for="Inclusion5">
                                                                        <input class="checkbox_animated" id="Inclusion5"
                                                                            type="checkbox" checked=""> Keyless entry
                                                                        system
                                                                    </label>
                                                                    <label class="d-block" for="Inclusion6">
                                                                        <input class="checkbox_animated" id="Inclusion6"
                                                                            type="checkbox"> Welcome Gift
                                                                    </label>
                                                                    <label class="d-block" for="Inclusion7">
                                                                        <input class="checkbox_animated" id="Inclusion7"
                                                                            type="checkbox" checked=""> Option 5
                                                                    </label>
                                                                    <label class="d-block" for="Inclusion8">
                                                                        <input class="checkbox_animated" id="Inclusion8"
                                                                            type="checkbox"> Option 6
                                                                    </label>
                                                                </div>
                                                            </div>


                                                        </div>

                                                        <div class=" col-xl-12 col-xxl-6 ">
                                                            <label class="form-label-title ">Room Amenities</label>
                                                            <div class="row g-3">
                                                                <div class=" col-xs-12 col-sm-6">
                                                                    <label class="d-block" for="Amenities1">
                                                                        <input class="checkbox_animated" id="Amenities1"
                                                                            type="checkbox" checked="">Fitness center
                                                                    </label>
                                                                    <label class="d-block" for="Amenities2">
                                                                        <input class="checkbox_animated" id="Amenities2"
                                                                            type="checkbox"> Parking
                                                                    </label>
                                                                    <label class="d-block" for="Amenities3">
                                                                        <input class="checkbox_animated" id="Amenities3"
                                                                            type="checkbox" checked="">Secure access
                                                                        building
                                                                    </label>
                                                                    <label class="d-block" for="Amenities4">
                                                                        <input class="checkbox_animated" id="Amenities4"
                                                                            type="checkbox"> BBQ area
                                                                    </label>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-6">
                                                                    <label class="d-block" for="Amenities5">
                                                                        <input class="checkbox_animated" id="Amenities5"
                                                                            type="checkbox" checked=""> Pet friendly
                                                                    </label>
                                                                    <label class="d-block" for="Amenities6">
                                                                        <input class="checkbox_animated" id="Amenities6"
                                                                            type="checkbox"> Option 5
                                                                    </label>
                                                                    <label class="d-block" for="Amenities7">
                                                                        <input class="checkbox_animated" id="Amenities7"
                                                                            type="checkbox" checked=""> Option 5
                                                                    </label>
                                                                    <label class="d-block" for="Amenities8">
                                                                        <input class="checkbox_animated" id="Amenities8"
                                                                            type="checkbox"> Option 6
                                                                    </label>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label-title mt-4">Upload Room Image
                                                            here </label>


                                                        <div class="dropzone" id="singleFileUpload">
                                                            <div class="dz-message needsclick"><i
                                                                    class="icon-cloud-up"></i>
                                                                <h6>Drop files here or click to upload.</h6><span
                                                                    class="note needsclick">(This is just a
                                                                    demo dropzone. Selected files are
                                                                    <strong>not</strong> actually uploaded.)</span>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <label class="form-label-title ">Room
                                                        Description</label>
                                                    <textarea id="editor1" name="editor1" cols="30" rows="10">
                                                    </textarea>
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
                <!--room detail end-->
@endsection