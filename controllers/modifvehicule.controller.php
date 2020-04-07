<?php
use models\Vehicules;
use models\Clients;
    $error="";
    $errortel="";
    $erroremail="";
    $success="";
    $warning="";
    if(isset($_GET['id']) AND !empty($_GET['id'])){
        extract($_GET);
        $vehicule=Vehicules::getOneById1($id);
    }
    if (isset($_POST) AND !empty($_POST)) {
        extract($_POST);
        $immatri=Vehicules::getOneByImmatriculation($imma1);
        if($cid==""|| $codev=="" || $imma=="" || $marque=="" || $modele=="" || $km=="" || $datedebut=="" || $datefin==""){
            $error="Veuillez remplir tous les champs";
        }else{
            if($immatri==1){
                Vehicules::update($imma,$marque,$modele,$km,$datedebut,$datefin,(int)$cid,(int)$vid);
                $success="Modification éffectuée avec succès";
                unset($imma,$marque,$modele,$km,$datedebut,$datefin,$cid,$vid);
                redirect_header('vehicule');
            }else{
                $warning="Cet vehicule n'existe pas dans la base de données";
            }
        }
    }
$clients=Clients::getAll();
$code=Vehicules::getcode();
$vehicules=Vehicules::getAll();
