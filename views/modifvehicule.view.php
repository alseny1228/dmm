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
                    <h3 class="breadcrumb-header text-center">FORMULAIRE DE MODIFICATION D'UN VEHICULE</h3>
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
                                   <?php foreach($vehicule as $vcule):?>
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
                                        <input type="text" readonly value="<?=$vcule->codevehicule;?>" name="codev" class="form-control">
                                    </div>
                                   
                                        <input hidden type="text" readonly value="<?=$vcule->VID;?>" name="vid" class="form-control">
                                
                                    <div class="col-md-6 mb-3">
                                    <label for="">Marque</label>
                                        <?php global $marque;?>
                                        <input type="text" value="<?=$vcule->marque;?>" name="marque" class="form-control" placeholder="Saisir la marque du vehicule" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                    <label for="">Kilomètrage</label>
                                        <?php global $kilometrage;?>
                                        <input type="number" value="<?=$vcule->kilometrage;?>" name="km" class="form-control" placeholder="Saisir le kilomètrage du véhicule" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                    <label for="">Model</label>
                                        <?php global $modele;?>
                                        <input type="text" value="<?=$vcule->modele;?>" name="modele" class="form-control" placeholder="Saisir le modele" required>
                                    </div>
                                   
                                    <div class="col-md-6 mb-3">
                                    <label for="">Date de début de réparation</label>
                                        <?php global $datedebut;?>
                                        <input type="date" value="<?=$vcule->datedebut;?>" name="datedebut" class="form-control" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                    <label for="">Immatriculation</label>
                                        <?php global $immatriculation;?>
                                        <input type="text" value="<?=$vcule->immatriculation;?>" name="imma" class="form-control" placeholder="Saisir l'immatriculation du véhicule" required>
                                    </div>
                                  
                            
                                    <input type="text" hidden value="<?=$vcule->immatriculation;?>" name="imma1">
                                    
                                    
                                    <div class="col-md-6 mb-3">
                                    <label for="">Date de fin de réparation</label>
                                        <?php global $datefin;?>
                                        <input type="date" value="<?=$vcule->datefin;?>" name="datefin" class="form-control" required>
                                    </div>
                                    
                                      
                                    <div class="col-md-6 mb-3">
                                        <label class="text-white" for="">.</label>
                                        <button class="btn btn-primary btn">Modifier</button>
                                    </div>
                                    <?php endforeach;?>
                            </form>
                        </div>
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