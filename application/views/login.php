<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>KALgen INNOLAB</title>
    <!-- MDB icon -->
   
    <link rel="icon" href="<?= base_url() ?>assets/images/kalgen.gif" type="image/x-icon">
    <!-- LOAD STYLES -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/lib/fontawesome/fa.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/lib/fonts/googleFontRoboto.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/lib/bootstrap/dist/css/bootstrap.min.css" />
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/lib/bootstrap/dist/css/mdb.css" />
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/custom-login.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/site.css" />
    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/lib/jquery/dist/jquery.min.js"></script>

</head>
<body class="login-bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-lg-5">

                <!--Form with header-->
                <div class="login-card wow fadeIn" data-wow-delay="0.3s">
                    <div class="login-card-body">

                        <!--Header-->
                        <div class="logo-wrapper">
                            <img src="<?= base_url() ?>assets/images/kalgen_LOGO.png" alt=""/> 
                        </div>

                        <!-- Form -->
                        <form action="<?php echo base_url('login/submit') ?>" method="post">
                            <!-- Material input email -->
                            <div class="md-form md-form">
                                <i class="fa fa-user prefix grey-text"></i>
                                <input type="text" name="username" class="form-control" required>
                                <label for="Username" class="font-weight-light">Your Username</label>
                            </div>
                            <!-- Material input password -->
                            <div class="md-form">
                                <i class="fa fa-lock prefix grey-text"></i>
                                <input type="password" name="password" class="form-control" required>
                                <label for="Password" class="font-weight-light">Your password</label>
                            </div>
                            <!-- Form -->
                            <div class="text-center">
                                <button class="btn btn-card waves-effect waves-light" type="submit"><i class="fas fa-sign-in-alt pr-2"></i>LOG IN</button>
                                <hr>
                                <div class="login-card-footer text-center justify-content-center" style="color: #fff;">
                                    <p style="margin-bottom: 0rem">© <?php echo date('Y') ?> - KALgen INNOLAB</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--/Form with header-->

            </div>
        </div>
    </div>

    <!-- Material form login -->
    <!-- LOAD SCRIPT -->
    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/lib/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/lib/bootstrap/dist/js/wow.js"></script>
    <!-- MDB core JavaScript -->
    <script src="<?= base_url() ?>assets/lib/bootstrap/dist/js/mdb.min.js"></script>
</body>
</html>