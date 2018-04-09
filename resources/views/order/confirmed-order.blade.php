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
                                    <li class="breadcrumb-item active">Manual Confirmed</li>
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
                            <h4 class="m-t-0 header-title">Order Manual Confirmed</h4>
                            <p class="text-muted m-b-30 font-14">
                             Konfirmasi Pembayaran calon konsumen secara manual oleh admin.
                            </p>

                            <div class="row">
                                <div class="col-12">
                                    <div class="p-20">
                                         <form class="form-horizontal" action="{{URL::to('/orderin/update/'.$table->order_id)}}" role="form" method="post">
                                             <div class="form-group row">
                                                <label class="col-2 col-form-label">Order Id</label>
                                                <div class="col-2">
                                                    <input type="text" class="form-control" id="order_id" name="order_id" readonly="" value="{{$table->order_id}}">
                                                </div>
                                                <div class="col-1">
                                                </div>
                                                 <label class="col-2 col-form-label">Tema</label>
                                                <div class="col-2">
                                                    <input type="text" class="form-control" id="tema" name="tema" readonly="" value="{{$table->tema}}">
                                                </div>
                                                 <div class="col-2">
                                                    <input type="hidden" id="tgl_assign" name="tgl_assign" class="form-control" readonly="" value="{{$table->created_at}}">
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Level Order</label>
                                                <div class="col-2">
                                                    <input type="text" class="form-control" id="level_order" name="level_order" readonly="" value="{{$table->level_order}}">
                                                </div>
                                                <div class="col-1">
                                                </div>
                                                <label class="col-2 col-form-label">Price</label>
                                                <div class="col-2">
                                                    <input type="text" class="form-control" id="price" name="price" readonly="" value="{{$table->price}}">
                                                </div>
                                                <div class="col-2">
                                                    <input type="hidden" id="bukti_transfer" name="bukti_transfer" class="form-control" readonly="" value="{{$table->bukti_transfer}}">
                                                </div>
                                              
                                            </div>
                                              <div class="form-group row">
                                                <label class="col-2 col-form-label">Type</label>
                                                <div class="col-2">
                                                    <input type="text" class="form-control" id="type_order" name="type_order" readonly="" value="{{$table->type_order}}">
                                                </div>
                                                <div class="col-1">
                                                </div>
                                                <label class="col-2 col-form-label" for="contact">Costumer</label>
                                                <div class="col-2">
                                                    <input type="text" id="costumer" name="costumer" class="form-control" placeholder="" readonly="" value="{{$table->costumer}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Deadline</label>
                                                <div class="col-2">
                                                    <input type="text" class="form-control" id="deadline" name="deadline" readonly="" value="{{$table->deadline}}">
                                                </div>
                                                <div class="col-1">
                                                </div>
                                                 <label class="col-2 col-form-label">Source</label>
                                                <div class="col-2">
                                                    <input type="text" class="form-control" id="source" name="source" readonly="" value="{{$table->source}}">
                                                </div>
                                            </div>
                                            
                                
                                 

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Status Pembayaran</label>
                                                <div class="col-2">
                                                    <select class="form-control" id="status_pembayaran" name="status_pembayaran">
                                                        <option value="Unconfirmed" <?php if($table->status_pembayaran == "Unconfirmed"){echo "selected='true'";} ?>>Unconfirmed</option>
                                                        <option value="Confirmed" <?php if($table->status_pembayaran == "Confirmed"){echo "selected='true'";}?> >Confirmed</option>
                                                        <option value="Cancel" <?php if($table->status_pembayaran == "Cancel"){echo "selected='true'";}?> >Cancel</option>
                                                      
                                                    </select>
                                             
                                                </div>
                                                <div class="col-1">
                                                </div>

                                                 <label class="col-2 col-form-label">Note</label>
                                                <div class="col-4">
                                                    <textarea id="note" readonly="" name="note" class="form-control" rows="5">{{$table->note}}</textarea>
                                                </div>
                                            </div>

                                           

                                              <div class="form-group row">
                                                <label class="col-2 col-form-label"></label>
                                                <div class="col-4">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <a href="{{URL::to('/orderin')}}" class="btn btn-outline-dark btn-rounded waves-light waves-effectmd" role="button">Cancel</a>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                  <button type="Submit" class="btn btn-outline-success btn-rounded waves-light waves-effect">Confirmed</button>
                                             
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