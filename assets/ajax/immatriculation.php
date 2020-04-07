
<?php 
// header('Access-Control-Allow-Origin: *');
    use models\Immatriculations;
    use models\Vehicules;
    require_once('../../functions/functions.php');
    require_once('../../config/config.php');
    require_once('../../config/db.php');
    require_once('../../models/Immatriculations.php');
    require_once('../../models/Vehicules.php');

    if(isset($_GET) AND !empty($_GET)){
        extract($_GET);
        $data=Vehicules::getOneByImmatriculation1($iid);
        echo json_encode($data);
    }