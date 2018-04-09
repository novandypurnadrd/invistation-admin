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
                                    <li class="breadcrumb-item"><a href="#">Template</a></li>
                                    <li class="breadcrumb-item active">Video Invistation</li>
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
                            <h4 class="m-t-0 header-title">Add Video Template</h4>
                            <p class="text-muted m-b-30 font-14">
                                Menambah template video undangan online.
                            </p>

                            <div class="row">
                                <div class="col-12">
                                    <div class="p-20">
                                        <form class="form-horizontal" action="{{ action('video@insert') }}" role="form" method="post" enctype="multipart/form-data">
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Template</label>
                                                <div class="col-4">
                                                    <input type="text" class="form-control" readonly="" name="template" id="template" value="{{$generate}}">
                                                </div>
                                            </div>

                                              <div class="form-group row">
                                                <label class="col-2 col-form-label">Nama Template</label>
                                                <div class="col-4">
                                                    <input type="text" class="form-control" required="" id="namatemplate" name="namatemplate">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Jenis</label>
                                                <div class="col-4">
                                                    <select class="form-control" id="jenis" name="jenis">
                                                        <option value="Wedding">Wedding</option>
                                                        <option value="Birthday">Birthday</option>
                                                        <option value="Aniversary">Aniversary</option>
                                                        <option value="Company">Company</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                             
                                                </div>
                                            </div>


                                              <div class="form-group row">
                                                <label class="col-2 col-form-label">Harga</label>
                                                <div class="col-2">
                                                    <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                    </div>
                                                    <input type="text" required="" id="harga_rupiah" name="harga_rupiah" class="form-control">
                                                </div>
                                                </div>
                                                 <div class="col-2">
                                                    <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Promo</span>
                                                    </div>
                                                    <input type="text" id="harga_promo" name="harga_promo" class="form-control">
                                                </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">URL Demo</label>
                                                <div class="col-4">
                                                    <input type="text" class="form-control" id="urldemo" name="urldemo">
                                                </div>
                                            </div>

                                          


                                               <div class="form-group row">
                                                    <label class="col-2 col-form-label">Preview Template</label>
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
                                                                    <input type="file" class="btn-light" id="preview" name="preview" />
                                                                </button>
                                                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                                                            </div>
                                                        </div>
                                                        <div class="alert alert-info"><strong>Notice!</strong> Image preview only works in IE10+, FF3.6+, Chrome6.0+ and Opera11.1+. In older browsers and Safari, the filename is shown instead.</div>
                                                    </div>
                                                </div>
                                   

                                           
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Note</label>
                                                <div class="col-4">
                                                    <textarea id="note" name="note" class="form-control" rows="5"></textarea>
                                                </div>
                                            </div>

                                              <div class="form-group row">
                                                <label class="col-2 col-form-label"></label>
                                                <div class="col-4">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <a href="{{URL::to('/video_show')}}" class="btn btn-outline-dark btn-rounded waves-light waves-effectmd" role="button">Cancel</a>
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