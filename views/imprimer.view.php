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
                    <h3 class="breadcrumb-header">forumlaire d'ajout d'une opération</h3>
                </div>
                <!-- start page main wrapper -->
                <div id="main-wrapper">

                    <div class="card card-white">
                        <div class="card-heading clearfix">
                            <h4 class="card-title">Ajouter une opération</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <input id="adresse" name="montant" type="number" placeholder="montant" class="form-control">
                                            </div>
                                            <div class="col-md-12 mb-0">
                                                <input id="dates" type="date" name="dates" class="form-control">
                                            </div>
                                            <div class="col-md-2 mt-0">
                                                <input type="submit" name="v" value="Imprimer" class="btn btn-primary mt-3 mb-3">
                                            </div>
                                        </div>
                                      </div>
                                   </form>
                            </div>
                        </div>
                        <div class="page-footer">
                            <p>Copyright &COPY; <?= date('Y') ?> <?= SITE_NAME ?> Tous droits réservés.</p>
                        </div>
                    </div>
                    <?php require_once('includes/notification.inc.php') ?>
                </div>
            </div>
            <?php require_once('includes/footer.inc.php') ?>
            <?php require_once('includes/foot.inc.php') ?>
            <script src="<?= LINK ?>assets/ajax/paiements.js?v=<?= uniqid() ?>"></script>
            <script>
                // $('#sel').select2();
            </script>

</body>

</html>