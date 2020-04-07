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
                    <h3 class="breadcrumb-header text-center">FICHE D'ENREGISTREMENT DE FACTURES ET DEVIS</h3>
                </div>
                <!-- start page main wrapper -->
                <div id="main-wrapper">
                    <?php if ($error != "") : ?>
                        <div class="alert alert-danger" role="alert"><?php echo $error ?></div>
                    <?php endif ?>
                    <?php if ($errorpanier != "") : ?>
                        <div class="alert alert-danger" role="alert"><?php echo $errorpanier ?></div>
                    <?php endif ?>
                    <?php if ($errortel != "") : ?>
                        <div class="alert alert-danger" role="alert"><?php echo $errortel ?></div>
                    <?php endif ?>
                    <?php if ($errornum != "") : ?>
                        <div class="alert alert-danger" role="alert"><?php echo $errornum ?></div>
                    <?php endif ?>
                    <?php if ($success != "") : ?>
                        <div class="alert alert-success" role="alert"><?php echo $success ?></div>
                    <?php endif ?>

                    <div class="card-body">
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel"></h4>
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
                                        <input name="v" class="btn btn-primary btn-block" type="submit">
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
                                                    <?php foreach ($types as $type) : ?>
                                                        <option value="<?= $type->TID ?>"><?= $type->type ?></option>
                                                    <?php endforeach; ?>
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
                        <div class="modal fade" id="panier" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">FICHE D'ENREGISTREMENT DE FACTURES ET DEVIS</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="">
                                            <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <input hidden type="text" value="<?=(isset($_SESSION['panier'][$id])?$_SESSION['panier'][$id]['id']:0)?>" name="id" class="form-control">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="">Désigantion</label>
                                                    <textarea name="designation" id="" class="form-control" cols="30" rows="3"></textarea>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="">Quantité</label>
                                                    <input type="text" id="" name="quantite" class="form-control">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="">Prix Unitaire</label>
                                                    <input type="text" id="" name="prixunitaire" class="form-control">
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <input name="ajouter" value="Ajouter" class="btn btn-primary btn-block" type="submit">
                                                </div>
                                                
                                             </div>
                                        </div>
                                     </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card card-white">
                        <div class="card-heading clearfix">

                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                            <div class="row">
                                <!-- ####################################---INFO CLIENT----############################################ -->
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="">Type de facture</label>
                                            <select id="typefacture" name="typefacture" class="form-control">
                                                <option value="">Selectionner un type</option>
                                                <option value="fs">Facture Simple</option>
                                                <option value="dr">Devis de reparation</option>
                                                <option value="dp">Dévis de pièce</option>
                                                <option value="or">Ordre de reparation</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Reférence</label>
                                            <input type="text" id="reference" value="" readonly name="reference" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <select id="client" name="client" class="form-control">
                                                <option value="">Téléphone client</option>
                                                <?php foreach ($clients as $client):?>
                                                    <option value="<?=$client->CID?>"><?=$client->telephone?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <input type="text" id="nom" readonly name="nom" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <input type="text" id="prenom" readonly name="prenom" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <input type="text" id="adresse" readonly name="adresse" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <input type="text" id="email" readonly name="email" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!-- ####################################---INFO VEHICULE----############################################ -->
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="">Immatriculation</label>
                                            <select id="immatriculation" name="" class="form-control">
                                                <option value="">Selectionner une immatriculation</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <input type="text" id="imma" readonly name="imma" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <input type="text" id="marque" readonly name="marque" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <input type="text" id="modele" readonly name="modele" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <input type="text" id="km" readonly name="km" class="form-control">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <input type="text" placeholder="Date début reparation" name="dated" onblur="(this.type='text')" onfocus="(this.type='date')" class="form-control">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <input type="text" placeholder="Date fin reparation" name="datef" onblur="(this.type='text')" onfocus="(this.type='date')" class="form-control">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <input type="button" data-toggle="modal" data-target="#panier" id="" value="+" class="form-control btn btn-warning ">
                                        </div>
                                        <div class="col-md-8 mb-3">
                                            <input type="number"  name="montantp" placeholder="Montant payé" class="form-control">
                                        </div>
                                                <?php  if(isset($_SESSION['panier']) and !empty($_SESSION['panier'])):?>
                                                        <?php $variable = $_SESSION['panier'];$total = 0;?>
                                                    <?php  foreach ($variable as $key => $data1): ?> 
                                                        <?php  $total +=  (int)$data1['prixunitaire']*(int)$data1['quantite'];  ?> 
                                                    <?php endforeach ?>  
                                                    <input type="text"  name="total" value="<?=$total;?>">
                                                <?php endif ?>
                                        <div class="col-md-4 mb-3">
                                            <input type="submit" id="reference" value="Valider" name="valider" class="form-control btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>

                    <!-- ################################################################################################################-->
                    <!-- ###########################################-----PANIER-----#####################################################-->
                    <!-- ################################################################################################################"" -->
                    <div class="card card-white">
                        <div class="card-heading clearfix">
                        </div>
                        <div class="card-body">

                        </div>

                        <div class="table-responsive table-bordered mt-3">
                            <table id="example" class="display table" style="width: 100%;">
                                <thead>
                                    <tr style="background-color: grey;color:white">
                                        <th style="color: white;font-weight:bold">Désignation</th>
                                        <th style="color: white;font-weight:bold">Quantité</th>
                                        <th style="color: white;font-weight:bold">Prix Unitaire</th>
                                        <th style="color: white;font-weight:bold">Total</th>
                                        <th style="color: white;font-weight:bold" class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if (isset($_SESSION['panier']) and !empty($_SESSION['panier'])) : ?>
                                        <?php
                                            $datas = $_SESSION['panier'];
                                        ?>
                                    <?php foreach ($datas as $data => $data1) : ?>
                                        <tr>
                                            <td hidden><?= $data1['id'] ?></td>
                                            <td style="width: 45p%">
                                                <?php 
                                                    $chaine=$data1['designation'];
                                                    $result = wordwrap($chaine,58,"<br>\n");
                                                    echo $result = substr($result,0,500);
                                                ?>
                                            </td>
                                            <td style="width: 10%;text-align:center"><?= $data1['quantite'] ?></td>
                                            <td style="width: 15%;text-align:right"><?= $data1['prixunitaire'] ?></td>
                                            <td style="width: 23%;text-align:right"><?= (int)$data1['prixunitaire']*(int)$data1['quantite'];?></td>
                                            <td style="width: 7%" class="text-center"><a href="<?= redirect_with_id('factures', $data) ?>" class="btn btn-danger"><i class="fas fa-trash"></a></td>
                                        </tr>
                                     
                                    <?php endforeach?>
                                <?php endif; ?>
                                        <tr style="background-color: #eaebf0">
                                            <td colspan="3">Total</td>
                                            <td style="background-color: #cbcbcb;text-align:right" > 
                                                <?php 
                                                    if(isset($_SESSION['panier']) and !empty($_SESSION['panier'])):?>
                                                        <?php $variable = $_SESSION['panier'];$total = 0;?>
                                                    <?php  foreach ($variable as $key => $data1): ?> 
                                                        <?php  $total +=  (int)$data1['prixunitaire']*(int)$data1['quantite'];  ?> 
                                                    <?php endforeach ?> 
                                                    <?php  echo $total; ?> 
                                                <?php endif ?> 

                                            </td>
                                            <td style="background-color: #cbcbcb;text-align:left">GNF</td>
                                        </tr>
                                </tbody>
                            </table>
                            <!-- <div class="row">
                                <div class="col-md-7 mb-2 mt-2">
                                </div>
                                <div class="col-md-2 mb-2 mt-2">
                                    <input type="text" readonly placeholder="Montant payé" class="form-control">
                                </div>
                                <div class="col-md-3 mb-2 mt-2">
                                    <input type="text" readonly class="form-control">
                                </div>
                                <div class="col-md-7">
                                </div>
                                <div class="col-md-2">
                                    <input type="text"  readonly placeholder="Reste à payé" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="reste" readonly class="form-control">
                                </div>
                             </div> -->
                        </div>
                       
                        <!-- ####################################---INFO VEHICULE----############################################ -->
                    </div>
                </div>
            </div>

            <?php require_once('includes/notification.inc.php') ?>
            <?php require_once('includes/footer.inc.php') ?>
            <?php require_once('includes/foot.inc.php') ?>
            <script src="<?= LINK ?>assets/ajax/factures.js?v=<?= uniqid() ?>"></script>
            <script>
                // $('#sel').select2();
            </script>

</body>

</html>