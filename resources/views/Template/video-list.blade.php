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
                                    <li class="breadcrumb-item active">List Template</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Invistation.com</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


          <div class="row">
                    <div class="col-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title">List Template Video Invitation</h4>
                            <p class="text-muted font-14 m-b-30">
                                List Template Video yang sudah publish dan siap digunakan.
                            </p>

                            <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Action</th>
                                    <th>Template</th>
                                    <th>Nama Template</th>
                                    <th>Jenis</th>
                                    <th>Harga (Rp)</th>
                                    <th>Harga (Promo)</th>
                                    <th>Url Demo</th>
                                    <th>Preview</th>
                                    <th>Note</th>
                                </tr>
                                </thead>


                                <tbody>
                                    <tr>
                                    <?php foreach ($table as $tbl) { ?>
                                        <td class="center">

                                                                        <center>

                                                                            <a href ="{{URL::to('/video/delete/'.$tbl->id)}}">
                                                                                <button type="button" class="btn btn-xs btn-danger" data-toggle="modal"><span class="fa fa-trash"></span>
                                                                                </button>
                                                                            </a>
                                                                            <a href="{{URL::to('/video/edit/'.$tbl->id)}}">
                                                                                <button type="button" class="btn btn-xs btn-info"><span class="fa fa-edit"></span>
                                                                                </button>
                                                                            </a>
                                                                        </center>
                                        </td>

                                        <td> <?php echo $tbl->kode_template; ?> </td>
                                        <td> <?php echo $tbl->nama_template; ?> </td>
                                        <td> <?php echo $tbl->jenis; ?> </td>
                                        <td> <?php echo "Rp.". $tbl->harga_rupiah; ?> </td>
                                        <td> <?php echo "Rp.". $tbl->harga_promo; ?> </td>
                                        <td><a href="<?php echo $tbl->url_demo; ?>" target="_blank"><?php echo $tbl->url_demo; ?> </a></td>

                                        <td><a href="{{URL::to('/preview_video/'.$tbl->preview_template)}}" target="_blank"> <?php echo $tbl->preview_template; ?></a> </td>
                                        
                                      
                                        <td> <?php echo $tbl->note; ?> </td>
                                    </tr>
                                    <?php } ?>
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end row -->


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