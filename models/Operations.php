<?php
namespace models;
class Operations{
static public function post(int $idclient, int $iid, int $tid, string $dates, string $libelle,string $montant,string $quantite,string $ref){
        global $con;
        $req=$con->prepare('INSERT INTO operations SET CID=?,IID=?,TID=?,dates=?,libelle=?,montant=?,quantite=?,ref=?');
        $req->execute([$idclient,$iid,$tid,secure($dates),secure($libelle),secure($montant),secure($quantite),secure($ref)]);
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
static public function getRef(){
        global $con;
        $req=$con->prepare('SELECT * FROM reference');
        $req->execute([]);
        $n=$req->rowCount();
        $req->closeCursor();
        return $n;
}
static public function postRef(){
        global $con;
        $req=$con->prepare('INSERT INTO reference (RID) VALUES (NULL)');
        $req->execute([]);
        $req->closeCursor();
}
static public function update(string $immatriculation,int $tid, int $iid){
        global $con;
        $req=$con->prepare('UPDATE immatriculation SET titreimmatriculation=?,TID=? WHERE IID=?');
        $req->execute([secure($immatriculation),$tid,$iid]);
        $req->closeCursor();
    }

static public function getAll() : array{
        global $con; 
        $req=$con->prepare('SELECT * FROM client 
            INNER JOIN immatriculation 
            INNER JOIN typeoperation 
            INNER JOIN operations 
            WHERE client.CID=operations.CID 
            AND immatriculation.IID=operations.IID 
            AND typeoperation.TOID=operations.TID');
        $req->execute([]);
        $result=[];
        while ($rows = $req->fetchObject()):
            array_push($result, $rows);
        endwhile;
        $req->closeCursor();
        return $result;
    }


static public function getOneById(int $oid) : array{
        global $con; 
        $req=$con->prepare('SELECT * FROM client 
            INNER JOIN immatriculation 
            INNER JOIN typeoperation 
            INNER JOIN operations 
            WHERE client.CID=operations.CID 
            AND immatriculation.IID=operations.IID 
            AND typeoperation.TOID=operations.TID AND OID=?
            ');
        $req->execute([$oid]);
        $result=[];
        while ($rows = $req->fetchObject()):
            array_push($result, $rows);
        endwhile;
        $req->closeCursor();
        return $result;
    }

static public function getOneByIdPrint(int $cid,string $ref) : array{
        global $con; 
        $req=$con->prepare('SELECT * FROM client 
            INNER JOIN immatriculation 
            INNER JOIN typeoperation 
            INNER JOIN operations 
            WHERE client.CID=operations.CID 
            AND immatriculation.IID=operations.IID 
            AND typeoperation.TOID=operations.TID 
            AND operations.CID=? AND operations.ref=?
            ');
        $req->execute([$cid,secure($ref)]);
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
}
