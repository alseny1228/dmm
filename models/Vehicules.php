<?php
namespace models;
class Vehicules{
static public function post(int $cid,string $codev,string $immat,string $marque,string $modele ,string $km,string $datedebut,string $datefin){
    global $con;
    $req=$con->prepare('INSERT INTO vehicule SET CID=?,codevehicule=?,immatriculation=?,marque=?,modele=?,kilometrage=?,datedebut=?,datefin=?');
    $req->execute([$cid,secure($codev),secure($immat),secure($marque),secure($modele),secure($km),secure($datedebut),secure($datefin)]);
    $req->closeCursor();
}

// INSERT INTO `vehicule` (`VID`, `CID`, `codevehicule`, `immatriculation`, `marque`, `modele`, `kilometrage`, `datedebut`, `datefin`)

static public function update(string $immat,string $marque,string $modele ,string $km,string $datedebut,string $datefin, int $cid ,int $vid){
    global $con;
    $req=$con->prepare('UPDATE vehicule SET immatriculation=?,marque=?,modele=?,kilometrage=?,datedebut=?,datefin=?,CID=? WHERE VID=?');
    $req->execute([secure($immat),secure($marque),secure($modele),secure($km),secure($datedebut),secure($datefin),$cid,$vid]);
    $req->closeCursor();
}

static public function getOneByImmatriculation(string $immatriculation){
    global $con;
    $req=$con->prepare('SELECT * FROM vehicule WHERE immatriculation=?');
    $req->execute([secure($immatriculation)]);
    $n=$req->rowCount();
    $req->closeCursor();
    return $n;
}
static public function getOneByImmatriculation1(string $immatriculation){
    global $con;
    $req=$con->prepare('SELECT * FROM vehicule WHERE immatriculation=?');
    $req->execute([secure($immatriculation)]);
    $result=[];
    while ($rows = $req->fetchObject()):
        array_push($result, $rows);
    endwhile;
    $req->closeCursor();
    return $result;
}

static public function postcode(): void {
    global $con;
    $re = $con->prepare('INSERT INTO codevehicule (codev) VALUES (NULL)');
    $re->execute([]);
}

static public function getcode(): int {
    global $con;
    $req = $con->prepare('SELECT * FROM codevehicule');
    $req->execute([]);
    $n=$req->rowCount();
    $req->closeCursor();
    return $n;
    }

    
static public function getOneById(string $vid){
    global $con;
    $req=$con->prepare('SELECT * FROM vehicule WHERE VID=?');
    $req->execute([secure($vid)]);
    $n=$req->rowCount();
    $req->closeCursor();
    return $n;
}
static public function getOneById1(int $vid){
    global $con;
    $req=$con->prepare('SELECT * FROM vehicule WHERE VID=?');
    $req->execute([secure($vid)]);
    $result=[];
    while ($rows = $req->fetchObject()):
        array_push($result, $rows);
    endwhile;
    $req->closeCursor();
    return $result;
}
static public function delete(int $vid): void {
    global $con;
    $re = $con->prepare('DELETE FROM vehicule WHERE VID=?');
    $re->execute([$vid]);
    }
static public function getAll() : array{
    global $con; 
    $req=$con->prepare('SELECT * FROM vehicule');
    $req->execute([]);
    $result=[];
    while ($rows = $req->fetchObject()):
        array_push($result, $rows);
    endwhile;
    $req->closeCursor();
    return $result;
}

static public function getImmabyclt($cid) : array{
    global $con; 
    $req=$con->prepare('SELECT * FROM vehicule INNER JOIN client WHERE client.CID=vehicule.CID AND client.CID=?');
    $req->execute([$cid]);
    $result=[];
    while ($rows = $req->fetchObject()):
        array_push($result, $rows);
    endwhile;
    $req->closeCursor();
    return $result;
}






}
