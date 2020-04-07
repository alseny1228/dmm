<?php 
use models\Login;

if(isset($_POST) AND !empty($_POST)){
    extract($_POST);
   $login=Login::veriflogin($email,$password);
   if($login==1){
       redirect_header('dashboard');
   }else{

   }
}