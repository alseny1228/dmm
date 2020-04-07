<?php
namespace models;
class Factures{
static public function postcode(): void {
    global $con;
    $re = $con->prepare('INSERT INTO codefacture (codef) VALUES (NULL)');
    $re->execute([]);
}

static public function getcode(): int {
    global $con;
    $req = $con->prepare('SELECT * FROM codefacture');
    $req->execute([]);
    $n=$req->rowCount();
    $req->closeCursor();
    return $n;
    }
static public function post(string $type,string $reference,int $cid,string $immatricualtion,string $datedebut ,string $datefin,string $designation,string $quantite,string $prixu,int $total,int $montantp,int $reste){
    global $con;
    $req=$con->prepare('INSERT INTO facture SET types=?,reference=?,CID=?,immatriculation=?,datedebut=?,datefin=?,designation=?,quantite=?,prixunitaire=?,prixtotal=?,montantpaye=?,reste=?');
    $req->execute([secure($type),secure($reference),$cid,secure($immatricualtion),secure($datedebut),secure($datefin),secure($designation),secure($quantite),secure($prixu),$total,$montantp,$reste]);
    $req->closeCursor();
    }
static public function getfacture(string $reference):array{
    global $con;
    $req=$con->prepare('SELECT * FROM client 
    INNER JOIN vehicule 
    INNER JOIN facture 
    WHERE client.CID=facture.CID
    AND vehicule.immatriculation=facture.immatriculation
    AND facture.reference=?');
    $req->execute([secure($reference)]);
    $result=[];
    while ($rows = $req->fetchObject()):
        array_push($result, $rows);
    endwhile;
    $req->closeCursor();
    return $result;
    }
static public function getinfo(string $reference):array{
    global $con;
    $req=$con->prepare('SELECT * FROM client 
    INNER JOIN vehicule 
    INNER JOIN facture 
    WHERE client.CID=facture.CID
    AND vehicule.immatriculation=facture.immatriculation
    AND facture.reference=? LIMIT 1');
    $req->execute([secure($reference)]);
    $result=[];
    while ($rows = $req->fetchObject()):
        array_push($result, $rows);
    endwhile;
    $req->closeCursor();
    return $result;
    }
}



// INSERT INTO `facture` (`FACID`, `type`, `reference`, `CID`, `immatriculation`, `datedebut`, `datefin`, `montantpaye`, `reste`, `dateemission`) VALUES (NULL, 'e', 'e', '24', 'e', 'e', 'c', 'c', 'c', current_timestamp());