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
                     
                      <?php if($success!=""):?>
                         <div class="alert alert-success" role="alert"><?php echo $success?></div>
                      <?php endif?> 
                    <div class="card card-white">
                        <div class="card-heading clearfix">
                            <h4 class="card-title">Ajout d'un type</h4>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation" method="POST" action="" novalidate>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <?php global $immatriculation;?>
                                        <input type="text" value="<?=$immatriculation;?>" name="immatriculation" class="form-control" placeholder="Saisir l'immatriculation du vehicule" required>
                                    </div>
                                            <!-- <label class="col-md-6 col-form-label">Select</label> -->
                                            <div class="col-md-6 col-12">
                                            <?php global $type; ?>
                                                <select name="type" id="sel" class="form-control select">
                                                    <option value="">Séléctionner</option>
                                                    <?php foreach ($types as $type) :?>
                                                        <option value="<?=($type->TID==$type) ? '':'selected'?>"><?=$type->type?></option>
                                                    <?php endforeach;?>
                                                </select>
                                            </div>
                                        </div>
                                     </div>
                                <button class="btn btn-primary col-md-2 mt-3" type="submit">Valider</button>
                            </form>
                        </div>
                    </div>

                    <div class="card card-white">
                        <div class="card-heading clearfix">
                            <h4 class="card-title">Liste des types</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table-bordered">
                                <table id="example" class="display table" style="width: 100%;">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Numéro</th>
                                            <th>Type</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($immatriculations as $immatriculation):?>
                                        <tr>
                                            <td><?=$immatriculation->IID?></td>
                                            <td><?=$immatriculation->titreimmatriculation?></td>
                                            <td class="text-center">
                                                <a href="<?= redirect_with_id('modifimmatriculation', $immatriculation->IID) ?>"><i class="fas fa-edit"></i></a>
                                                &nbsp; &nbsp;
                                                <a href="<?= redirect_with_id('immatriculation', $immatriculation->IID) ?>"> <i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php endforeach?>
                                    </tbody>
                                </table>
                            </div>
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