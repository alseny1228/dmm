<?php
use models\Immatriculations;
use models\Types;
$error="";
$errornom="";
$success="";

if(isset($_GET['id']) AND !empty($_GET['id'])){
    extract($_GET);
    $immas=Immatriculations::getOneById($id); 
}

if(isset($_POST) AND !empty($_POST)){
    extract($_POST);
    debug($_POST);
    $name=Immatriculations::getOneByName($immatriculation);
    if($type=="" || $immatriculation==""){
        $error="Veuillez remplir tous les champs";
    }else if($name>=1){
        $errornom="Cette immatriculation est déjà enregistré";
    }else{
        Immatriculations::update($immatriculation,(int)$type,(int)$iid);
        $success="Modification éffectuée avec succès";
        $error="";
        $errornom="";
        $immatriculation="";
        redirect_header('immatriculation');
    }
}
$types=Types::getAll();
$immatriculations=Immatriculations::getAll();
