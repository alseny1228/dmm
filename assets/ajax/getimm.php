<?php 
    use models\Clients;
    use models\Immatriculations;

require_once('../../functions/functions.php');
    require_once('../../config/config.php');
    require_once('../../config/db.php');
    require_once('../../models/Clients.php');
    require_once('../../models/Immatriculations.php');

    if(isset($_GET) AND !empty($_GET) AND isset($_GET['test'])=='2'){
        extract($_GET);
        $data1=Immatriculations::getOneById($iid);
        echo json_encode($data1);
    }