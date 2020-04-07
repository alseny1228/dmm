<?php
use models\Vehicules;
use models\Clients;
    $error="";
    $errortel="";
    $erroremail="";
    $success="";
    $warning="";
    if (isset($_POST) AND !empty($_POST)) {
        extract($_POST);

        $immatri=Vehicules::getOneByImmatriculation($imma);
        if($cid==""|| $codev=="" || $imma=="" || $marque=="" || $modele=="" || $km=="" || $datedebut=="" || $datefin==""){
            $error="Veuillez remplir tous les champs";
        }else if($immatri>=1){
            $errortel="Cette immatriculation existe déjà";
        }else{
            $success="Enregistrement éffectué avec succès";
            Vehicules::post((int)$cid,$codev,$imma,$marque,$modele,$km,$datedebut,$datefin);
            Vehicules::postcode();
            // unset($nom,$prenom,$adresse,$email,$societe,$telephone);
        }
    }
    if(isset($_GET['id']) AND !empty($_GET['id'])){
        extract($_GET);
        $vid1=Vehicules::getOneById($id);
        if($vid1==1){
            Vehicules::delete((int)$id);
            $warning="Vehicule supprimé avec succès";
        }else{
            $warning="Cette voiture n'existe pas dans la base de données";
        }
    }
$clients=Clients::getAll();
$code=Vehicules::getcode();
$vehicules=Vehicules::getAll();




// $clients=Clients::getall();
// $codeclient=Clients::getcode();