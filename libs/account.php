<?php
class Account
{
    public $id_a;
    public $id_m;
    public $name_administrator;
    public $surname_a;
    public $patronymic_a;
    public $salary_a;
    public $password;
    public $login;
    public $director;

    function checkedLogin()
    {
        global $pdo;
        $sql = 'SELECT * FROM administrator WHERE login = :login and password=:password  ';//and director=:director
        $request = $pdo->prepare($sql);
        $request->bindParam(':password',  $this->password);
        $request->bindParam(':login',  $this->login);
        $request->setFetchMode(PDO::FETCH_CLASS, 'Account');
        $request->execute();
        $data = $request->fetch();
        return $data;
    }

}