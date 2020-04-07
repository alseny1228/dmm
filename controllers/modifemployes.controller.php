<?php
use models\Employes;
$error="";
$errornom="";
$errortel="";
$success="";
$errornum="";
$errornum1="";

if (isset($_POST) AND !empty($_POST)) {
    extract($_POST);
    $telephone=(int)($telephone1);
    $tel=Employes::getOneByPhoneNumber($telephone1);
    $mail=Employes::getOneByEmail($email1);
    echo $tel;
    echo $mail;
    if($nom=="" || $prenom=="" || $adresse=="" || $telephone=="" || $email=="" || $sexe=="" || $etat=="" || $fonction=="" || $profession=="" || $typecontrat=="" || $role=="" || $dateembauche=="" || $salaire=="" || $identifiant==""){
        $error="Veuillez remplir tous les champs";
    }else if($telephone<0){
        $errornum="Ce numéro n'est pas dans le bon format";
    }else if($tel!=1 || $mail!=1){
        $errornum1="Cet Employé n'existe à la base de données";
    }
    else{
        if($tel==1 || $mail==1){
            Employes::update($nom,$prenom,$adresse,$telephone,$email,$sexe,$etat,$fonction,$profession,$typecontrat,$role,$dateembauche,$salaire,$identifiant,$eid);
            $success="Enregistrement éffectué avec succès";
            $intitule="";
            $adresse="";
            $telephone="";
            $email="";
            $errornum="";
        }
      
    }
}

if(isset($_GET['id']) AND !empty($_GET['id'])){
    extract($_GET);
    $employe=Employes::getOneById($id);
}
$employes=Employes::getall();
$fonctions=Employes::getfonction();
$professions=Employes::getprofession();
$clients=Employes::getAll();
// debug($clients);