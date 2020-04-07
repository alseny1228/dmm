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
                    <h3 class="breadcrumb-header text-center">FORMULAIRE D'AJOUT D'UN VEHICULE</h3>
                </div>
                <!-- start page main wrapper -->
                <div id="main-wrapper">
                     <?php if($error!=""):?>
                         <div class="alert alert-danger" role="alert"><?php echo $error?></div>
                      <?php endif?>
                      <?php if($errortel!=""):?>
                         <div class="alert alert-danger" role="alert"><?php echo $errortel?></div>
                      <?php endif?>
                      <?php if($erroremail!=""):?>
                         <div class="alert alert-danger" role="alert"><?php echo $erroremail?></div>
                      <?php endif?>
                      <?php if($success!=""):?>
                         <div class="alert alert-success" role="alert"><?php echo $success?></div>
                      <?php endif?> 
                      <?php if($warning!=""):?>
                         <div class="alert alert-warning" role="alert"><?php echo $warning?></div>
                      <?php endif?> 

                    <div class="card card-white">
                        <div class="card-heading clearfix">
                            <h4 class="card-title">Informaiton du vehicule</h4>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation" method="POST" action="" novalidate>
                                <div class="form-row">
                                   
                                    <div class="col-md-6 mb-3">
                                     <label>Proprietaire</label>
                                        <select name="cid"" class="form-control">
                                           
                                            <option value="">Séléctionner</option>
                                            <?php foreach($clients as $client):?>
                                                <option value="<?=$client->CID?>"><?=$client->nom.' '.$client->prenom?></option>
                                            <?php endforeach?>
                                            <option value="madame">Madame</option>
                                        </select>
                                     </div>
                                     <div class="col-md-6 mb-3">
                                     <label for="">Code du vehicule</label>
                                        <?php global $code;?>
                                        <input type="text" readonly value="<?=$code;?>" name="codev" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                    <label for="">Marque</label>
                                        <?php global $marque;?>
                                        <input type="text" value="<?=$marque;?>" name="marque" class="form-control" placeholder="Saisir la marque du vehicule" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                    <label for="">Kilomètrage</label>
                                        <?php global $kilometrage;?>
                                        <input type="number" value="<?=$kilometrage;?>" name="km" class="form-control" placeholder="Saisir le kilomètrage du véhicule" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                    <label for="">Model</label>
                                        <?php global $modele;?>
                                        <input type="text" value="<?=$modele;?>" name="modele" class="form-control" placeholder="Saisir le modele" required>
                                    </div>
                                   
                                    <div class="col-md-6 mb-3">
                                    <label for="">Date de début de réparation</label>
                                        <?php global $datedebut;?>
                                        <input type="date" value="<?=$datedebut;?>" name="datedebut" class="form-control" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                    <label for="">Immatriculation</label>
                                        <?php global $immatriculation;?>
                                        <input type="text" value="<?=$immatriculation;?>" name="imma" class="form-control" placeholder="Saisir l'immatriculation du véhicule" required>
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                    <label for="">Date de fin de réparation</label>
                                        <?php global $datefin;?>
                                        <input type="date" value="<?=$datefin;?>" name="datefin" class="form-control" required>
                                    </div>
                                    
                                      
                                    <div class="col-md-6 mb-3">
                                        <label class="text-white" for="">.</label>
                                        <button class="btn btn-primary btn">Valider</button>
                                    </div>
                               
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
                                            <th>Code véhicule</th>
                                            <th>Immatriculation</th>
                                            <th>Marque</th>
                                            <th>Modele</th>
                                            <th>Kilomètrage</th>
                                      
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($vehicules as $vehicule):?>
                                        <tr>
                                            <td><?=$vehicule->codevehicule?></td>
                                            <td><?=$vehicule->immatriculation?></td>
                                            <td><?=$vehicule->marque?></td>
                                            <td><?=$vehicule->modele?></td>
                                            <td><?=$vehicule->kilometrage?></td>
                                           
                                            <td class="text-center">
                                                <a href="<?= redirect_with_id('modifvehicule', $vehicule->VID) ?>"><i class="fas fa-edit"></i></a>
                                                &nbsp; &nbsp;
                                                <a href="<?= redirect_with_id('vehicule', $vehicule->VID) ?>"> <i class="fas fa-trash"></i></a>
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
</body>

</html>