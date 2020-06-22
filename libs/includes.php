<?php

class Includes
{
    public $id_s;
    public $id_r;


    function include_cont()
    {
        $this->id_s = trim($_POST['id_s']);
        $this->id_r = trim($_POST['id_r']);
    }

    function set_include()
    {
        $id_a=$_SESSION['user']->id_a;
        global $pdo;
        $sql = 'SELECT * FROM includes I INNER JOIN (select id_r from request R INNER JOIN administrator A on R.id_a=:id_a) W
on I.id_r=W.id_r';
        $request = $pdo->prepare($sql);
        $request->bindParam(':id_a', $id_a);
        $request->execute();
        $data = $request->fetchAll();
        return $data;
    }





    function set_include_request($id_r){
        $this->id_r=$id_r;
        global $pdo;
        $sql = 'select * from includes where id_r=:id_r';
        $request = $pdo->prepare($sql);
        $request->bindParam(':id_r', $this->id_r);
        $request->execute();
        $data = $request->fetchAll();
        return $data;
    }





    function create_include($id_r,$id_s)
    {
        global $pdo;
        $sql = 'INSERT INTO includes (id_s, id_r)
    VALUES ( :id_s, :id_r);';
        $params = [
            ':id_s' => $id_s,
            ':id_r' => $id_r
        ];
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
    }

   function delete_includes($id_r){
        $this->id_r = $id_r;
        global $pdo;
        $sql = 'DELETE FROM includes WHERE id_r=:id_r ';
        $params = [
            ':id_r' => $this->id_r,
        ];
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);}

    function delete_includes_services($id_s){
        $this->id_s = $id_s;
        global $pdo;
        $sql = 'DELETE FROM includes WHERE id_s=:id_s ';
        $params = [
            ':id_s' => $this->id_s,
        ];
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);}
}
