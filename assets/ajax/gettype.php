<?php 
    use models\Clients;
    use models\Immatriculations;
    use models\Typeoperation;

require_once('../../functions/functions.php');
    require_once('../../config/config.php');
    require_once('../../config/db.php');
    require_once('../../models/Clients.php');
    require_once('../../models/Immatriculations.php');
    require_once('../../models/Typeoperation.php');

    if(isset($_GET) AND !empty($_GET)){
        extract($_GET);
        $data1=Typeoperation::getOneById((int)$idtype);
        echo json_encode($data1);
    }