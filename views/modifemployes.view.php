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
                      <?php if($errornum1!=""):?>
                         <div class="alert alert-danger" role="alert"><?php echo $errornum1?></div>
                      <?php endif?>
                      <?php if($success!=""):?>
                         <div class="alert alert-success" role="alert"><?php echo $success?></div>
                      <?php endif?> 
                    <div class="card card-white">
                        <div class="card-heading clearfix">
                            <h4 class="card-title">Nouveau Employé</h4>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation" method="POST" action="" novalidate>
                                <div class="form-row">
                                    <?php foreach($employe as $emp) :?> 
                                    <div class="col-md-6 mb-3">
                                        <label>Nom complet de l'employé</label>
                                        <?php global $nom;?>
                                        <input type="text" value="<?=$emp->nom;?>" name="nom" class="form-control" placeholder="Nom" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Prenom</label>
                                        <?php global $prenom;?>
                                        <input type="text" name="prenom"  value="<?=$emp->prenom;?>" class="form-control" placeholder="Prenom" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Adresse</label>
                                        <?php global $adresse;?>
                                        <input type="text" name="adresse"  value="<?=$emp->adresse;?>" class="form-control" placeholder="Adresse" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Téléphone</label>
                                        <?php global $telephone;?>
                                        <input type="number" name="telephone"  value="<?=$emp->telephone;?>" class="form-control" placeholder="Saisir le Numéro de l'employé" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Sexe</label>
                                        <?php global $sexe;?>
                                        <select name="sexe"" class="form-control">
                                            <option value="">Séléctionner</option>
                                            <option value="homme">Homme</option>
                                            <option value="femme">Femme</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Etat</label>
                                        <?php global $etat;?>
                                        <select name="etat" class="form-control">
                                            <option value="">Séléctionner</option>
                                            <option value="1">Actif</option>
                                            <option value="0">Inactif</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Fonction</label>
                                        <?php global $fonction;?>
                                        <select name="fonction"" class="form-control">
                                            <option value="">Séléctionner</option>
                                            <?php foreach($fonctions as $f):?>
                                                    <option value="<?=$f->nom?>"><?=$f->nom?></option>
                                                <?php endforeach?>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Profession</label>
                                        <select name="profession"" class="form-control">
                                            <option value="">Séléctionner</option>
                                                <?php foreach($professions as $p):?>
                                                    <option value="<?=$p->nom?>"><?=$p->nom?></option>
                                                <?php endforeach?>
                                            </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Type de contrat</label>
                                        <?php global $typecontrat;?>
                                        <select name="typecontrat"" class="form-control">
                                            <option value="">Séléctionner</option>
                                            <option value="CDD">CDD</option>
                                            <option value="CDI">CDI</option>
                                            <option value="stagiaire">Stagiaire</option>
                                            <option value="benivolat">Benivolat</option>
                                            <option value="partenariat">Partenariat</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Role</label>
                                        <?php global $role;?>
                                        <select name="role" class="form-control">
                                            <option value="">Séléctionner</option>
                                            <option value="Administrateur">Aministrateur</option>
                                            <option value="Comptable">Comptable</option>
                                            <option value="Directeur">Directeur</option>
                                            <option value="Agent commercial">Agent commercial</option>
                                            <option value="Assistant(e) de direction">Assistant(e) de direction</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Date d'embauche</label>
                                        <?php global $dateembauche;?>
                                        <input type="text" name="dateembauche"  value="<?=$emp->dateembauche;?>" class="form-control" placeholder="Date d'embauche" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Salaire</label>
                                        <?php global $salaire;?>
                                        <input type="text" name="salaire"  value="<?=$emp->salaire;?>" class="form-control" placeholder="Salaire" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Identifiant</label>
                                        <?php global $identifiant;?>
                                        <input type="text" name="identifiant"  value="<?=$emp->identifiant;?>" class="form-control" placeholder="Salaire" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Email</label>
                                        <?php global $email;?>
                                        <input type="text" name="email"  value="<?=$emp->email;?>" class="form-control" placeholder="Saisir l'email de l'employé" required>
                                    </div>
                                    
                                        <input hidden type="text" name="email1"  value="<?=$emp->email;?>">
                                        <input hidden type="text" name="telephone1"  value="<?=$emp->telephone;?>">
                                        <input hidden type="text" name="eid"  value="<?=$emp->EID;?>">
                    
                                    <input value="Modifier" class="btn btn-primary" type="submit">
                                    <?php endforeach ?> 
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>
                    <div class="page-footer">
                    </div>
                </div>
                <?php require_once('includes/notification.inc.php') ?>
            </div>
        </div>
        <?php require_once('includes/footer.inc.php') ?>
        <?php require_once('includes/foot.inc.php') ?>
        <script src="<?= LINK ?>assets/ajax/script.js?v=<?= uniqid() ?>"></script>
</body>

</html>