<?php
namespace models;
class Typeoperation{

static public function post(string $typeoperation){
        global $con;
        $req=$con->prepare('INSERT INTO typeoperation SET typeoperation=?');
        $req->execute([secure($typeoperation)]);
        $req->closeCursor();
}
static public function getOneByName(string $name){
        global $con;
        $req=$con->prepare('SELECT * FROM typeoperation WHERE typeoperation=?');
        $req->execute([secure($name)]);
        $n=$req->rowCount();
        $req->closeCursor();
        return $n;
}
static public function update(string $typeoperation,int $TOID){
        global $con;
        $req=$con->prepare('UPDATE typeoperation SET typeoperation=? WHERE TOID=?');
        $req->execute([secure($typeoperation),$TOID]);
        $req->closeCursor();
    }

static public function getAll() : array{
        global $con; 
        $req=$con->prepare('SELECT * FROM typeoperation');
        $req->execute([]);
        $result=[];
        while ($rows = $req->fetchObject()):
            array_push($result, $rows);
        endwhile;
        $req->closeCursor();
        return $result;
    }

static public function delete(int $TOID): void {
        global $con;
        $re = $con->prepare('DELETE FROM typeoperation WHERE TOID=?');
        $re->execute([$TOID]);
    }

static public function getOneById(int $id){
        global $con;
        $req=$con->prepare('SELECT * FROM typeoperation WHERE TOID=?');
        $req->execute([secure($id)]);
        $result=[];
        while ($rows = $req->fetchObject()):
            array_push($result, $rows);
        endwhile;
        $req->closeCursor();
        return $result;
    }
}
