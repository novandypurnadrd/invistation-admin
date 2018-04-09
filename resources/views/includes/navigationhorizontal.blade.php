 <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="{{ action('invistation@dashboard') }}"><i class="icon-speedometer"></i>Dashboard</a>
                            </li>

                            <?php if (Session::get('level') == "admin") {?>
                            <li class="has-submenu">
                                <a href="#"><i class="icon-layers"></i>Order</a>
                                <ul class="submenu">
                                    <li><a href="{{ action('orderin@show') }}">Order - In</a></li>
                                    <li><a href="{{ action('orderconfirmed@show') }}">Order - Confirmed</a></li>
                                 
                                </ul>
                            </li>
                            <?php } ?>
                            <li class="has-submenu">
                                <a href="#"><i class="icon-briefcase"></i>Project</a>
                                <ul class="submenu">
                                    <li><a href="{{ action('projectwaiting@show') }}">Project - Waiting</a></li>
                                    <li><a href="{{ action('projectonprogres@show') }}">Project - On progres</a></li>
                                    <li><a href="{{ action('projectdone@show') }}">Project - Done</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="icon-fire"></i>Template</a>
                                <ul class="submenu">
                                  
                                      
                                    <li class="has-submenu">
                                        <a href="#">Web Invitation</a>
                                        <ul class="submenu">
                                            <li><a href="{{ action('web@add') }}">Add</a></li>
                                            <li><a href="{{ action('web@show') }}">List</a></li>
                                           
                                        </ul>
                                    </li>      
                                    <li class="has-submenu">
                                        <a href="#">Grafis Invitation</a>
                                        <ul class="submenu">
                                            <li><a href="{{ action('grafis@add') }}">Add</a></li>
                                            <li><a href="{{ action('grafis@show') }}">List</a></li>
                                                       
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Video Invitation</a>
                                        <ul class="submenu">
                                            <li><a href="{{ action('video@add') }}">Add</a></li>
                                            <li><a href="{{ action('video@show') }}">List</a></li>
                                                 
                                        </ul>
                                    </li>

                               
                                </ul>
                            </li>


                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-money"></i>In & Out</a>

                                <ul class="submenu">
                                  
                                      
                                    <li class="has-submenu">
                                        <li><a href="{{ action('inout@showIn') }}">Balance In</a></li>
                                       
                                    </li>      
                                    <li class="has-submenu">
                                        <a href="#">Balance Out</a>
                                        <ul class="submenu">
                                            <li><a href="{{ action('inout@add') }}">Add</a></li>
                                            <li><a href="{{ action('inout@showOut') }}">List</a></li>
                                                       
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <li><a href="{{ action('inout@openReport') }}">Report</a></li>
                                       
                                    </li> 

                               
                                </ul>
                            </li>


                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->