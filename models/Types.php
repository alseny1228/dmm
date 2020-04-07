<?php
namespace models;
class Types{
static public function post(string $type){
        global $con;
        $req=$con->prepare('INSERT INTO types SET type=?');
        $req->execute([secure($type)]);
        $req->closeCursor();
}
static public function getOneByName(string $name){
        global $con;
        $req=$con->prepare('SELECT * FROM types WHERE type=?');
        $req->execute([secure($name)]);
        $n=$req->rowCount();
        $req->closeCursor();
        return $n;
}
static public function update(string $type,int $tid){
        global $con;
        $req=$con->prepare('UPDATE types SET type=? WHERE TID=?');
        $req->execute([secure($type),$tid]);
        $req->closeCursor();
    }

static public function getAll() : array{
        global $con; 
        $req=$con->prepare('SELECT * FROM types');
        $req->execute([]);
        $result=[];
        while ($rows = $req->fetchObject()):
            array_push($result, $rows);
        endwhile;
        $req->closeCursor();
        return $result;
    }

static public function delete(int $tid): void {
        global $con;
        $re = $con->prepare('DELETE FROM types WHERE TID=?');
        $re->execute([$tid]);
    }


static public function getOneById(string $id){
        global $con;
        $req=$con->prepare('SELECT * FROM types WHERE TID=?');
        $req->execute([secure($id)]);
        $result=[];
        while ($rows = $req->fetchObject()):
            array_push($result, $rows);
        endwhile;
        $req->closeCursor();
        return $result;
    }
}
