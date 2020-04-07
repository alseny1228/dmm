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

                <div class="card-body">
                            <div class="table-responsive table-bordered">
                                <table class="display table" style="width: 100%;">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Prenom et nom</th>
                                            <th>Adresse</th>
                                            <th>Téléphone</th>
                                            <th>Email</th>
                                            <th>Rôle</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($clients as $client):?>
                                        <tr>
                                            <td><?=$client->nom." ".$client->prenom?></td>
                                            <td><?=$client->adresse?></td>
                                            <td><?=$client->telephone?></td>
                                            <td><?=$client->email?></td>
                                            <td><?=$client->roles?></td>
                                            <td class="text-center">
                                                <a href="<?= redirect_with_id('modifemployes', $client->EID) ?>"><i class="fas fa-edit"></i></a>
                                                &nbsp; &nbsp;
                                                <a href="<?= redirect_with_id('listemployes', $client->EID) ?>"> <i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php endforeach?>
                                    </tbody>
                                </table>
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