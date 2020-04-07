<?php
use models\Immatriculations;
use models\Types;
$error="";
$errornom="";
$success="";
if(isset($_POST) AND !empty($_POST)){
    extract($_POST);
    $name=Immatriculations::getOneByName($immatriculation);
    if($type=="" || $immatriculation==""){
        $error="Veuillez remplir tous les champs";
    }else if($name>=1){
        $errornom="Cette immatriculation est déjà enregistré";
    }else{
        Immatriculations::post((int)$type,$immatriculation);
        $success="Enregistrement éffectué avec succès";
        $error="";
        $errornom="";
        $immatriculation="";
    }
}
if(isset($_GET['id']) AND !empty($_GET['id'])){
    extract($_GET);
   Immatriculations::delete($id); 
}
$types=Types::getAll();
$immatriculations=Immatriculations::getAll();
