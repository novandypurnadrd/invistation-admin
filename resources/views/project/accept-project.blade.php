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
                                    <li class="breadcrumb-item active">Project Waiting</li>
                                    <li class="breadcrumb-item active">Accept Project</li>
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
                            <h4 class="m-t-0 header-title">Accept Project</h4>
                            <p class="text-muted m-b-30 font-14">
                             Accept Project oleh tim yang telah di assign dan memiliki tanggung jawab untuk menyelesaikan project.
                            </p>

                            <div class="row">
                                <div class="col-12">
                                    <div class="p-20">
                                        <form class="form-horizontal" role="form" action="{{URL::to('/projectwaiting/update/'.$table->project_id)}}" method="POST">
                                             <div class="form-group row">
                                                <label class="col-2 col-form-label">Project ID</label>
                                                <div class="col-2">
                                                    <input type="text" class="form-control" id="project_id" name="project_id" readonly="" value="{{$table->project_id}}">
                                                </div>
                                                <div class="col-1">
                                                </div>
                                                 <label class="col-2 col-form-label" for="Tema">Tema</label>
                                                <div class="col-2">
                                                    <input type="text" id="tema" name="tema" class="form-control" readonly="" value="{{$table->tema}}">
                                                </div>
                                                 <div class="col-2">
                                                    <input type="hidden" id="tgl_assign" name="tgl_assign" class="form-control" readonly="" value="{{$table->created_at}}">
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Level Project</label>
                                                <div class="col-2">
                                                    <input type="text" class="form-control" id="level_project" name="level_project" readonly="" value="{{$table->level_project}}">
                                                </div>
                                                <div class="col-1">
                                                </div>
                                                <label class="col-2 col-form-label" for="source">Source</label>
                                                <div class="col-2">
                                                    <input type="text" id="source" name="source" class="form-control" readonly="" value="{{$table->source}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Type</label>
                                                <div class="col-2">
                                                    <input type="text" class="form-control" id="type_project" name="type_project" readonly="" value="{{$table->type_project}}">
                                                </div>
                                                  <div class="col-1">
                                                </div>
                                                 <label class="col-2 col-form-label" for="pic">PIC</label>
                                                <div class="col-2">
                                                    <input type="text" id="pic" name="pic" class="form-control" readonly="" value="{{$table->pic}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Deadline</label>
                                                <div class="col-2">
                                                    <input type="text" class="form-control" id="deadline" name="deadline" readonly="" value="{{$table->deadline}}">
                                                </div>
                                                  <div class="col-1">
                                                </div>
                                                <label class="col-2 col-form-label">Note</label>
                                                <div class="col-2">
                                                    <textarea class="form-control" rows="5" name="note" id="note" readonly="">{{$table->note}}</textarea>
                                                </div>
                                            </div>
                                     
                                 

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label">Status Project</label>
                                                <div class="col-2">
                                                    <select class="form-control" id="status_project" name="status_project">
                                                        <option value="Not Accept" <?php if($table->status_project == "Not Accept"){echo "selected='true'";} ?>>Not Accept</option>
                                                        <option value="Accept" <?php if($table->status_project == "Accept"){echo "selected='true'";}?> >Accept</option>
                                                      
                                                    </select>
                                             
                                                </div>
                                            </div>

                                        

                                              <div class="form-group row">
                                                <label class="col-2 col-form-label"></label>
                                                <div class="col-4">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                     <a href="{{URL::to('/projectwaiting')}}" class="btn btn-outline-dark btn-rounded waves-light waves-effectmd" role="button">Cancel</a>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                  <button type="submit" class="btn btn-outline-success btn-rounded waves-light waves-effect">Accept</button>
                                             
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