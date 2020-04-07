<?php
use models\Typeoperation;
$error="";
$errornom="";
if(isset($_GET['id']) AND !empty($_GET['id'])){
    extract($_GET);
    $type1=Typeoperation::getOneById($id); 
    // debug($type);
}

if (isset($_POST) AND !empty($_POST)) {
    extract($_POST);
    // debug($_POST);
    // die();
    $n=Typeoperation::getOneByName($type);
    // echo $n;
    // die();
    if($type==""){
        $error="Veuillez remplir le champ";
    }else if($n>=1){
        $errornom="Cet Intitulé est déjà enregistré";
    }else{
        Typeoperation::update($type,(int)$tid);
        $success="Modification éffectuée avec succès";
        redirect_header('typeoperation');
        
    }
}
