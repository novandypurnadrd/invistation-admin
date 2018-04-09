<!DOCTYPE html>
<html>
    <head>
        @include ('includes.head')

    </head>

    <body>

        <!-- Navigation Bar-->
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
                                </ol>
                            </div>
                            <h4 class="page-title">Order Confirmed</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                 <div class="row">
                    <div class="col-12">
                        <div class="card-box table-responsive">
                            
                                        
                                           <form class="form-horizontal" role="form" action="{{URL::to('/orderconfirmed/view/')}}" method="POST">
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
                            <h4 class="m-t-0 header-title">List Order Confirmed</h4>
                            <p class="text-muted font-14 m-b-30">
                                List Orderan yang sudah terkonfirmasi sukses melakukan pembayaran dan siap orderan siap untuk dikerjakan.
                            </p>

                            <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Order Id</th>
                                    <th>Level Order</th>
                                    <th>Type Order</th>
                                    <th>Deadline</th>
                                    <th>Price</th>
                                    <th>Costumer</th>
                                    <th>PIC</th>
                                    <th>Date of Assign</th>
                                    <th>Status Order</th>
                                </tr>
                                </thead>


                                <tbody>
                                    
                                    <?php foreach ($table as $tbl) { ?>
                                            <td> <?php echo $tbl->order_id; ?> </td>
                                            <td> <?php echo $tbl->level_order; ?> </td>
                                            <td> <?php echo $tbl->type_order; ?> </td>
                                            <td> <?php echo $tbl->deadline; ?> </td>
                                            <td> <?php echo "Rp.".$tbl->price; ?> </td>

                                           <td><i class="dripicons-user"></i> <a href="{{URL::to('/costumer/'.$tbl->costumer)}}">Costumer</a></td>

                                            <td> <?php echo $tbl->pic; ?> </td>
                                            <td> <?php echo $tbl->updated_at; ?> </td>

                                            <?php if ($tbl->status_order == "Active"){ ?>

                                                <td><i class="fa fa-check-circle-o"></i><a href="{{URL::to('/orderconfirmed/'.$tbl->order_id)}}">&nbsp;&nbsp;&nbsp;<?php echo $tbl->status_order; ?></a> </td>

                                            <?php } else { ?>

                                                <td><i class="fa fa-times-circle-o"></i><a href="{{URL::to('/orderconfirmed/'.$tbl->order_id)}}"> &nbsp;&nbsp;&nbsp;<?php echo $tbl->status_order; ?> </a></td>

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