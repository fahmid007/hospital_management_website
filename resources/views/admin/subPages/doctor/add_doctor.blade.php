<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.style_sub.css')
</head>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/corona-free/"><i
                                class="mdi mdi-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="mdi mdi-close text-white me-0"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sideBar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('admin.navbar');
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="px-1 py-5 mx-auto">
                        <div class="row d-flex justify-content-center">
                            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                                <div class="card bg-transparent">
                                    <form class="form-card" action="{{url('upload_doctor')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row justify-content-between text-left">
                                            <div class="form-group col-sm-6 flex-column d-flex">
                                                <label class="form-control-label">First name</label>
                                                <input type="text" name="fname" style="color: black;"
                                                    placeholder="Enter first name">
                                            </div>
                                            <div class="form-group col-sm-6 flex-column d-flex">
                                                <label class="form-control-label">Last name</label>
                                                <input type="text" name="lname" style="color: black;"
                                                    placeholder="Enter last name">
                                            </div>
                                        </div>

                                        <div class="row justify-content-between text-left">
                                            <div class="form-group col-sm-6 flex-column d-flex">
                                                <label class="form-control-label">Email</label>
                                                <input type="text" name="email" style="color: black;"
                                                    placeholder="Enter email">
                                            </div>
                                            <div class="form-group col-sm-6 flex-column d-flex">
                                                <label class="form-control-label">Phone Number</label>
                                                <input type="text" name="phone_no" style="color: black;"
                                                    placeholder="Enter Phone Number">
                                            </div>
                                        </div>

                                        <div class="row justify-content-between text-left">
                                            <div class="form-group col-sm-6 flex-column d-flex">
                                                <label class="form-control-label">Speciality</label>
                                                <select class="form-select form-select-lg border-none "
                                                    aria-label=".form-select-lg example" name="speciality">
                                                    <option selected disabled>Select an option</option>
                                                    <option value="1">Neurology</option>
                                                    <option value="2">Urologists </option>
                                                    <option value="3">Internal medicine</option>
                                                    <option value="4">Pediatrics </option>
                                                    <option value="5">Dermatology </option>
                                                    <option value="6">Nephrology </option>
                                                    <option value="7">Psychiatry </option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-6 flex-column d-flex">
                                                <label class="form-control-label">Room Number</label>
                                                <input type="text" name="room_no" style="color: black;"
                                                    placeholder="Enter Room Number">
                                            </div>
                                        </div>

                                        <div class="row justify-content-between text-left">
                                            <div class="form-group col-sm-6 flex-column d-flex">
                                                <label class="form-control-label">Doctor Image</label>
                                                <input type="file" name="image">
                                            </div>
                                        </div>

                                        <div class="row justify-content-centre">
                                            <div class="form-group">
                                                <input class="btn btn-success"
                                                    style="font-size: 20px; margin-top: 10px; font-weight: 600;"
                                                    type="submit" value="Add Doctor">
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                            bootstrapdash.com 2021</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                                href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap
                                admin template</a> from Bootstrapdash.com</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.style_sub.script')
</body>

</html>