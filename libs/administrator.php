<?php
class Administrator{


    public $id_a;
    public $id_m;
    public $name_administrator;
    public $surname_a;
    public $patronymic_a;
    public $salary_a;
    public $password;
    public $login;
    public $director;


    function admin_cont()
    {
        $this->id_m = trim($_POST['id_m']);
        $this->name_administrator = trim($_POST['name_administrator']);
        $this->surname_a = trim($_POST['surname_a']);
        $this->patronymic_a = trim($_POST['patronymic_a']);
        $this->salary_a = trim($_POST['salary_a']);
        $this->password = trim($_POST['password']);
        $this->login = trim($_POST['login']);
        $this->director='False';

    }


    function set_admin()
    {
        $this->login=$_SESSION['user']->login;
        $this->password=$_SESSION['user']->password;
        global $pdo;
        $sql = 'SELECT * FROM administrator WHERE login = :login and password=:password  ';//and director=:director
        $request = $pdo->prepare($sql);
        $request->bindParam(':password', $this->password);
        $request->bindParam(':login', $this->login);
        $request->setFetchMode(PDO::FETCH_CLASS, 'Account');
        $request->execute();
        $data = $request->fetch();
        return $data;
    }
    function set_fulladmin()
    {
        global $pdo;
        $sql = 'SELECT * FROM administrator WHERE director!=TRUE';
        $request = $pdo->prepare($sql);
        $request->execute();
        $data = $request->fetchAll();
        return $data;
    }

    function check_param(){
        $this->id_a = trim($_POST['id_a']);
        $this->id_m = trim($_POST['id_m']);
        $this->name_administrator = trim($_POST['name_administrator']);
        $this->surname_a = trim($_POST['surname_a']);
        $this->patronymic_a = trim($_POST['patronymic_a']);
        $this->salary_a = trim($_POST['salary_a']);
        if(trim($_POST['id_a']) && trim($_POST['id_m'])&&trim($_POST['name_administrator'])&&
            trim($_POST['surname_a'])&&trim($_POST['patronymic_a'])&&trim($_POST['salary_a'])){

        } else {
            throw new Exception('Пожалуйста, заполните все поля.');
        }
    }


    function update_admin(){
        global $pdo;
        $sql = 'UPDATE administrator SET id_m=:id_m, name_administrator=:name_administrator, surname_a=:surname_a,
                        patronymic_a=:patronymic_a, salary_a=:salary_a
                WHERE id_a=:id_a';
        $params = [
            ':id_a' => $this->id_a,
            ':id_m' => $this->id_m,
            ':name_administrator' => $this->name_administrator,
            ':surname_a' =>  $this->surname_a,
            ':patronymic_a' => $this->patronymic_a,
            ':salary_a' => $this->salary_a
        ];
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
    }

    function create_admin(){
        global $pdo;
        $sql = 'INSERT INTO administrator(id_m, name_administrator, surname_a, patronymic_a, salary_a, 
            password, login, director)
    VALUES (:id_m, :name_administrator, :surname_a, :patronymic_a, :salary_a, :password, 
            :login, :director)';
        $params = [
            ':id_m' => $this->id_m,
            ':name_administrator' => $this->name_administrator,
            ':surname_a' =>  $this->surname_a,
            ':patronymic_a' => $this->patronymic_a,
            ':salary_a' => $this->salary_a,
            ':password' => $this->password,
            ':login' => $this->login,
            ':director' => $this->director
        ];
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
    }
    function delete_admin(){
        $this->id_a = trim($_POST['id_a']);
        global $pdo;
        $sql = 'DELETE FROM administrator WHERE id_a=:id_a ';
        $params = [
            ':id_a' => $this->id_a,
        ];
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);}


}

