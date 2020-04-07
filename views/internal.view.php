<?php require_once ('functions/functions.php') ?>
<!DOCTYPE html>
<html lang="en">
    <?php require_once('includes/head.inc.php') ?>
</head>
<body>
<div class="page-wrapper">
    <div class="preloader"></div>
    <?php //require_once('includes/header.inc.php') ?>
    <section class="error-section">
    	<div class="auto-container">
            <div class="error-big-text">500</div>
            <h2 style="font-size: 16px">Oups!! Echec de connection à la base de données.</h2>
            <div class="error-options">
            	<a href="<?= redirect ('') ?>" class="theme-btn btn-style-two"><span class="txt">Aller à l'accueil</span></a>
            </div>
        </div>
    </section>
    <?php //require_once('includes/footer.inc.php') ?>
</div> 
<?php require_once('includes/foot.inc.php') ?>
</body>
</html>
<?php die ?>