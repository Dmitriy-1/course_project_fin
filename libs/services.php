<?php
class Services{

    public $id_s;
    public $service_name;
    public $lead_time;
    public $price_service;


    function services_cont()
    {
        $this->service_name = trim($_POST['service_name']);
        $this->lead_time = trim($_POST['lead_time']);
        $this->price_service = trim($_POST['price_service']);
    }

    function set_services()
    {
        global $pdo;
        $sql = 'SELECT * FROM services';
        $request = $pdo->prepare($sql);
        $request->execute();
        $data = $request->fetchAll();
        return $data;
    }


    function check_param()
    {
        $this->id_s = trim($_POST['id_s']);
        $this->service_name = trim($_POST['service_name']);
        $this->lead_time = trim($_POST['lead_time']);
        $this->price_service = trim($_POST['price_service']);
        if (trim($_POST['id_s']) && trim($_POST['service_name']) && trim($_POST['lead_time']) && trim($_POST['price_service'])) {
        } else {
            throw new Exception('Пожалуйста, заполните все поля.');
        }
    }


    function create_services()
    {
        global $pdo;
        $sql = 'INSERT INTO services(service_name, lead_time, price_service)
    VALUES ( :service_name, :lead_time, :price_service);';
        $params = [
            ':service_name' => $this->service_name,
            ':lead_time' => $this->lead_time,
            ':price_service' => $this->price_service
        ];
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
    }

    function update_services()
    {
        global $pdo;
        $sql = 'UPDATE services  SET  service_name=:service_name, lead_time=:lead_time, price_service=:price_service
 WHERE id_s=:id_s';
        $params = [
            ':id_s' => $this->id_s,
            ':service_name' => $this->service_name,
            ':lead_time' => $this->lead_time,
            ':price_service' => $this->price_service
        ];
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
    }

    function delete_services(){
        $this->id_s = trim($_POST['id_s']);
        global $pdo;
        $sql = 'DELETE FROM services WHERE id_s=:id_s ';
        $params = [
            ':id_s' => $this->id_s,

        ];
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
    }





}