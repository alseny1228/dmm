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
                    <h3 class="breadcrumb-header">forumlaire de modification d'une immatriculation</h3>
                </div>
                <!-- start page main wrapper -->
                <div id="main-wrapper">

                    <?php if($error!=""):?>
                         <div class="alert alert-danger" role="alert"><?php echo $error?></div>
                      <?php endif?> 
                      <?php if($errornom!=""):?>
                         <div class="alert alert-danger" role="alert"><?php echo $errornom?></div>
                      <?php endif?>
                     
                      <?php if($success!=""):?>
                         <div class="alert alert-success" role="alert"><?php echo $success?></div>
                      <?php endif?> 
                    <div class="card card-white">
                        <div class="card-heading clearfix">
                            <h4 class="card-title">Modification d'immatriculation</h4>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation" method="POST" action="" novalidate>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <?php global $immatriculation;?>
                                        <?php foreach ($immas as $imma):?>
                                            <input type="text" hidden value="<?=$imma->IID;?>" name="iid" class="form-control" placeholder="Saisir l'immatriculation du vehicule" required>
                                            <input type="text" value="<?=$imma->titreimmatriculation;?>" name="immatriculation" class="form-control" placeholder="Saisir l'immatriculation du vehicule" required>
                                        <?php endforeach;?>
                                    </div>
                                            <!-- <label class="col-md-6 col-form-label">Select</label> -->
                                            <div class="col-md-6 col-12">
                                            <?php global $type; ?>
                                                <select name="type" id="sel" class="form-control">
                                                    <option value="">Séléctionner</option>
                                                    <?php foreach ($types as $type) :?>
                                                        <option value="<?=$type->TID?>"><?=$type->type?></option>
                                                    <?php endforeach;?>
                                                </select>
                                            </div>
                                        </div>
                                     </div>
                                <button class="btn btn-primary col-md-2 mt-3" type="submit">Modifier</button>
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
        <script>
            $('#sel').select2();
        </script>
</body>

</html>