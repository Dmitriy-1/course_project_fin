<?php
class Washer{




    public $id_w;
    public $id_m;
    public $name_w;
    public $detergents;
    public $surname_w;
    public $patronymic_w;
    public $salary_w;


    function washer_cont()
    {
        $this->id_m=$_SESSION['user']->id_m;
        $this->name_w = trim($_POST['name_w']);
        $this->surname_w = trim($_POST['surname_w']);
        $this->patronymic_w = trim($_POST['patronymic_w']);
        $this->detergents = trim($_POST['detergents']);
        $this->salary_w = trim($_POST['salary_w']);

    }

    function set_washers()
    {
        $this->id_a = $_SESSION['user']->id_a;
        global $pdo;
        $sql = 'SELECT * FROM washer W INNER JOIN (SELECT S.id_m FROM sinks S INNER JOIN administrator A on S.id_m=A.id_m
                WHERE A.id_a=:id_a) M on W.id_m=M.id_m';
        $request = $pdo->prepare($sql);
        $request->bindParam(':id_a', $this->id_a);
        $request->execute();
        $data = $request->fetchAll();
        return $data;
    }

    function check_param()
    {
        $this->id_w=trim($_POST['id_w']);
        $this->name_w = trim($_POST['name_w']);
        $this->detergents = trim($_POST['detergents']);
        $this->surname_w = trim($_POST['surname_w']);
        $this->patronymic_w = trim($_POST['patronymic_w']);
        $this->salary_w = trim($_POST['salary_w']);
        if (trim($_POST['name_w']) && trim($_POST['detergents']) && trim($_POST['surname_w']) && trim($_POST['patronymic_w'])
            && trim($_POST['salary_w'])) {
        } else {
            throw new Exception('Пожалуйста, заполните все поля.');
        }
    }


    function create_washer()
    {
        global $pdo;
        $sql = 'INSERT INTO washer(id_m, name_w, detergents, surname_w, patronymic_w, salary_w)
    VALUES ( :id_m, :name_w, :detergents, :surname_w, :patronymic_w, :salary_w)';
        $params = [
            ':id_m' => $this->id_m,
            ':name_w' => $this->name_w,
            ':detergents' => $this->detergents,
            ':surname_w' => $this->surname_w,
            ':patronymic_w' => $this->patronymic_w,
            ':salary_w' => $this->salary_w
        ];
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
    }

    function update_washer()
    {
        global $pdo;
        $sql = 'UPDATE washer SET name_w=:name_w, detergents=:detergents, surname_w=:surname_w, patronymic_w=:patronymic_w, 
                   salary_w=:salary_w
                    WHERE id_w=:id_w';
        $params = [
            ':id_w' => $this->id_w,
            ':name_w' => $this->name_w,
            ':detergents' => $this->detergents,
            ':surname_w' => $this->surname_w,
            ':patronymic_w' => $this->patronymic_w,
            ':salary_w' => $this->salary_w
        ];
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
    }


}
