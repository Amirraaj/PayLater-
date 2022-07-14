<body>

    <div class="menu">
        <div class="logo">


            <img src="{{ asset('resources/Admin/layouts/images/1.png') }}" class="img">
        </div>
        @include('Auth\AdminPanel\Layout\Nav')
    </div>

    <div class="container">
        <h1>Setting</h1>
        <div class="Section-Divider"><br><br>
            <div class="ShoeNav">
                <a href="{{ Route('register-page') }}"><button class="Btn-Nav">Register</button></a>
                <a href="{{ Route('password-page') }}"><button class="Btn-Nav">Change Password</button></a>
            </div>
            <div>
                <br><br><br>
                <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"
                    id="bootstrap-css">
                <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
                <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <!------ Include the above in your HEAD tag ---------->

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">Register</div>
                                <div class="card-body">

                                    <form action="{{ route('insert-data') }}" method="POST" class="form-horizontal">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name" class="cols-sm-2 control-label">Your Name</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user fa"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" name="Name"
                                                        placeholder="Enter your Name" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="cols-sm-2 control-label">Your Email</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope fa"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" name="Email"
                                                        placeholder="Enter your Email" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="username" class="cols-sm-2 control-label">Username</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-users fa"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" name="Username"
                                                        placeholder="Enter your Username" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="cols-sm-2 control-label">Password</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg"
                                                            aria-hidden="true"></i></span>
                                                    <input type="password" class="form-control" name="Password"
                                                        placeholder="Enter your Password" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">

                                                <button  type="submit"
                                                class="btn btn-primary btn-lg btn-block login-button">Register</button>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>


        </div>

    </div>

</body>

</html>
