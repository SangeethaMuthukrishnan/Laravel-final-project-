<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Contact-form</title>

    <!-- Icons font CSS-->
    <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('css/main.css')}}" rel="stylesheet" media="all">
</head>

<body>
<a href="{{url('/contact')}}">Home page</a>
<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
    <div class="wrapper wrapper--w790">

        <div class="card card-5">
            <div class="card-heading">
                <h2 class="title">user registration</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{url('/registration-details-store')}}">
                    {!! csrf_field() !!}
                    <div class="form-row m-b-55">
                        <div class="name">Name</div>
                        <div class="value">
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group-desc">
                                        <input class="input--style-5" type="text" name="first_name" required>
                                        <label class="label--desc">first name</label>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group-desc">
                                        <input class="input--style-5" type="text" name="last_name" required>
                                        <label class="label--desc">last name</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Company</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" name="company" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Email</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="email" name="email" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="phone">Phone</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="number" name="phone" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="password">Password</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="password" name="password" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="confirm_password">Confirm password</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="confirm_password" name="password_confirmation" required>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn--radius-2 btn--red" type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Jquery JS-->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<!-- Vendor JS-->
<script src="{{asset('vendor/select2/select2.min.js')}}"></script>
<script src="{{asset('vendor/datepicker/moment.min.js')}}"></script>
<script src="{{asset('vendor/datepicker/daterangepicker.js')}}"></script>

<!-- Main JS-->
<script src="{{asset('js/global.js')}}"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
