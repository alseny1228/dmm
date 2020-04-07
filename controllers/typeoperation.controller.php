<?php
use models\Typeoperation;
$error="";
$errornom="";
$errortel="";
$success="";
$errornum="";

if(isset($_GET['id']) AND !empty($_GET['id'])){
    extract($_GET);
    Typeoperation::delete($id);
}

if (isset($_POST) AND !empty($_POST)) {
    extract($_POST);
    $n=Typeoperation::getOneByName($type);
    if($type==""){
        $error="Veuillez remplir le champ";
    }else if($n>=1){
        $errornom="Cet Intitulé est déjà enregistré";
    }else{
        Typeoperation::post($type);
        $success="Enregistrement éffectué avec succès";
        $type="";
    }
}
    // $name=Types::getOneByName($intitule);
    // if($intitule=="" || $adresse=="" || $telephone=="" || $email==""){
    //     $error="Veuillez remplir tous les champs";
    // }else if($name>=1){
    //     $errornom="Cet Intitulé est déjà enregistré";
    // }else if($tel>=1){
    //     $errortel="Ce Numéro est déjà enregistré";
    // }else if($telephone<0){
    //     $errornum="Ce numéro n'est pas dans le bon format";
    // }else{
    //     $success="Enregistrement éffectué avec succès";
    //     Types::post($intitule,$adresse,$telephone,$email);
    //     $intitule="";
    //     $adresse="";
    //     $telephone="";
    //     $email="";
    //     $errornum="";
    // 


$types=Typeoperation::getall();