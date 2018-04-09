<!DOCTYPE html>
<html>
    <head>
        @include ('includes.head')

    </head>

    <body>

      <header id="topnav">
       @include ('includes.header')

        <!-- Navigation Bar-->
        @include ('includes.navigationhorizontal')
         
        <!-- End Navigation Bar-->
      </header>


        <div class="wrapper">
           
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Order</a></li>
                                    <li class="breadcrumb-item active">Order Confirmed</li>
                                    <li class="breadcrumb-item active">Order Activate</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Invistation.com</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


          <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title">Source</h4>
                            <p class="text-muted m-b-30 font-14">
                             Source bahan untuk pembuatan wedding invitation website.
                            </p>

                            <div class="row">
                                <div class="col-12">
                                    <div class="p-20">
                                        <form class="form-horizontal" role="form" >
                                             <div class="form-group row">
                                                <label class="col-2 col-form-label">Nama</label>
                                                <div class="col-2">
                                                    <input type="text" class="form-control" id="nama" name="nama" readonly="" value="{{$table->nama}}">
                                                </div>
                                        
                                                 
                                            </div>
                                               
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Email</label>
                                                <div class="col-2">
                                                    <input type="text" class="form-control" id="email" name="email" readonly="" value="{{$table->email}}">
                                                </div>
                                                
                                                
                                            </div>



                                            <div class="form-group row">
                                               <label class="col-2 col-form-label">Phone</label>
                                                <div class="col-2">
                                                    <input type="text" class="form-control" id="phone" name="phone" readonly="" value="{{$table->phone}}">
                                                </div>
                                               

                                            </div>



                                             <div class="form-group row">
                                               <label class="col-2 col-form-label">Tanggal Lahir</label>
                                                <div class="col-2">
                                                    <input type="text" class="form-control" id="ttl" name="ttl" readonly="" value="{{$table->ttl}}">
                                                </div>
                                              

                                            </div>


                                              <div class="form-group row">
                                               <label class="col-2 col-form-label">Alamat</label>
                                                <div class="col-2">
                                                    <textarea id="alamat" readonly="" name="alamat" class="form-control" rows="5">{{$table->alamat}}</textarea>
                                                </div>

                                            </div>
                                           
              
                                            

                                              <div class="form-group row">
                                                <div class="col-1">
                                                </div>
                                                <label class="col-2 col-form-label"></label>
                                                <div class="col-4">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                   <a href="{{URL::to('/orderin')}}" class="btn btn-outline-dark btn-rounded waves-light waves-effectmd" role="button">BACK</a>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                 
                                             
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>

                            </div>
                            <!-- end row -->

                        </div> <!-- end card-box -->
                    </div><!-- end col -->
                </div>
                <!-- end row -->


            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        <!-- Footer -->
     @include ('includes.footer')
        <!-- End Footer -->


    @include ('includes.script')

     <script type="text/javascript">
            $(document).ready(function() {

                // Default Datatable
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                // Key Tables

                $('#key-table').DataTable({
                    keys: true
                });

                // Responsive Datatable
                $('#responsive-datatable').DataTable();

                // Multi Selection Datatable
                $('#selection-datatable').DataTable({
                    select: {
                        style: 'multi'
                    }
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>

    </body>
</html>