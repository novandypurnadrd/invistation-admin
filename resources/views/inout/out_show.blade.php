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
                                    <li class="breadcrumb-item active">Balance Out</li>
                                    <li class="breadcrumb-item active">List</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Balance Out</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                   <div class="row">
                    <div class="col-12">
                        <div class="card-box table-responsive">
                            
                                        
                                           <form class="form-horizontal" role="form" action="{{URL::to('/inout/view_out/')}}" method="POST">
                                            <div class="col-12 form-group row">
                                                <div class="col-3">
                                                </div>
                                                <label class="col-1 col-form-label">Date Range</label>
                                                <div class="col-4">
                                                    <div class="input-daterange input-group" id="date-range">
                                                        <input type="text" class="form-control" name="start_date" value="{{$start}}"/>
                                                        <input type="text" class="form-control" name="end_date" value="{{$end}}" />
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <button type="submit" class="btn btn-outline-custom btn-rounded waves-light waves-effect">View</button>
                                                </div>
                                            </div>
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="PUT">
                                        </form>

                        </div>
                    </div>
                </div> <!-- end row -->


          <div class="row">
                    <div class="col-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title">List Balance Out</h4>
                            <p class="text-muted font-14 m-b-30">
                                List pengeluaran invistation.com
                            </p>

                            <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                
                                    <th>Balance Code</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Tujuan</th>
                                    <th>Jumlah Transaksi</th>
                                    <th>Bukti Transaksi</th>
                                    <th>Keterangan</th>
                                </tr>
                                </thead>


                                <tbody>
                                    <tr>
                                        <?php foreach ($table as $tbl) { ?>
                                     
                                            <td> <?php echo $tbl->balance_code; ?> </td>
                                            <td> <?php echo $tbl->tgl_transaksi; ?> </td>
                                            <td> <?php echo $tbl->tujuan; ?> </td>
                                            <td> <?php echo $tbl->jml_transaksi; ?> </td>
                                            <td> <i class="mdi mdi-credit-card-scan"></i> <a href="{{URL::to('/buktitransferoutbalance/'.$tbl->bukti_transaksi)}}" target="_blank">Bukti Transaksi</a></td>

                                            <td> <?php echo $tbl->keterangan; ?> </td>
                                           
                                            
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


     <!-- Modal Costumer -->
         <!-- Modal -->
        <div id="custom-modal" class="modal-demo">
            <button type="button" class="close" onclick="Custombox.close();">
                <span>&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="custom-modal-title">Modal title</h4>
            <div class="custom-modal-text">
                <form class="form-horizontal" action="#">

                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <label for="emailaddress3">Email address</label>
                            <input class="form-control" type="email" id="emailaddress3" required="" placeholder="john@deo.com">
                        </div>
                    </div>

                    <div class="form-group m-b-25">
                        <div class="col-12">
                            <a href="#" class="text-muted pull-right font-14">Forgot your password?</a>
                            <label for="password3">Password</label>
                            <input class="form-control" type="password" required="" id="password3" placeholder="Enter your password">
                        </div>
                    </div>

                    <div class="form-group m-b-20">
                        <div class="col-12">
                            <div class="checkbox checkbox-custom">
                                <input id="checkbox15" type="checkbox" checked>
                                <label for="checkbox15">
                                    Remember me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group account-btn text-center m-t-10">
                        <div class="col-12">
                            <button class="btn w-lg btn-rounded btn-custom waves-effect waves-light" type="submit">Sign In</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <!-- End Modal -->


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



        //modal jquery
        $(document).on('click','.open_modal',function(){
        var url = "domain.com/yoururl";
        var tour_id= $(this).val();
        $.get(url + '/' + tour_id, function (data) {
            //success data
            console.log(data);
            $('#tour_id').val(data.id);
            $('#name').val(data.name);
            $('#details').val(data.details);
            $('#btn-save').val("update");
            $('#myModal').modal('show');
        }) 
    });

        </script>

    </body>
</html>