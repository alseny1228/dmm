<?php 
namespace models;
class Login{
 static public function veriflogin(string $email, string $password){
    global $con;
    $req=$con->prepare("SELECT * FROM utilisateurs WHERE u_email=? AND password=?");
    $req->execute([secure($email),secure($password)]);
    return $req->rowCount();
    $req->closeCursor();
    }
}