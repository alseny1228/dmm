<?php
namespace models;
class Immatriculations{
static public function post(int $type,string $immatriculation){
        global $con;
        $req=$con->prepare('INSERT INTO immatriculation SET TID=?,titreimmatriculation=?');
        $req->execute([$type,secure($immatriculation)]);
        $req->closeCursor();
}
static public function getOneByName(string $name){
        global $con;
        $req=$con->prepare('SELECT * FROM immatriculation WHERE titreimmatriculation=?');
        $req->execute([secure($name)]);
        $n=$req->rowCount();
        $req->closeCursor();
        return $n;
}
static public function update(string $immatriculation,int $tid, int $iid){
        global $con;
        $req=$con->prepare('UPDATE immatriculation SET titreimmatriculation=?,TID=? WHERE IID=?');
        $req->execute([secure($immatriculation),$tid,$iid]);
        $req->closeCursor();
    }

static public function getAll() : array{
        global $con; 
        $req=$con->prepare('SELECT * FROM immatriculation');
        $req->execute([]);
        $result=[];
        while ($rows = $req->fetchObject()):
            array_push($result, $rows);
        endwhile;
        $req->closeCursor();
        return $result;
    }

static public function delete(int $iid): void {
        global $con;
        $re = $con->prepare('DELETE FROM immatriculation WHERE IID=?');
        $re->execute([$iid]);
    }

static public function getOneById(string $iid){
        global $con;
        $req=$con->prepare('SELECT * FROM immatriculation WHERE IID=?');
        $req->execute([secure($iid)]);
        $result=[];
        while ($rows = $req->fetchObject()):
            array_push($result, $rows);
        endwhile;
        $req->closeCursor();
        return $result;
    }
}
