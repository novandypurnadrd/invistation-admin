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
                                    <li class="breadcrumb-item"><a href="#">In & Out</a></li>
                                    <li class="breadcrumb-item active">Out</li>
                                    <li class="breadcrumb-item active">Add</li>
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
                            <h4 class="m-t-0 header-title">Out Add</h4>
                            <p class="text-muted m-b-30 font-14">
                                Mengisi data transaksi pengeluaran.
                            </p>

                            <div class="row">
                                <div class="col-12">
                                    <div class="p-20">
                                        <form class="form-horizontal" action="{{ action('inout@insertOut') }}" role="form" method="post" enctype="multipart/form-data">

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Balance Code</label>
                                                <div class="col-4 input-group">
                                                    <input type="text" class="form-control" readonly="" name="balance_code" id="balance_code">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Last: {{$balance_code}}</span>
                                                        </div>
                                                </div>
                                            </div>
                                            

                                            


                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Tujuan</label>
                                                <div class="col-4">
                                                    <select class="form-control" id="tujuan" required="" name="tujuan">
                                                        <option value="Maintenance">Maintenance</option>
                                                        <option value="Operasional">Operasional</option>
                                                        <option value="Template">Template</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                             
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Tanggal Transaksi</label>
                                                <div class="col-4">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" required="" name="tgl_transaksi" id="datepicker-autoclose">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                              <div class="form-group row">
                                                <label class="col-2 col-form-label">Jumlah Transaksi</label>
                                                <div class="col-2">
                                                    <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                    </div>
                                                    <input type="text" required="" id="jumlah_transaksi" name="jumlah_transaksi" class="form-control">
                                                </div>
                                                </div>
                                             
                                            </div>

                                          


                                               <div class="form-group row">
                                                    <label class="col-2 col-form-label">Upload Bukti Transfer</label>
                                                    <div class="col-9">
                                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                                <img src="{{ URL::asset('images/small/img-1.jpg') }}" alt="image" />

                                                            </div>
                                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                            <div>
                                                                <button type="button" class="btn btn-custom btn-file">
                                                                    <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                                    <input type="file" class="btn-light" id="bukti_transfer" name="bukti_transfer" required="" />
                                                                </button>
                                                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                                                            </div>
                                                        </div>
                                                        <div class="alert alert-info"><strong>Notice!</strong> Image preview only works in IE10+, FF3.6+, Chrome6.0+ and Opera11.1+. In older browsers and Safari, the filename is shown instead.</div>
                                                    </div>
                                                </div>
                                   

                                           
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Keterangan</label>
                                                <div class="col-4">
                                                    <textarea id="keterangan" name="keterangan" class="form-control" required="" rows="5"></textarea>
                                                </div>
                                            </div>

                                              <div class="form-group row">
                                                <label class="col-2 col-form-label"></label>
                                                <div class="col-4">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <a href="{{URL::to('/web_show')}}" class="btn btn-outline-dark btn-rounded waves-light waves-effectmd" role="button">Cancel</a>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                  <button type="submit" class="btn btn-outline-success btn-rounded waves-light waves-effect">Save</button>
                                             
                                                </div>
                                            </div>

                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="PUT">
                                        </form>
                                    </div>
                                </div>

                            </div>
                            <!-- end row -->

                        </div> <!-- end card-box -->
                    </div><!-- end col -->
                </div>
                <!-- end row -->

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