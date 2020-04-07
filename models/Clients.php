<?php
namespace models;
class Clients{
static public function post(string $nom,string $prenom,string $adresse,string $societe,string $telephone ,string $email,string $code,string $sexe){
    global $con;
    $req=$con->prepare('INSERT INTO client SET nom=?,prenom=?,adresse=?,societe=?,telephone=?,email=?,codeclient=?,sexe=?');
    $req->execute([secure($nom),secure($prenom),secure($adresse),secure($societe),secure($telephone),secure($email),secure($code),secure($sexe)]);
    $req->closeCursor();
}


static public function update(string $nom,string $prenom,string $adresse,string $societe,string $telephone ,string $email,int $cid,string $sexe){
    global $con;
    $req=$con->prepare('UPDATE client SET nom=?,prenom=?,adresse=?,societe=?,telephone=?,email=?,sexe=? WHERE CID=?');
    $req->execute([secure($nom),secure($prenom),secure($adresse),secure($societe),secure($telephone),secure($email),$cid,secure($sexe)]);
    $req->closeCursor();
}

static public function getOneByNum(string $telephone){
    global $con;
    $req=$con->prepare('SELECT * FROM client WHERE telephone=?');
    $req->execute([secure($telephone)]);
    $n=$req->rowCount();
    $req->closeCursor();
    return $n;
}
static public function getOneByEmail(string $email){
    global $con;
    $req=$con->prepare('SELECT * FROM client WHERE email=?');
    $req->execute([secure($email)]);
    $n=$req->rowCount();
    $req->closeCursor();
    return $n;
}

static public function getOneById1(string $cid){
    global $con;
    $req=$con->prepare('SELECT * FROM client WHERE CID=?');
    $req->execute([secure($cid)]);
    $result=[];
    while ($rows = $req->fetchObject()):
        array_push($result, $rows);
    endwhile;
    $req->closeCursor();
    return $result;
}

static public function getOneById(string $cid){
    global $con;
    $req=$con->prepare('SELECT * FROM client WHERE CID=?');
    $req->execute([secure($cid)]);
    $n=$req->rowCount();
    $req->closeCursor();
    return $n;
}

static public function getAll() : array{
    global $con; 
    $req=$con->prepare('SELECT * FROM client');
    $req->execute([]);
    $result=[];
    while ($rows = $req->fetchObject()):
        array_push($result, $rows);
    endwhile;
    $req->closeCursor();
    return $result;
}

static public function delete(int $cid): void {
    global $con;
    $re = $con->prepare('DELETE FROM client WHERE CID=?');
    $re->execute([$cid]);
    }
static public function postcode(): void {
    global $con;
    $re = $con->prepare('INSERT INTO codeclient (CODE) VALUES (NULL);');
    $re->execute([]);
    }
static public function getcode(): int {
    global $con;
    $req = $con->prepare('SELECT * FROM codeclient');
    $req->execute([]);
    $n=$req->rowCount();
    $req->closeCursor();
    return $n;
    }
}
