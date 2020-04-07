<?php
use models\Clients;
    $error="";
    $errortel="";
    $erroremail="";
    $success="";
    $warning="";

if(isset($_GET['id']) AND !empty($_GET['id'])){
    extract($_GET);
    $cid=Clients::getOneById($id);
    if($cid==1){
        Clients::delete($id);
        $warning="Client supprimé avec succès";
    }else{
        $warning="Ce client n'existe pas dans la base de données";
    }
}

if (isset($_POST) AND !empty($_POST)) {
    extract($_POST);
    $tel=Clients::getOneByNum($telephone);
    $mail=Clients::getOneByEmail($email);
    $telephone=(int)($telephone);
    if($nom=="" || $prenom=="" || $adresse=="" || $telephone=="" || $email=="" || $sexe==""){
        $error="Veuillez remplir tous les champs";
    }else if($tel>=1){
        $errortel="Ce Numéro est déjà enregistré";
    }else if($telephone<0){
        $errornum="Ce numéro n'est pas dans le bon format";
    }else if($mail>=1){
        $erroremail="Cet Email existe déjà";
    }else{
        Clients::post($nom,$prenom,$adresse,$societe,$telephone,$email,$code,$sexe);
        $success="Enregistrement éffectué avec succès";
        Clients::postcode();
        unset($nom,$prenom,$adresse,$email,$societe,$telephone);
    }
}
$clients=Clients::getall();
$codeclient=Clients::getcode();