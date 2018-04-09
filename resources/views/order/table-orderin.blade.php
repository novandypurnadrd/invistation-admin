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
                                    <li class="breadcrumb-item active">Order In</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Order In</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


          <div class="row">
                    <div class="col-12">
                        <div class="card-box table-responsive">
                            
                                        
                                           <form class="form-horizontal" role="form" action="{{URL::to('/orderin/view/')}}" method="POST">
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
                            <h4 class="m-t-0 header-title">List Order In</h4>
                            <p class="text-muted font-14 m-b-30">
                                List Orderan yang baru masuk dan masih menunggu pembayaran oleh calon konsumen.
                            </p>
                              

                            <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Order Id</th>
                                    <th>Level Order</th>
                                    <th>Type</th>
                                    <th>Tanggal Order</th>
                                    <th>Tanggal Confirm</th>
                                    <th>Deadline</th>
                                    <th>Price</th>
                                    <th>Costumer</th>
                                    <th>Bukti Transfer</th>
                                    <th>Status Pembayaran</th>
                                </tr>
                                </thead>


                                <tbody>
                                    <tr>
                                        <?php foreach ($table as $tbl) { ?>
                                            <td> <?php echo $tbl->order_id; ?> </td>
                                            <td> <?php echo $tbl->level_order; ?> </td>
                                            <td> <?php echo $tbl->type_order; ?> </td>
                                            <td> <?php echo $tbl->created_at; ?> </td>
                                            <td> <?php echo $tbl->updated_at; ?> </td>
                                            <td> <?php echo $tbl->deadline; ?> </td>
                                            <td> <?php echo $tbl->price; ?> </td>

                                            <td><i class="dripicons-user"></i> <a href="{{URL::to('/costumer/'.$tbl->costumer)}}">Costumer</a></td>

                                            <td> <i class="mdi mdi-credit-card-scan"></i> <a href="{{URL::to('/bukti_transfer/'.$tbl->bukti_transfer)}}" target="_blank">Validate</a></td>

                                            <?php if ($tbl->status_pembayaran == "Confirmed"){ ?>

                                                <td><i class="fa fa-check-circle-o"></i><a href="{{URL::to('/orderin/'.$tbl->order_id)}}">&nbsp;&nbsp;&nbsp;<?php echo $tbl->status_pembayaran; ?></a> </td>

                                            <?php } else{ ?>

                                                <td><i class="fa fa-times-circle-o"></i><a href="{{URL::to('/orderin/'.$tbl->order_id)}}"> &nbsp;&nbsp;&nbsp;<?php echo $tbl->status_pembayaran; ?> </a></td>

                                            <?php } ?>
                                            
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