<meta charset="utf-8">
<?php if (!empty($id)) : ?>
    <title><?= SITE_NAME ?> | <?= _e((string) $id) ?></title>
<?php else : ?>
    <title><?= SITE_NAME ?> | <?= _e($page) ?></title>
<?php endif ?>

<meta charset="utf-8">
<meta name="author" content="Chitrakoot Web" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="keywords" content="admin,dashboard" />
<meta name="description" content="Fabrex - Responsive Admin Dashboard Template" />
<link rel="stylesheet" href="<?= LINK ?>assets/plugins/select2/css/select2.min.css"/>
<!-- favicon -->
<link rel="shortcut icon" href="<?= LINK ?>assets/img/logos/favicon.png">
<link rel="apple-touch-icon" href="<?= LINK ?>assets/img/logos/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?= LINK ?>assets/img/logos/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?= LINK ?>assets/img/logos/apple-touch-icon-114x114.png">
<!-- common plugins -->
<link rel="stylesheet" href="<?= LINK ?>assets/plugins/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?= LINK ?>assets/plugins/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" href="<?= LINK ?>assets/plugins/icomoon/style.css" />
<link rel="stylesheet" href="<?= LINK ?>assets/plugins/uniform/css/default.css" />
<link rel="stylesheet" href="<?= LINK ?>assets/plugins/switchery/switchery.min.css" />

<link rel="stylesheet" href="<?= LINK ?>assets/plugins/datatables/css/jquery.datatables.min.css" />
<link rel="stylesheet" href="<?= LINK ?>assets/plugins/datatables/css/jquery.datatables_themeroller.css" />

<!-- custom css -->
<link rel="stylesheet" href="<?= LINK ?>assets/css/styles.css" />
