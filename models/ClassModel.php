<?php
namespace models;
class Clients{
static public function post(){
        global $con;
        $req=$con->prepare('');
        $req->execute([]);
        $req->closeCursor();
}

static public function update(){
        global $con;
        $req=$con->prepare('');
        $req->execute([]);
        $req->closeCursor();
}

static public function getAll() : array{
        global $con; 
        $req=$con->prepare('');
        $req->execute([]);
        $result=[];
        while ($rows = $req->fetchObject()):
            array_push($result, $rows);
        endwhile;
        $req->closeCursor();
        return $result;
    }

static public function getOne(string $mid){
        global $con;
        $req=$con->prepare('');
        $req->execute([]);
        $n=$req->rowCount();
        $req->closeCursor();
        return $n;
    }

static public function delete(): void {
        global $con;
        $re = $con->prepare('');
        $re->execute([]);
    }
}
