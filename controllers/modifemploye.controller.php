<?php
use models\Employes;
$error="";
$errornom="";
$errortel="";
$success="";
$errornum="";
if(isset($_GET['id']) AND !empty($_GET['id'])){
    extract($_GET);
    $client=Employes::getOneById($id); 
}

if (isset($_POST) AND !empty($_POST)) {
    extract($_POST);
    $telephone=(int)($telephone);
    $name=Employes::getOneByName($intitule);
    $tel=Employes::getOneByName($telephone);

    if($intitule=="" || $adresse=="" || $telephone=="" || $email==""){
        $error="Veuillez remplir tous les champs";
    }else if($name>1){
        $errornom="Cet Intitulé est déjà enregistré";
    }else if($tel>1){
        $errortel="Ce Numéro est déjà enregistré";
    }else if($telephone<0){
        $errornum="Ce numéro n'est pas dans le bon format";
    }else{
        $success="Modification éffectuée avec succès";
        Employes::update($intitule,$adresse,$telephone,$email,(int)$cid);
        $intitule="";
        $adresse="";
        $telephone="";
        $email="";
        $errornum="";
        redirect_header('employes');
    }
}