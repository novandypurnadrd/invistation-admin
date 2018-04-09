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
                                    <li class="breadcrumb-item active">Balance Report</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Balance Report</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


          <div class="row">
                    <div class="col-12">
                        <div class="card-box table-responsive">
                            
                                        
                                           <form class="form-horizontal" role="form" action="{{URL::to('/inout/report/')}}" method="POST">
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
                        <div class="card-box">

                            <div class="row">
                                <div class="col-sm-6 col-lg-6 col-xl-3">
                                    <div class="card-box mb-0 widget-chart-two">
                                        
                                        <div class="widget-chart-two-content">
                                            <p class="text-muted mb-0 mt-2">Balance In</p>
                                            <h3 class="">Rp. {{$balancein}}</h3>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6 col-xl-3">
                                    <div class="card-box mb-0 widget-chart-two">
                                       
                                        <div class="widget-chart-two-content">
                                            <p class="text-muted mb-0 mt-2">Balance Out</p>
                                            <h3 class="">Rp. {{$balanceout}}</h3>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6 col-xl-3">
                                    <div class="card-box mb-0 widget-chart-two">
                                        
                                        <div class="widget-chart-two-content">
                                            <p class="text-muted mb-0 mt-2">Active Balance</p>
                                            <h3 class="">Rp. {{$balancein - $balanceout}}</h3>
                                        </div>

                                    </div>
                                </div>

                                  <div class="col-sm-6 col-lg-6 col-xl-3">
                                    <div class="card-box mb-0 widget-chart-two">
                                        
                                        <div class="widget-chart-two-content">
                                            <p class="text-muted mb-0 mt-2">Total Order</p>
                                            <h3 class="">{{$project}}</h3>
                                        </div>

                                    </div>
                                </div>


                             
                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                </div>
                <!-- end row -->


                 <div class="row">
                    <div class="col-6">
                        <div class="card-box">
                            <h4 class="header-title mb-4">Balance In</h4>
                            <h3 class="">Rp. {{$balancein}}</h3>

                            <div class="row">
                                <div class="col-sm-6 col-lg-6 col-xl-3">
                                    <div class="card-box mb-0 widget-chart-two">
                                        <div class="float-right">
                                             <?php 
                                             if($balancein == 0){
                                                $value_web = 0;
                                             }else{
                                                $value_web =  round((($balance_web/$balancein) * 100),2);   
                                             }
                                              ?>
                                            <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                   data-fgColor="#0acf97" value="{{$value_web}}" data-skin="tron" data-angleOffset="180"
                                                   data-readOnly=true data-thickness=".1"/>
                                        </div>
                                        <div class="widget-chart-two-content">
                                            <p class="text-muted mb-0 mt-2">WebInvitation</p>
                                            <h5>Rp. {{$balance_web}}</h5>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6 col-xl-3">
                                    <div class="card-box mb-0 widget-chart-two">
                                        <div class="float-right">
                                              <?php 
                                             if($balancein == 0){
                                                $value_grafis = 0;
                                             }else{
                                                $value_grafis =  round((($balance_grafis/$balancein) * 100),2);   
                                             }
                                              ?>
                                            
                                            <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                   data-fgColor="#f9bc0b" value="{{$value_grafis}}" data-skin="tron" data-angleOffset="180"
                                                   data-readOnly=true data-thickness=".1"/>
                                        </div>
                                        <div class="widget-chart-two-content">
                                            <p class="text-muted mb-0 mt-2">GrafisInvitation</p>
                                            <h5 class="">Rp. {{$balance_grafis}}</h5>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6 col-xl-3">
                                    <div class="card-box mb-0 widget-chart-two">
                                        <div class="float-right">
                                             <?php 
                                             if($balancein == 0){
                                                $value_video = 0;
                                             }else{
                                                $value_video =  round((($balance_video/$balancein) * 100),2);   
                                             }
                                              ?>
                                          
                                            <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                   data-fgColor="#f1556c" value="{{$value_video}}" data-skin="tron" data-angleOffset="180"
                                                   data-readOnly=true data-thickness=".1"/>
                                        </div>
                                        <div class="widget-chart-two-content">
                                            <p class="text-muted mb-0 mt-2">VideoInvitation</p>
                                            <h5 class="">Rp. {{$balance_video}}</h5>
                                        </div>

                                    </div>
                                </div>

                            
                            </div>
                            <!-- end row -->
                        </div>
                    </div>


                    <div class="col-6">
                        <div class="card-box">
                            <h4 class="header-title mb-4">Balance Out</h4>
                            <h3 class="">Rp. {{$balanceout}}</h3>

                            <div class="row">
                                <div class="col-sm-6 col-lg-6 col-xl-3">
                                    <div class="card-box mb-0 widget-chart-two">
                                        <div class="float-right">
                                            <?php 
                                            if($balanceout == 0){
                                                $value_maintenance = 0;
                                            }
                                            else{
                                                $value_maintenance =  round((($balance_maintenance/$balanceout) * 100),2);
                                            }
                                             

                                            ?>
                                            <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                   data-fgColor="#0acf97" value="{{$value_maintenance}}" data-skin="tron" data-angleOffset="180"
                                                   data-readOnly=true data-thickness=".1"/>
                                        </div>
                                        <div class="widget-chart-two-content">
                                            <p class="text-muted mb-0 mt-2">Maintenance</p>
                                            <h5 class="">Rp. {{$balance_maintenance}}</h5>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6 col-xl-3">
                                    <div class="card-box mb-0 widget-chart-two">
                                        <div class="float-right">
                                              <?php 
                                            if($balanceout == 0){
                                                $value_operasional = 0;
                                            }
                                            else{
                                                $value_operasional =  round((($balance_operasional/$balanceout) * 100),2);
                                            }
                                             

                                            ?>
                                        
                                            <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                   data-fgColor="#f9bc0b" value="{{$value_operasional}}" data-skin="tron" data-angleOffset="180"
                                                   data-readOnly=true data-thickness=".1"/>
                                        </div>
                                        <div class="widget-chart-two-content">
                                            <p class="text-muted mb-0 mt-2">Operasional</p>
                                            <h5 class="">Rp. {{$balance_operasional}}</h5>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6 col-xl-3">
                                    <div class="card-box mb-0 widget-chart-two">
                                        <div class="float-right">
                                               <?php 
                                            if($balanceout == 0){
                                                $value_template = 0;
                                            }
                                            else{
                                                $value_template =  round((($balance_template/$balanceout) * 100),2);
                                            }
                                             

                                            ?>
                                          
                                            <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                   data-fgColor="#f1556c" value="{{$value_template}}" data-skin="tron" data-angleOffset="180"
                                                   data-readOnly=true data-thickness=".1"/>
                                        </div>
                                        <div class="widget-chart-two-content">
                                            <p class="text-muted mb-0 mt-2">Template</p>
                                            <h5 class="">Rp. {{$balance_template}}</h5>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6 col-xl-3">
                                    <div class="card-box mb-0 widget-chart-two">
                                        <div class="float-right">
                                                <?php 
                                            if($balanceout == 0){
                                                $value_others = 0;
                                            }
                                            else{
                                                $value_others =  round((($balance_others/$balanceout) * 100),2);
                                            }
                                             

                                            ?>
                                        
                                            <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                   data-fgColor="#2d7bf4" value="{{$value_others}}" data-skin="tron" data-angleOffset="180"
                                                   data-readOnly=true data-thickness=".1"/>
                                        </div>
                                        <div class="widget-chart-two-content">
                                            <p class="text-muted mb-0 mt-2">Others</p>
                                            <h5 class="">Rp. {{$balance_others}}</h5>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                </div>
                <!-- end row -->


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