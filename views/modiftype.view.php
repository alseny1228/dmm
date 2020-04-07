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
                    <h3 class="breadcrumb-header">forumlaire d'ajoute un type</h3>
                </div>
                <!-- start page main wrapper -->
                <div id="main-wrapper">

                    <?php if($error!=""):?>
                         <div class="alert alert-danger" role="alert"><?php echo $error?></div>
                      <?php endif?> 
                    <?php if($errornom!=""):?>
                         <div class="alert alert-danger" role="alert"><?php echo $errornom?></div>
                      <?php endif?> 
                     
                    <div class="card card-white">
                        <div class="card-heading clearfix">
                            <h4 class="card-title">Ajout d'un type</h4>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation" method="POST" action="" novalidate>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <?php global $type;?>
                                        <?php if(isset($_GET) AND !empty($_GET)):?>
                                         <?php foreach ($type1 as $typ):?>
                                            <input type="text" hidden value="<?=$typ->TID;?>" name="tid" class="form-control" placeholder="Saisir le type du vehicule" required>
                                            <input type="text" value="<?=$typ->type;?>" name="type" class="form-control" placeholder="Saisir le type du vehicule" required>
                                        <?php endforeach;?>
                                        <?php endif;?>

                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Modifier</button>
                            </form>
                        </div>
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
        <script src="<?= LINK ?>assets/ajax/script.js?v=<?= uniqid() ?>"></script>
</body>

</html>