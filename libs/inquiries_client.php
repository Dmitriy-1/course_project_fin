<?php
class Inquiries{

    public $id_k;
    public $phone_number;
    public $name_k;
    public $surname_k;
    public $patronymic_k;

    function client_cont()
    {
        $this->phone_number = trim($_POST['phone_number']);
        $this->name_k = trim($_POST['name_k']);
        $this->surname_k = trim($_POST['surname_k']);
        $this->patronymic_k = trim($_POST['patronymic_k']);
    }

    function set_client(){
        global $pdo;
        $sql = 'SELECT * FROM client';
        $request = $pdo->prepare($sql);
        $request->execute();
        $data = $request->fetchAll();
        return $data;
    }

    function check_param(){
        $this->id_k = trim($_POST['id_K']);
        $this->phone_number = trim($_POST['phone_number']);
        $this->name_k = trim($_POST['name_client']);
        $this->surname_k = trim($_POST['surname_client']);
        $this->patronymic_k = trim($_POST['patronymic_k']);
        if(trim($_POST['id_K']) && trim($_POST['phone_number'])&&trim($_POST['name_client'])&&
            trim($_POST['surname_client'])&&trim($_POST['patronymic_k'])){

        } else {
            throw new Exception('Пожалуйста, заполните все поля.');
        }
    }

    function create_client(){
        global $pdo;
        $sql = 'INSERT INTO client(phone_number, name_k, surname_k, patronymic_k)
    VALUES (:phone_number,:name_k, :surname_k, :patronymic_k)';
        $params = [
            ':phone_number' => $this->phone_number,
            ':name_k' => $this->name_k,
            ':surname_k' =>  $this->surname_k,
            ':patronymic_k' => $this->patronymic_k
        ];
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
    }

    function update_client(){
        global $pdo;
        $sql = 'UPDATE client   SET  phone_number=:phone_number, name_k=:name_k, surname_k=:surname_k, patronymic_k=:patronymic_k
     WHERE id_k=:id_k
     ';
        $params = [
            ':id_k' => $this->id_k,
            ':phone_number' => $this->phone_number,
            ':name_k' => $this->name_k,
            ':surname_k' =>  $this->surname_k,
            ':patronymic_k' => $this->patronymic_k
        ];
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
    }


    function delete_client(){
        $this->id_k = trim($_POST['id_K']);
        global $pdo;
        $sql = 'DELETE FROM client WHERE id_k=:id_k ';
        $params = [
            ':id_k' => $this->id_k,
        ];
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
    }
}