<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('includes/head.inc.php') ?>
</head>

<body>
    <div class="page-container">
        <?php require_once('includes/sidebar.inc.php') ?>
        <!-- start page content -->
        <div class="page-content">
            <?php require_once('includes/header.inc.php') ?>
            <div class="page-inner">
                <div class="page-title">
                    <h3 class="breadcrumb-header">Blank Page</h3>
                </div>
                <!-- start page main wrapper -->
                <div id="main-wrapper">
                <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="card card-white stats-widget">
                                <div class="card-body">
                                    <div class="float-left">
                                        <span class="stats-number">$815,233</span>
                                        <p class="stats-info">Total Profit</p>
                                    </div>
                                    <div class="float-right">
                                        <i class="fas fa-dollar-sign text-primary stats-icon"></i>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="progress mb-0 mt-3">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="card card-white stats-widget">
                                <div class="card-body">
                                    <div class="float-left">
                                        <span class="stats-number">178,100</span>
                                        <p class="stats-info">New Feedbacks</p>
                                    </div>
                                    <div class="float-right">
                                        <i class="fas fa-download stats-icon text-danger"></i>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="progress mb-0 mt-3">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="card card-white stats-widget">
                                <div class="card-body">
                                    <div class="float-left">
                                        <span class="stats-number">+55,256</span>
                                        <p class="stats-info">New Orders</p>
                                    </div>
                                    <div class="float-right">
                                        <i class="fas fa-user-plus stats-icon text-warning"></i>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="progress mb-0 mt-3">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                            <span class="sr-only">40% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="card card-white stats-widget">
                                <div class="card-body">
                                    <div class="float-left">
                                        <span class="stats-number">58%</span>
                                        <p class="stats-info">New Users</p>
                                    </div>
                                    <div class="float-right">
                                        <i class="fas fa-tasks stats-icon text-success"></i>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="progress mb-0 mt-3">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100" style="width: 58%;">
                                            <span class="sr-only">58% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row -->
              
                    <!-- Row -->
                </div>
                <!-- end page main wrapper -->
                <div class="page-footer">
                    <p>Copyright &COPY; <?= date('Y') ?> <?= SITE_NAME ?> Tous droits réservés.</p>
                </div>
            </div>
            <!-- end page inner -->

            <?php require_once('includes/notification.inc.php') ?>

        </div>

    </div>
    <?php require_once('includes/footer.inc.php') ?>

    <?php require_once('includes/foot.inc.php') ?>
</body>

</html>