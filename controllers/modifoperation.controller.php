<?php 
    use models\Clients;
    use models\Operations;
    use models\Immatriculations;
    use models\Typeoperation;
    use models\Types;
    $error="";
    $errornom="";
    $errortel="";
    $success="";
    $errornum="";

    if(isset($_GET['id']) AND !empty($_GET['id'])){
        extract($_GET);
        $operation=Operations::getOneById((int)$id);
    }
    $clients=Clients::getAll();
$types=Types::getAll();
$immatriculations=Immatriculations::getAll();
$typeoperations=Typeoperation::getAll();
$operations=Operations::getAll();