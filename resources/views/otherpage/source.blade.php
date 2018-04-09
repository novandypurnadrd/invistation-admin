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
                                                <label class="col-2 col-form-label">Source Id</label>
                                                <div class="col-2">
                                                    <input type="text" class="form-control" id="source_id" name="source_id" readonly="" value="{{$table->source_id}}">
                                                </div>
                                             

                                                 <label class="col-2 col-form-label">Project Id</label>
                                                <div class="col-2">
                                                    <input type="text" class="form-control" id="project_id" name="project_id" readonly="" value="{{$table->project_id}}">
                                                </div>
                                                 
                                            </div>
                                               
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Nama Calon Pria</label>
                                                <div class="col-2">
                                                    <input type="text" class="form-control" id="nama_calonpria" name="nama_calonpria" readonly="" value="{{$table->nama_calonpria}}">
                                                </div>
                                                
                                                <label class="col-2 col-form-label">Nama Calon Wanita</label>
                                                <div class="col-2">
                                                    <input type="text" class="form-control" id="nama_calonwanita" name="nama_calonwanita" readonly="" value="{{$table->nama_calonwanita}}">
                                                </div>
                                            </div>



                                            <div class="form-group row">
                                               <label class="col-2 col-form-label">Keluarga Pria</label>
                                                <div class="col-2">
                                                    <textarea id="keluarga_pria" readonly="" name="keluarga_pria" class="form-control" rows="5">{{$table->keluarga_pria}}</textarea>
                                                </div>
                                               
                                               <label class="col-2 col-form-label">Keluarga Wanita</label>
                                                <div class="col-2">
                                                    <textarea id="keluarga_wanita" readonly="" name="keluarga_wanita" class="form-control" rows="5">{{$table->keluarga_wanita}}</textarea>
                                                </div>

                                            </div>



                                             <div class="form-group row">
                                               <label class="col-2 col-form-label">Main Ceremony</label>
                                                <div class="col-2">
                                                    <textarea id="main_ceremony" readonly="" name="main_ceremony" class="form-control" rows="5">{{$table->main_ceremony}}</textarea>
                                                </div>
                                               
                                               <label class="col-2 col-form-label">Wedding Party</label>
                                                <div class="col-2">
                                                    <textarea id="wedding_party" readonly="" name="wedding_party" class="form-control" rows="5">{{$table->wedding_party}}</textarea>
                                                </div>

                                                <label class="col-1 col-form-label">Note</label>
                                                <div class="col-3">
                                                    <textarea id="story" readonly="" name="story" class="form-control" rows="5">{{$table->story}}</textarea>
                                                </div>

                                            </div>


                                              <div class="form-group row">
                                               <label class="col-2 col-form-label">Pesan dari Calon Pria</label>
                                                <div class="col-2">
                                                    <textarea id="pesan_daricalonpria" readonly="" name="pesan_daricalonwanita" class="form-control" rows="5">{{$table->pesan_daricalonpria}}</textarea>
                                                </div>
                                               
                                               <label class="col-2 col-form-label">Pesan dari Calon Wanita</label>
                                                <div class="col-2">
                                                    <textarea id="pesan_daricalonwanita" readonly="" name="pesan_daricalonwanita" class="form-control" rows="5">{{$table->pesan_daricalonwanita}}</textarea>
                                                </div>

                                                 <label class="col-1 col-form-label">Story</label>
                                                <div class="col-3">
                                                    <textarea id="story" readonly="" name="story" class="form-control" rows="5">{{$table->story}}</textarea>
                                                </div>

                                            </div>
                                           
                     

                                             <div class="form-group row">
                                                <label class="col-2 col-form-label">Req.URL</label>
                                                <div class="col-2">
                                                    <input type="text" class="form-control" id="req_url" name="req_url" readonly="" value="{{$table->req_url}}">
                                                </div>
                                                
                                                <label class="col-2 col-form-label">Req.Lagu</label>
                                                <div class="col-2">
                                                    <input type="text" class="form-control" id="req_lagu" name="req_lagu" readonly="" value="{{$table->req_lagu}}">
                                                </div>

                                                <label class="col-1 col-form-label">Link. Streaming</label>
                                                <div class="col-3">
                                                    <input type="text" class="form-control" id="link_streaming" name="link_streaming" readonly="" value="{{$table->link_streaming}}">
                                                </div>

                                                
                                            </div>



                                              <div class="form-group row">
                                                <label class="col-2">Foto Calon</label>
                                                <div class="col-2">
                                                    <a href="{{URL::to('/preview/$table->foto_calonpria')}}" target="_blank">Foto Calon Pria</a>
                                                </div>
                                                 <div class="col-2">
                                                    <a href="{{URL::to('/preview/$table->foto_calonwanita')}}" target="_blank">Foto Calon Wanita</a>
                                                </div>
                                               
                                            </div>



                                            <div class="form-group row">
                                                <label class="col-2">Foto Utama</label>
                                                <div class="col-2">
                                                    <a href="{{URL::to('/preview/$table->fotoutama_satu')}}" target="_blank">Foto Utama 1</a>
                                                </div>
                                                 <div class="col-2">
                                                    <a href="{{URL::to('/preview/$table->fotoutama_dua')}}" target="_blank">Foto Utama 2</a>
                                                </div>
                                                 <div class="col-2">
                                                    <a href="{{URL::to('/preview/$table->fotoutama_dua')}}" target="_blank">Foto Utama 3</a>
                                                </div>

                                            </div>


                                           

                                              <div class="form-group row">
                                                <label class="col-2">Foto Tambahan</label>
                                                <div class="col-2">
                                                    <a href="{{URL::to('/preview/$table->fototambahan_satu')}}" target="_blank">Foto Tambahan 1</a>
                                                </div>
                                                 <div class="col-2">
                                                    <a href="{{URL::to('/preview/$table->fototambahan_dua')}}" target="_blank">Foto Tambahan 2</a>
                                                </div>
                                                 <div class="col-2">
                                                    <a href="{{URL::to('/preview/$table->fototambahan_tiga')}}" target="_blank">Foto Tambahan 3</a>
                                                </div>
                                                 <div class="col-2">
                                                    <a href="{{URL::to('/preview/$table->fototambahan_empat')}}" target="_blank">Foto Tambahan 4</a>
                                                </div>
                                                 <div class="col-2">
                                                    <a href="{{URL::to('/preview/$table->fototambahan_lima')}}" target="_blank">Foto Tambahan 5</a>
                                                </div>

                                            </div>


                                            

                                              <div class="form-group row">
                                                <div class="col-3">
                                                </div>
                                                <label class="col-2 col-form-label"></label>
                                                <div class="col-4">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                   <a href="{{URL::to('/projectwaiting')}}" class="btn btn-outline-dark btn-rounded waves-light waves-effectmd" role="button">BACK</a>
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