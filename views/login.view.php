<!DOCTYPE html>
<html lang="en">

<head>

    <?php require_once('includes/head.inc.php') ?>

</head>

<body>

    <!-- start page loading -->
    <div id="preloader">
        <div class="row loader">
            <div class="loader-icon"></div>
        </div>
    </div>
    <!-- end page loading -->

    <!-- start page container -->
    <div class="page-container">
        <!-- start page inner -->
        <div class="page-inner login-page">
            <div id="main-wrapper" class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 login-box">
                        <h4 class="login-title">Sign in to your account</h4>
                        <form method="POST" action="">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input name="email" type="email" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <input class="btn btn-primary btn-block" type="submit" value="Se connecter">
                            <br>
                            <a href="index.html" class="forgot-link">Mot de passe oublié?</a>
                        </form>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-6">
                        <div class="slide1">
                            <img src="" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page right sidebar -->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page container -->

    <!-- all js include start -->

    <?php require_once('includes/foot.inc.php') ?>

</body>

</html>