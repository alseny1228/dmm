<?php
use models\Clients;
    $error="";
    $errortel="";
    $erroremail="";
    $success="";

if(isset($_GET['id']) AND !empty($_GET['id'])){
    extract($_GET);
    $client1=Clients::getOneById1($id);
}

if (isset($_POST) AND !empty($_POST)) {
    extract($_POST);
    $tel=Clients::getOneByNum($telephone1);
    $mail=Clients::getOneByEmail($email1);
    $telephone=(int)($telephone);
    if($nom=="" || $prenom=="" || $adresse=="" || $telephone=="" || $email==""){
        $error="Veuillez remplir tous les champs";
    }else if($telephone<0){
        $errornum="Ce numéro n'est pas dans le bon format";
    }else{
        if($mail==1 AND $tel==1){
            Clients::update($nom,$prenom,$adresse,$societe,$telephone,$email,$id,$code);
            $success="Enregistrement éffectué avec succès";
            unset($nom,$prenom,$adresse,$email,$societe,$telephone);
        }
    }
}

$clients=Clients::getall();
// $codeclient=Clients::getcode();
// echo $codeclient;
