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
                                    <li class="breadcrumb-item"><a href="#">Project</a></li>
                                    <li class="breadcrumb-item active">Project Onprogres</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Project Onprogres</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                 <div class="row">
                    <div class="col-12">
                        <div class="card-box table-responsive">
                            
                                        
                                           <form class="form-horizontal" role="form" action="{{URL::to('/projectonprogres/view/')}}" method="POST">
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
                            <h4 class="m-t-0 header-title">List Project Onprogres</h4>
                            <p class="text-muted font-14 m-b-30">
                                List Project yang sudah dalam proses pengerjaan sesuai dengan permintaan konsumen.
                            </p>

                            <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Project Id</th>
                                    <th>Level</th>
                                    <th>Type</th>
                                    <th>Deadline</th>
                                    <th>Date of Accept</th>
                                    <th>Date of Finish</th>
                                    <th>Tema</th>
                                    <th>Source</th>
                                    <th>PIC</th>
                                    <th>Status Project</th>
                                    <th>Note</th>
                                </tr>
                                </thead>


                                <tbody>
                               
                                    <?php foreach ($table as $tbl) { ?>
                                            <td> <?php echo $tbl->project_id; ?> </td>
                                            <td> <?php echo $tbl->level_project; ?> </td>
                                            <td> <?php echo $tbl->type_project; ?> </td>
                                            <td> <?php echo $tbl->deadline; ?> </td>

                                         

                                            <td> <?php echo $tbl->created_at; ?> </td>


                                            <?php if ($tbl->status_project == "On Progress"){ ?>

                                                <td><?php echo "-" ?></td>

                                            <?php }else{ ?>

                                                <td> <?php echo $tbl->updated_at; ?> </td>
                                            <?php } ?>
                                            


                                            <td> <?php echo $tbl->tema; ?> </td>
                                            <td><i class="mdi mdi-cloud"></i><a href="{{URL::to('/source/'.$tbl->source)}}">&nbsp;&nbsp;&nbsp;<?php echo $tbl->source; ?></a> </td>
                                            <td> <?php echo $tbl->pic; ?> </td>
                                            

                                            <?php if ($tbl->status_project == "Finish"){ ?>

                                                <td><i class="fa fa-check-circle-o"></i><a href="{{URL::to('/projectonprogres/'.$tbl->project_id)}}">&nbsp;&nbsp;&nbsp;<?php echo $tbl->status_project; ?></a> </td>

                                            <?php } else { ?>

                                                <td><i class="fa fa-times-circle-o"></i><a href="{{URL::to('/projectonprogres/'.$tbl->project_id)}}"> &nbsp;&nbsp;&nbsp;<?php echo $tbl->status_project; ?> </a></td>

                                            <?php } ?>
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