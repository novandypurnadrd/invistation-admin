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
                                    <li class="breadcrumb-item active">Web Invistation</li>
                                    <li class="breadcrumb-item active">Update</li>
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
                            <h4 class="m-t-0 header-title">Update Web Template</h4>
                            <p class="text-muted m-b-30 font-14">
                                Melakukan perubahan template web undangan online.
                            </p>

                            <div class="row">
                                <div class="col-12">
                                    <div class="p-20">

                                        <form class="form-horizontal" action="{{URL::to('/web/edit/'.$table->id)}}" role="form" method="post" enctype="multipart/form-data">
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Template</label>
                                                <div class="col-4">
                                                    <input type="text" class="form-control" readonly="" name="template" id="template" value="{{$table->kode_template}}">
                                                </div>
                                            </div>

                                              <div class="form-group row">
                                                <label class="col-2 col-form-label">Nama Template</label>
                                                <div class="col-4">
                                                    <input type="text" class="form-control" required="" id="namatemplate" name="namatemplate" value="{{$table->nama_template}}">
                                                </div>
                                            </div>

                                              <div class="form-group row">
                                                <label class="col-2 col-form-label">Jenis</label>
                                                <div class="col-2">
                                                    <select class="form-control" id="jenis" name="jenis">
                                                        <option value="Wedding" <?php if($table->jenis == "Wedding"){echo "selected='true'";} ?>>Wedding</option>
                                                        <option value="Birthday" <?php if($table->jenis == "Birthday"){echo "selected='true'";}?> >Birthday</option>
                                                        <option value="Aniversary" <?php if($table->jenis == "Aniversary"){echo "selected='true'";}?> >Aniversary</option>
                                                        <option value="Company" <?php if($table->jenis == "Company"){echo "selected='true'";}?> >Company</option>
                                                        <option value="Other" <?php if($table->jenis == "Other"){echo "selected='true'";}?> >Other</option>
                                                      
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
                                                    <input type="text" required="" id="harga_rupiah" name="harga_rupiah" class="form-control" value="{{$table->harga_rupiah}}">
                                                </div>
                                                </div>
                                                 <div class="col-2">
                                                    <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Promo</span>
                                                    </div>
                                                    <input type="text" id="harga_promo" name="harga_promo" class="form-control" value="{{$table->harga_promo}}">
                                                </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">URL Demo</label>
                                                <div class="col-4">
                                                    <input type="text" class="form-control" id="urldemo" name="urldemo" value="{{$table->url_demo}}">
                                                </div>
                                            </div>

                                   

                                           
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Note</label>
                                                <div class="col-4">
                                                    <textarea id="note" name="note" class="form-control" rows="5">{{$table->note}}</textarea>
                                                </div>
                                            </div>

                                              <div class="form-group row">
                                                <label class="col-2 col-form-label"></label>
                                                <div class="col-4">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                  
                                                    <a href="{{URL::to('/web_show')}}" class="btn btn-outline-dark btn-rounded waves-light waves-effectmd" role="button">Cancel</a>
                                                    &nbsp;
                                                  <button type="submit" class="btn btn-outline-success btn-rounded waves-light waves-effect">Update</button>
                                             
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