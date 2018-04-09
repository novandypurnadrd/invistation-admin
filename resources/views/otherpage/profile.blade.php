<!DOCTYPE html>
<html>
    <head>
       @include ('includes.head')

    </head>

    <body>

        <!-- Navigation Bar-->
        <header id="topnav">
            @include ('includes.header')
            @include ('includes.navigationhorizontal')
        </header>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">My Profile</a></li>
                                   
                                </ol>
                            </div>
                            <h4 class="page-title">Profile</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row">
                    <div class="col-sm-12">
                        <!-- meta -->
                        <div class="profile-user-box card-box bg-custom">
                            <div class="row">
                                <div class="col-sm-6">
                                    <span class="pull-left mr-3"><img src="{{URL::asset('images/users/user-admin.png')}}" alt="" class="thumb-lg rounded-circle"></span>
                                    <div class="media-body text-white">
                                        <h4 class="mt-1 mb-1 font-18">{{Session::get('nama')}}</h4>
                                        <p class="font-13 text-light">{{Session::get('phone')}}</p>
                                        <p class="text-light mb-0">{{Session::get('email')}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="text-right">
                                        <button type="button" class="btn btn-light waves-effect">
                                            <i class="mdi mdi-account-settings-variant mr-1"></i> Edit Profile
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ meta -->
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-md-4">
                        <!-- Personal-Information -->
                        <div class="card-box">
                            <h4 class="header-title mt-0 m-b-20">Personal Information</h4>
                            <div class="panel-body">
                                <p class="text-muted font-13">
                                    Hye, I’m {{Session::get('nama')}} as {{Session::get('level')}} at Invistation.com
                                </p>

                                <hr/>

                                <div class="text-left">
                                    <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15">{{Session::get('nama')}}</span></p>

                                    <p class="text-muted font-13"><strong>Mobile :</strong><span class="m-l-15">{{Session::get('phone')}}</span></p>

                                    <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">{{Session::get('email')}}</span></p>

                                    <p class="text-muted font-13"><strong>Location :</strong> <span class="m-l-15">Indonesia</span></p>

                                 

                                </div>

                                <ul class="social-links list-inline m-t-20 m-b-0">
                                    <li class="list-inline-item">
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Personal-Information -->

                      

                    </div>


                    <div class="col-md-8">

                        <div class="row">

                            <div class="col-sm-4">
                                <div class="card-box tilebox-one">
                                    <i class="icon-layers float-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Orders</h6>
                                    <h2 class="m-b-20" data-plugin="counterup">1,587</h2>
                                    <span class="badge badge-custom"> +11% </span> <span class="text-muted">From previous period</span>
                                </div>
                            </div><!-- end col -->

                            <div class="col-sm-4">
                                <div class="card-box tilebox-one">
                                    <i class="icon-paypal float-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Revenue</h6>
                                    <h2 class="m-b-20">$<span data-plugin="counterup">46,782</span></h2>
                                    <span class="badge badge-danger"> -29% </span> <span class="text-muted">From previous period</span>
                                </div>
                            </div><!-- end col -->

                            <div class="col-sm-4">
                                <div class="card-box tilebox-one">
                                    <i class="icon-rocket float-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Product Sold</h6>
                                    <h2 class="m-b-20" data-plugin="counterup">1,890</h2>
                                    <span class="badge badge-custom"> +89% </span> <span class="text-muted">Last year</span>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->



                      <!--   <div class="card-box">
                            <h4 class="header-title mb-3">My Projects</h4>

                            <div class="table-responsive">
                                <table class="table m-b-0">
                                    <thead>
                                    <tr>
                                    
                                        <th>Project ID</th>
                                        <th>Level Project</th>
                                        <th>Type Project</th>
                                        <th>Deadline</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    


                                    </tbody>
                                </table>
                            </div>
                        </div> -->

                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        2018 © Highdmin. - Coderthemes.com
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->


      @include ('includes.script')

    </body>
</html>