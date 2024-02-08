<div class="container-fluid">
                    <!-- footer start-->
                    <footer class="footer">

                        <div class="row">
                            <div class="col-md-12 footer-copyright text-center">
                                <p class="mb-0">Copyright 2021 © Rica theme by pixelstrap </p>
                            </div>
                        </div>

                    </footer>
                </div>
            </div>
        </div>

    </div>
    <!-- Modal -->
    <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="modal-title" id="staticBackdropLabel">Logging Out</h5>
                    <p>Are you sure you want to log out?</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="button-box">
                        <button type="button" class="btn btn--no " data-bs-dismiss="modal">No</button>
                        <button type="button" class="btn  btn--yes btn-primary">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="customizer-links"></div> -->

    <!-- latest jquery-->
    <script src="admin-assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="admin-assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="admin-assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="admin-assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="admin-assets/js/scrollbar/simplebar.js"></script>
    <script src="admin-assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="admin-assets/js/config.js"></script>


    <!-- tooltip init js  start-->
    <script src="admin-assets/js/tooltip-init.js"></script>
    <!-- tooltip init js  end-->

    <!-- slick js start -->
    <script src="admin-assets/js/slick.js"></script>
    <!-- slick js end -->

    <!-- Plugins JS start-->
    <script src="admin-assets/js/sidebar-menu.js"></script>
    <script src="admin-assets/js/notify/bootstrap-notify.min.js"></script>


    <script src="admin-assets/js/notify/index.js"></script>
    <script src="admin-assets/js/typeahead/handlebars.js"></script>
    <script src="admin-assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="admin-assets/js/typeahead/typeahead.custom.js"></script>
    <script src="admin-assets/js/typeahead-search/handlebars.js"></script>
    <script src="admin-assets/js/typeahead-search/typeahead-custom.js"></script>
    <!-- Plugins JS Ends-->

    <!-- added -->
    <script src="admin-assets/js/chart/knob/knob.min.js"></script>

	<!-- addede -->
    <script src="admin-assets/js/datepicker/date-time-picker/moment.min.js"></script>
    <script src="admin-assets/js/datepicker/date-time-picker/tempusdominus-bootstrap-4.min.js"></script>
    <script src="assets/js/datepicker/date-time-picker/datetimepicker.custom.js"></script>

	<!-- added -->
    <script src="admin-assets/js/dropzone/dropzone.js"></script>
    <script src="assets/js/dropzone/dropzone-script.js"></script>

	<!--ckEditor js start-->
    <script src="admin-assets/js/ckeditor/ckeditor.js"></script>
    <script src="admin-assets/js/ckeditor/styles.js"></script>
    <script src="admin-assets/js/ckeditor/ckeditor.custom.js"></script>

    <script src="admin-assets/js/datepicker/date-picker/datepicker.js"></script>

    <script src="admin-assets/js/datepicker/date-picker/datepicker.en.js"></script>

    <script src="admin-assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <!-- Apexchar js start -->

    <script src="admin-assets/js/chart/apex-chart/moment.min.js"></script>
    <script src="admin-assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="admin-assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="admin-assets/js/chart/apex-chart/chart-custom.js"></script>
    <!-- Apexchar js start -->
    <!-- ratio start  -->
    <script src="admin-assets/js/ratio.js"></script>
    <!-- vector map start -->
    <!-- customizer js start  -->
    <script src="admin-assets/js/customizer.js"></script>
    <!-- customizer js start  -->
    <script src="admin-assets/js/vector-map/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="admin-assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin-assets/js/vector-map/map-vector.js"></script>
    <!-- vector map end -->
    <!-- Theme js-->
    <script src="admin-assets/js/script.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#country_id').on('change', function() {
            var list = $(this).val();
            if (list) {
                $.ajax({
                    url: '/get-states',
                    type: 'GET',
                    data: { country_id: list },
                    dataType: 'json',
                    success: function(data) {
                        $('#state_id').empty();
                        $('#state_id').append('<option disabled selected value="">State</option>');
                        $.each(data, function(key, value) {
                            $('#state_id').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            } else {
                $('#state_id').empty();
                $('#state_id').append('<option disabled selected value="">State</option>');
            }
        });
    });
</script>
    

    <!-- Your HTML form goes here -->

<!-- Include jQuery library -->


    <!-- login js-->
    <!-- Plugin used-->
</body>

</html>