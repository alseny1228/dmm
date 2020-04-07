<?php
namespace models;
class Paiement{
static public function post(int $eid,string $dates ,string $montant){
        global $con;
        $req=$con->prepare('INSERT INTO paiement SET EID=?,datepaiement=?,montant=?');
        $req->execute([$eid,secure($dates),secure($montant)]);
        $req->closeCursor();
}
static public function update(string $dates,string $statut,string $montant,int $pid, int $cid){
        global $con;
        $req=$con->prepare('UPDATE paiement SET datepaiement=?,statut=?,montant=? WHERE PID=? AND CID=?');
        $req->execute([secure($dates),secure($statut),secure($montant),$pid,$cid,]);
        $req->closeCursor();
    }

static public function getAll() : array{
        global $con; 
        $req=$con->prepare('SELECT * FROM paiement');
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
        $re = $con->prepare('DELETE FROM paiement WHERE IID=?');
        $re->execute([$iid]);
    }

static public function getOneById(string $iid){
        global $con;
        $req=$con->prepare('SELECT * FROM paiement WHERE IID=?');
        $req->execute([secure($iid)]);
        $result=[];
        while ($rows = $req->fetchObject()):
            array_push($result, $rows);
        endwhile;
        $req->closeCursor();
        return $result;
    }
}
