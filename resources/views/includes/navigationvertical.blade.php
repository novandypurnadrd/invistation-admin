 <div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="index.html" class="logo">
                            <span>
                                <img src="{{ URL::asset('images/logo.png') }}" alt="" height="22">
                            </span>
                            <i>
                                <img src="{{ URL::asset('images/logo_sm.png') }}" alt="" height="28">
                            </i>
                        </a>
                    </div>

                    <!-- User box -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="{{ URL::asset('images/users/avatar-1.jpg') }}" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        </div>
                        <h5><a href="#">Maxine Kennedy 12</a> </h5>
                        <p class="text-muted">Admin Head</p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <!--<li class="menu-title">Navigation</li>-->

                            <li>
                                <a href="{{ action('invistation@dashboard') }}">
                                    <i class="fi-air-play"></i> <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-layers"></i> <span> Order </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ action('orderin@show') }}">Order - In</a></li>
                                    <li><a href="{{ action('orderconfirmed@show') }}">Order - Confirmed</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-mail"></i><span> Project </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                  <li><a href="{{ action('projectwaiting@show') }}">Project - Waiting</a></li>
                                    <li><a href="{{ action('projectonprogres@show') }}">Project - On progres</a></li>
                                    <li><a href="{{ action('projectdone@show') }}">Project - Done</a></li>
                                </ul>
                            </li>

                         

                            <li>
                                <a href="javascript: void(0);"><i class="fi-share"></i> <span> Template </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level nav" aria-expanded="false">
                                   
                                    <li><a href="javascript: void(0);" aria-expanded="false">Web Invitation <span class="menu-arrow"></span></a>
                                        <ul class="nav-third-level nav" aria-expanded="false">
                                            <li><a href="{{ action('web@add') }}">Add</a></li>
                                            <li><a href="{{ action('web@show') }}">List</a></li>
                                        </ul>
                                    </li>
                                      <li><a href="javascript: void(0);" aria-expanded="false">Grafis Invitation <span class="menu-arrow"></span></a>
                                        <ul class="nav-third-level nav" aria-expanded="false">
                                            <li><a href="{{ action('grafis@add') }}">Add</a></li>
                                            <li><a href="{{ action('grafis@show') }}">List</a></li>
                                        </ul>
                                    </li>
                                      <li><a href="javascript: void(0);" aria-expanded="false">Video Invitation <span class="menu-arrow"></span></a>
                                        <ul class="nav-third-level nav" aria-expanded="false">
                                            <li><a href="{{ action('web@add') }}">Add</a></li>
                                            <li><a href="{{ action('web@show') }}">List</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                        </ul>

                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->