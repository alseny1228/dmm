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
                    <?php if ($error != "") : ?>
                        <div class="alert alert-danger" role="alert"><?php echo $error ?></div>
                    <?php endif ?>
                    <?php if ($errornom != "") : ?>
                        <div class="alert alert-danger" role="alert"><?php echo $errornom ?></div>
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
                            <!-- debut du formulaire panier -->
                            <div class="row">


                                <!-- <div class="col-md-4 col-4 mb-2 mt-3">
                                    <input id="telephone" placeholder="Date" readonly type="text" class="form-control">
                                </div>
                                <div class="col-md-8 col-8 mb-2 mt-3">
                                    <input type="date" name="dates" class="form-control">
                                </div> -->
                                <div class="col-md-6 col-12">
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-md-12 col-12 mb-3">
                                                <?php global $type; ?>
                                                <select id="employe" name="eid"" class=" form-control">
                                                    <option value="">Séléctionner client</option>
                                                    <?php foreach ($employes as $employe) : ?>
                                                        <option value="<?= $employe->EID ?>"><?= $employe->prenom . " " . $employe->nom ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <input id="adresse" placeholder="Nom complet" readonly type="text" class="form-control">
                                            </div>
                                            <div class="col-md-8 mb-3">
                                                <input id="nom" readonly name="nom" type="text" class="form-control">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <input id="adresse" placeholder="Role" readonly type="text" class="form-control">
                                            </div>
                                            <div class="col-md-8 mb-3">
                                                <input id="role" readonly name="role" type="text" class="form-control">
                                            </div>
                                        </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <input id="adresse" name="montant" type="number" placeholder="montant" class="form-control">
                                        </div>

                                        <div class="col-md-12 mb-0">
                                            <input id="dates" type="date" name="dates" class="form-control">
                                        </div>
                                        
                                        <div class="col-md-2 mt-0">
                                            <input type="submit" name="payer" value="Payer" class="btn btn-primary mt-3 mb-3">
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>

                        </div>

                        <div class="card card-white">
                            <div class="table-responsive table-bordered">
                                <table id="example" class="display table" style="width: 100%;">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Immatriculation</th>
                                            <th>Type d'opération</th>
                                            <th>Libellé</th>
                                            <th>Montant</th>
                                            <th>Quantité</th>
                                            <th>Total</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td class="text-center">
                                                <button class="btn btn-danger"><a href=""></a></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <!-- end page main wrapper -->
                        <div class="page-footer">

                        </div>
                    </div>
                    <!-- end page inner -->
                    <?php require_once('includes/notification.inc.php') ?>
                </div>
            </div>
            <?php require_once('includes/footer.inc.php') ?>
            <?php require_once('includes/foot.inc.php') ?>
            <script src="<?= LINK ?>assets/ajax/paiements.js?v=<?= uniqid() ?>"></script>
            <script>
                // $('#sel').select2();
            </script>

</body>

</html>