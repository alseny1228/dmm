<?php 
    use models\Paiement;
    use models\Immatriculations;
    use models\Clients;
use models\Employes;

require_once('../../functions/functions.php');
    require_once('../../config/config.php');
    require_once('../../config/db.php');
    require_once('../../models/Paiement.php');
    require_once('../../models/Employes.php');

    if(isset($_GET) AND !empty($_GET)){
        extract($_GET);
        $data=Employes::getOneById((int)$eid);
        echo json_encode($data);
    }
