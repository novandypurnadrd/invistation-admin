<!DOCTYPE html>
<html>
    <head>
        @include ('includes.head')

    </head>

    <body>

        <!-- Begin page -->
        <div class="accountbg" style="background: url('assets/images/bg-1.jpg');background-size: cover;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <h2 class="text-uppercase text-center pb-4">
                                <a href="index.html" class="text-success">
                                    <span><img src="assets/images/logo.png" alt="" height="26"></span>
                                </a>
                            </h2>

                             <form class="form-horizontal" role="form" action="{{URL::to('/signin')}}" method="POST">

                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                        <label for="emailaddress">Username</label>
                                        <input class="form-control" type="text" id="username" name="username" required="" placeholder="Enter your Username">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                      
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required="" id="password" name="password" placeholder="Enter your password">
                                    </div>
                                </div>

                               <div class="form-group row m-b-20">
                                    <div class="col-12">

                                      
                                           
                                            <label for="remember">
                                                {{$msg}}
                                            </label>
                                 

                                    </div>
                                </div>

                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Sign In</button>
                                    </div>
                                </div>

                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="PUT">

                            </form>

                        

                        </div>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="account-copyright">2018 © admin-insvistation. Invistation.com</p>
            </div>

        </div>


     @include ('includes.script')

    </body>
</html>