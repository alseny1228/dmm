<?php
use models\Clients;
use models\Employes;
use models\Paiement;
$error="";
$errornom="";
$errortel="";
$success="";
$errornum="";

setlocale(LC_TIME,'fr');
$mois = strftime('%B');
$annee = strftime('%Y');
echo $mois;
echo $annee;
die();

if (isset($_POST) and !empty($_POST) and isset($_POST['payer']) and $_POST['payer'] == "Payer") {
    extract($_POST);
    if ($eid=="" || $montant=="" || $dates=="") {
        $error="Veuillez remplir tous les champs";
    }else
    Paiement::post((int)($eid),$dates,$montant);
 
}
if(isset($_GET['id']) AND !empty($_GET['id'])){
    extract($_GET);
    Paiement::delete($id);
}
    // $telephone=(int)($telephone);
    // $name=Paiement::getOneByName($intitule);

//     if($intitule=="" || $adresse=="" || $telephone=="" || $email==""){
//         $error="Veuillez remplir tous les champs";
//     }else if($name>=1){
//         $errornom="Cet Intitulé est déjà enregistré";
//     }else if($tel>=1){
//         $errortel="Ce Numéro est déjà enregistré";
//     }else if($telephone<0){
//         $errornum="Ce numéro n'est pas dans le bon format";
//     }else{
//         Clients::post($intitule,$adresse,$telephone,$email);
//         $success="Enregistrement éffectué avec succès";
//         $intitule="";
//         $adresse="";
//         $telephone="";
//         $email="";
//         $errornum="";
//     }
// }
$employes=Employes::getall();