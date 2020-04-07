<?php
use models\Types;
$error="";
$errornom="";
if(isset($_GET['id']) AND !empty($_GET['id'])){
    extract($_GET);
    $type1=Types::getOneById($id); 
    // debug($type);
}

if (isset($_POST) AND !empty($_POST)) {
    extract($_POST);
    // debug($_POST);
    // die();
    $n=Types::getOneByName($type);
    // echo $n;
    // die();
    if($type==""){
        $error="Veuillez remplir le champ";
    }else if($n>=1){
        $errornom="Cet Intitulé est déjà enregistré";
    }else{
        Types::update($type,(int)$tid);
        $success="Modification éffectuée avec succès";
        redirect_header('type');
        
    }
}
