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
                    <h3 class="breadcrumb-header text-center">FICHE D'ENREGISTREMENT DE CLIENT</h3>
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
                            <h4 class="card-title">INFORMATIONS DU CLIENT</h4>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation" method="POST" action="" novalidate>
                                <div class="form-row">

                                     <div class="col-md-6 mb-3">
                                     <label>Sexe</label>
                                       <select id="sexe" name="sexe"" class="form-control">
                                            <option value="">Séléctionner</option>
                                            <option value="monsieur">Monsieur</option>
                                            <option value="madame">Madame</option>
                                        </select> 
                                     </div>

                                    <div class="col-md-6 mb-3">
                                    <label>Code du client</label>
                                        <?php global $code;?>
                                        <input type="text" readonly value="<?="CLIENT".$codeclient;?>" name="code" class="form-control" placeholder="Saisir le Nom du client" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Nom</label>
                                        <?php global $nom;?>
                                        <input type="text" value="<?=$nom;?>" name="nom" class="form-control" placeholder="Saisir le Nom du client" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Prénom</label>
                                        <?php global $prenom;?>
                                        <input type="text" value="<?=$prenom;?>" name="prenom" class="form-control" placeholder="Saisir le prenom du client" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Adresse</label>
                                        <?php global $adresse;?>
                                        <input type="text" name="adresse"  value="<?=$adresse;?>" class="form-control" placeholder="Saisir l'adresse du client" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Société</label>
                                        <?php global $societe;?>
                                        <input type="text" value="<?=$societe;?>" name="societe" class="form-control" placeholder="Saisir la societé (Facultatif) " required>
                                    </div>
                                  
                                    <div class="col-md-6 mb-3">
                                        <label>Téléphone</label>
                                        <?php global $telephone;?>
                                        <input type="number" name="telephone"  value="<?=$telephone;?>" class="form-control" placeholder="Saisir le Numéro du client" required>
                                    </div>
                                  
                                  
                                    <div class="col-md-6 mb-3">
                                        <label>Email</label>
                                        <?php global $email;?>
                                        <input type="text" name="email"  value="<?=$email;?>" class="form-control" placeholder="Saisir l'email du client" required>
                                    </div>
                                    
                                </div>
                                <button class="btn btn-primary" type="submit">Valider</button>
                            </form>
                        </div>
                    </div>


                    <div class="card card-white">
                        <div class="card-heading clearfix">
                            <h4 class="card-title">Liste des clients</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table-bordered">
                                <table class="display table" style="width: 100%;">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Prenom et nom</th>
                                            <th>Adresse</th>
                                            <th>Société</th>
                                            <th>Téléphone</th>
                                            <th>Email</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($clients as $client):?>
                                        <tr>
                                            <td><?=$client->nom." ".$client->prenom?></td>
                                            <td><?=$client->adresse?></td>
                                            <td><?=$client->societe?></td>
                                            <td><?=$client->telephone?></td>
                                            <td><?=$client->email?></td>
                                            <td class="text-center">
                                                <a href="<?= redirect_with_id('modifclient', $client->CID) ?>"><i class="fas fa-edit"></i></a>
                                                &nbsp; &nbsp;
                                                <a href="<?= redirect_with_id('client', $client->CID) ?>"> <i class="fas fa-trash"></i></a>
                                                &nbsp; &nbsp;
                                                <a href="<?= redirect_with_id('print', $client->CID) ?>"> <i class="fas fa-print"></i></a>
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
            $('.table').DataTable();
        </script>
</body>

</html>