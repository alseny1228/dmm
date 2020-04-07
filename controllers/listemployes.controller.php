<?php
use models\Employes;

$error="";
$errornom="";
$errortel="";
$success="";
$errornum="";

if (isset($_POST) AND !empty($_POST)) {
    extract($_POST);
    // debug($_POST);
    // die();
    $telephone=(int)($telephone);
    // $name=Employes::getOneByName($intitule);
    $tel=Employes::getOneByPhoneNumber($telephone);
    if($nom=="" || $prenom=="" || $adresse=="" || $telephone=="" || $email=="" || $sexe=="" || $etat=="" || $fonction=="" || $profession=="" || $typecontrat=="" || $role=="" || $dateembauche=="" || $salaire=="" || $identifiant==""){
        $error="Veuillez remplir tous les champs";
    }else if($tel>=1){
        $errortel="Ce Numéro est déjà enregistré";
    }else if($telephone<0){
        $errornum="Ce numéro n'est pas dans le bon format";
    }else{
        Employes::post($nom,$prenom,$adresse,$telephone,$email,$sexe,$etat,$fonction,$profession,$typecontrat,$role,$dateembauche,$salaire,$identifiant);
        $success="Enregistrement éffectué avec succès";
        $intitule="";
        $adresse="";
        $telephone="";
        $email="";
        $errornum="";
    }
}
$employes=Employes::getall();
$fonctions=Employes::getfonction();
$professions=Employes::getprofession();
$clients=Employes::getAll();
// debug($clients);