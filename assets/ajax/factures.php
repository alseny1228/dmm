<?php 
// header('Access-Control-Allow-Origin: *');
    use models\Clients;
    use models\Immatriculations;
    use models\Vehicules;
    require_once('../../functions/functions.php');
    require_once('../../config/config.php');
    require_once('../../config/db.php');
    require_once('../../models/Clients.php');
    require_once('../../models/Immatriculations.php');
    require_once('../../models/Vehicules.php');

    if(isset($_GET) AND !empty($_GET)){
        extract($_GET);
        $data1=Clients::getOneById1($cid);
        $data2=Vehicules::getImmabyclt($cid);
        $data=['data1'=>$data1,'data2'=>$data2];
        echo json_encode($data);
    }
   

    // if(isset($_GET) AND !empty($_GET) AND isset($_GET['test'])=='2'){
    //     extract($_GET);
    //     $data1=Immatriculations::getOneById($iid);
    //     echo json_encode($data1);
    // }