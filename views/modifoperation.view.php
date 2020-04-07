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

                 

                              
                                <div class="card-body">
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="exampleModalLabel">Ajouter une opération</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Intitulé</label>
                                                            <input name="intitule" type="text" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Adresse</label>
                                                            <input name="adresse" type="text" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Téléphone</label>
                                                            <input name="telephone" type="text" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Email</label>
                                                            <input name="email" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                <div class="modal-footer">
                                                    <input name="valider" class="btn btn-primary btn-block" type="submit">
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          



                                <div class="card-body">
                                    <div class="modal fade" id="imatricule" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="exampleModalLabel">Ajout d'une nouvelle immatriculation</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="">
                                                        <div class="form-group col-md-12 col-12">
                                                            <label for="recipient-name" class="control-label">Immatriculation</label>
                                                            <input name="immatriculation" type="text" class="form-control">
                                                        </div>

                                                        <div class="col-md-12 col-12">
                                                        <?php global $type; ?>
                                                        <label for="recipient-name" class="control-label">Type du vehicule</label>
                                                            <select id="client3" name="type" id="sel" class="form-control">
                                                                <option value="">Séléctionner</option>
                                                                <?php foreach ($types as $type) :?>
                                                                    <option value="<?=$type->TID ?>"><?=$type->type?></option>
                                                                <?php endforeach;?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                <div class="modal-footer">
                                                    <input name="immat" class="btn btn-primary btn-block" type="submit">
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div class="card-body">
                                    <div class="modal fade" id="typeop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="exampleModalLabel">Ajout d'un type d'Opération</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Type d'opération</label>
                                                            <input name="typeoperation" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                <div class="modal-footer">
                                                    <input name="typeopera" class="btn btn-primary btn-block" type="submit">
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          




                    <div class="card card-white">
                        <div class="card-heading clearfix">
                            <h4 class="card-title">Ajouter une opération</h4>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation row" method="POST" action="" novalidate>
                                        <div class="form-row col-md-6">
                                            <div class="col-md-10 col-10">
                                            <?php global $type; ?>
                                                <select id="client" name="idclient" id="sel" class="form-control">
                                                    <option value="">Séléctionner client</option>
                                                    <?php foreach ($clients as $client) :?>
                                                        <option value="<?=$client->CID ?>"><?=$client->intitule?></option>
                                                    <?php endforeach;?>
                                                </select>
                                            </div>
                                            <div class="col-md-2 col-2">
                                           <input readonly type="button" value="+" class="btn btn-warning btn-block" data-toggle="modal" data-target="#exampleModal">
                                            </div>
                                            <div class="col-md-12 mt-3 mb-2">
                                                <input id="adresse" readonly type="text" class="form-control">
                                            </div>
                                            
                                            <div class="col-md-12 mt-3 mb-2">
                                                <input id="telephone" readonly type="text"  class="form-control">                               
                                            </div>
                                            <div class="col-md-12 mt-3 mb-3">
                                                <input id="email" readonly type="text"  class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-row col-md-6 col-12">
                                            <div class="col-md-4 col-4 mb-2">
                                                <input id="telephone" placeholder="Date" readonly type="text" class="form-control">                               
                                            </div>
                                            <div class="col-md-8 col-8 mb-2">
                                                <input type="date" name="dates" class="form-control">                               
                                            </div>

                                            <?php global $type; ?>
                                                <select name="iid" id="sel" class="col-md-10 col-10 form-control mt-2">
                                                    <option value="">Immatriculation</option>
                                                    <?php foreach ($immatriculations as $immatriculation) :?>
                                                        <option value="<?=$immatriculation->IID ?>"><?=$immatriculation->titreimmatriculation?></option>
                                                    <?php endforeach;?>
                                                </select>

                                            <?php global $type; ?>
                                                <select id="client2" name="tid" id="sel" class="col-md-12 col-12 form-control mt-2">
                                                    <option value="">Type Opération</option>
                                                    <?php foreach ($typeoperations as $typeoperation) :?>
                                                        <option value="<?=$typeoperation->TOID ?>"><?=$typeoperation->typeoperation?></option>
                                                    <?php endforeach;?>
                                                </select>
                                           
                                        <textarea placeholder="Saisir le libélé ici" id="libelle" name="libelle" id="sel" class="col-md-12 col-12 form-control mt-2"></textarea>
                                        <input placeholder="Saisir le montant" type="number" id="client" name="montant" id="sel" class="col-md-12 col-12 form-control mt-2">
                                        
                                                <input type="submit" name="v" value="Valider" class="btn btn-primary mt-2 btn-block">
                                            
                                      </div>

                                    </div>
                               
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
        <script src="<?= LINK ?>assets/ajax/operations.js?v=<?= uniqid() ?>"></script>
        <script>
            $('#sel').select2();
        </script>
        
</body>
</html>