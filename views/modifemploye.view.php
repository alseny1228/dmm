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

                    <?php if($error!=""):?>
                         <div class="alert alert-danger" role="alert"><?php echo $error?></div>
                      <?php endif?> 
                      <?php if($errornom!=""):?>
                         <div class="alert alert-danger" role="alert"><?php echo $errornom?></div>
                      <?php endif?>
                      <?php if($errortel!=""):?>
                         <div class="alert alert-danger" role="alert"><?php echo $errortel?></div>
                      <?php endif?>
                      <?php if($errornum!=""):?>
                         <div class="alert alert-danger" role="alert"><?php echo $errornum?></div>
                      <?php endif?>
                      <?php if($success!=""):?>
                         <div class="alert alert-success" role="alert"><?php echo $success?></div>
                      <?php endif?> 
                    <div class="card card-white">
                        <div class="card-heading clearfix">
                            <h4 class="card-title">Custom Form</h4>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation" method="POST" action="" novalidate>
                                <div class="form-row">

                                <?php foreach ($client as $clt):?>
                                    <div class="col-md-6 mb-3">
                                    <input type="text" hidden value="<?=$clt->CID;?>" name="cid" class="form-control" placeholder="Saisir le Nom du client ou de l'entreprise" required>

                                        <label>Nom complet de l'employé</label>
                                        <?php global $intitule;?>
                                        <input type="text" value="<?=$clt->intitule;?>" name="intitule" class="form-control" placeholder="Nom complet de l'employé" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Adresse</label>
                                        <?php global $adresse;?>
                                        <input type="text" name="adresse"  value="<?=$clt->adresse;?>" class="form-control" placeholder="Saisir l'adresse du client" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Téléphone</label>
                                        <?php global $telephone;?>
                                        <input type="number" name="telephone"  value="<?=$clt->telephone;?>" class="form-control" placeholder="Saisir le Numéro du client" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Email</label>
                                        <?php global $email;?>
                                        <input type="text" name="email"  value="<?=$clt->email;?>" class="form-control" placeholder="Saisir l'email du client" required>
                                    </div>
                                <?php endforeach;?>
                                </div>
                                <button class="btn btn-primary" type="submit">Valider</button>
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