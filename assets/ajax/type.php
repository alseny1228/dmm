
<?php 
// header('Access-Control-Allow-Origin: *');
    use models\Clients;
    use models\Immatriculations;
    use models\Factures;
    header('Access-Control-Allow-Origin: *');
    require_once('../../functions/functions.php');
    require_once('../../config/config.php');
    require_once('../../config/db.php');
    require_once('../../models/Clients.php');
    require_once('../../models/Immatriculations.php');
    require_once('../../models/Factures.php');

    if(isset($_GET) AND !empty($_GET)){
        extract($_GET);
        $data=Factures::getcode($type);
        echo json_encode($data);
    }