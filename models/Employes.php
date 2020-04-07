<?php
namespace models;
class Employes{
static public function post(string $nom,string $prenom,string $adresse,string $telephone ,string $email,string $sexe,string $etat, string $fonction,string $profession,string $typecontrat,string $role,string $dateembauche,string $salaire,string $identifiant){
    global $con;
    $req=$con->prepare('INSERT INTO employes SET nom=?,prenom=?,adresse=?,telephone=?,email=?,sexe=?,etat=?,fonction=?,profession=?,typecontrat=?,roles=?,dateembauche=?,salaire=?,identifiant=?');
    $req->execute([secure($nom),secure($prenom),secure($adresse),secure($telephone),secure($email),secure($sexe),secure($etat),secure($fonction),secure($profession),secure($typecontrat),secure($role),secure($dateembauche),secure($salaire),secure($identifiant)]);
    $req->closeCursor();
}
static public function update(string $nom,string $prenom,string $adresse,string $telephone ,string $email,string $sexe,string $etat, string $fonction,string $profession,string $typecontrat,string $role,string $dateembauche,string $salaire,string $identifiant,int $eid){
    global $con;
    $req=$con->prepare('UPDATE employes SET nom=?,prenom=?,adresse=?,telephone=?,email=?,sexe=?,etat=?,fonction=?,profession=?,typecontrat=?,roles=?,dateembauche=?,salaire=?,identifiant=?,EID=?');
    $req->execute([secure($nom),secure($prenom),secure($adresse),secure($telephone),secure($email),secure($sexe),secure($etat),secure($fonction),secure($profession),secure($typecontrat),secure($role),secure($dateembauche),secure($salaire),secure($identifiant),$eid]);
    $req->closeCursor();
}
static public function getfonction(){
    global $con;
    $req=$con->prepare('SELECT * FROM fonction');
    $req->execute([]);
    $result=[];
    while ($rows = $req->fetchObject()):
        array_push($result, $rows);
    endwhile;
    $req->closeCursor();
    return $result;
}
static public function getAll(){
    global $con;
    $req=$con->prepare('SELECT * FROM employes');
    $req->execute([]);
    $result=[];
    while ($rows = $req->fetchObject()):
        array_push($result, $rows);
    endwhile;
    $req->closeCursor();
    return $result;
}
static public function getprofession(){
    global $con;
    $req=$con->prepare('SELECT * FROM profession');
    $req->execute([]);
    $result=[];
    while ($rows = $req->fetchObject()):
        array_push($result, $rows);
    endwhile;
    $req->closeCursor();
    return $result;
}

static public function getOneByPhoneNumber(string $telephone){
    global $con;
    $req=$con->prepare('SELECT * FROM employes WHERE telephone=?');
    $req->execute([secure($telephone)]);
    $n=$req->rowCount();
    $req->closeCursor();
    return $n;
}

static public function getOneByEmail(string $email){
    global $con;
    $req=$con->prepare('SELECT * FROM employes WHERE email=?');
    $req->execute([secure($email)]);
    $n=$req->rowCount();
    $req->closeCursor();
    return $n;
}

static public function getOneById(string $cid){
    global $con;
    $req=$con->prepare('SELECT * FROM employes WHERE EID=?');
    $req->execute([secure($cid)]);
    $result=[];
    while ($rows = $req->fetchObject()):
        array_push($result, $rows);
    endwhile;
    $req->closeCursor();
    return $result;
}

static public function delete(int $cid): void {
    global $con;
    $re = $con->prepare('DELETE FROM employes WHERE EID=?');
    $re->execute([$cid]);
    }
}
