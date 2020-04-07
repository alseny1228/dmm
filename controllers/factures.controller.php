<?php
use models\Clients;
use models\Factures;
use models\Immatriculations;
use models\Vehicules;
require_once('functions/functions.php');
$error="";
$errorpanier="";
$errortel="";
$success="";
$errornum="";
if (isset($_POST) and !empty($_POST) and isset($_POST['valider']) and $_POST['valider'] == "Valider"){
    extract($_POST);
    if(empty($typefacture) || empty($reference) || empty($client) || empty($nom) || empty($prenom) || empty($adresse) || empty($imma) || empty($marque) || empty($modele) || empty($km) || empty($dated) || empty($datef)){
        $error="Veuillez remplir tous les champs";
    }else if(empty($_SESSION['panier'])){
        $errorpanier="La facture est vide";
    }else{
        $reste=(int)$total-(int)$montantp;
        foreach ($_SESSION['panier'] as $panier){
            Factures::post($typefacture, $reference,(int)$client,$imma,$dated ,$datef,$panier['designation'],$panier['quantite'],$panier['prixunitaire'],(int)$total,(int)$montantp,(int)$reste);
            }
            Factures::postcode();
           
            header("location:../print/index.php?reference=$reference");
        }
        unset($_SESSION['panier']);
    }

if (isset($_POST) and !empty($_POST) and isset($_POST['ajouter']) and $_POST['ajouter'] == "Ajouter"){
    extract($_POST);
    $id=(int)($id) + 1;
    if (!isset($_SESSION['panier'][$id])){
        $_SESSION['panier'][$id]['id'] =$id;
        $_SESSION['panier'][$id]['designation'] = $designation;
        $_SESSION['panier'][$id]['prixunitaire'] = $prixunitaire;
        $_SESSION['panier'][$id]['quantite'] = $quantite;
        $_SESSION['panier'][$id]['prixtotal'] = (int)$quantite*(int)$prixunitaire;
    }
}  

if (isset($_GET['id']) && !empty($_GET['id'])) {
    extract($_GET);
    unset($_SESSION['panier'][$id]);
    redirect_header('factures');
}
$clients=Clients::getAll();
$immatriculations=Vehicules::getAll();
// $refe=Factures::getcode();
    // die();
    // if(isset($_SESSION['panier'])){
    //     foreach($_SESSION['panier'] as $datas){
    //         Operations::post((int)$idclient,(int)$datas['id'],(int)$datas['typeoperation'],$dates,$datas['libelle'],$datas['montant'],$datas['quantite'],$ref);
    //         $idope=(int)$datas['id'];     
    //     }
    //     Operations::postRef();
    //     unset($_SESSION['panier']);
    //     header("location:../print/index.php?cid=$idclient&ref=$ref");
    //     // index.php?oid='$oid'?'cid=$cid
    // }
   
    



