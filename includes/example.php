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

                    </div>
                    <!-- Row -->
                </div>
                <!-- end page main wrapper -->
                <div class="page-footer">
                    <p>Copyright &COPY; <?= date('Y') ?> <?= SITE_NAME ?> Tous droits réservés.</p>
                </div>
            </div>
            <!-- end page inner -->
            <?php require_once('includes/nofication.inc.php') ?>
        </div>
    </div>
    <?php require_once('includes/footer.inc.php') ?>
    <?php require_once('includes/foot.inc.php') ?>
</body>

</html>