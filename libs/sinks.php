<?php
class Sinks{
    public $id_m;
    public $washing_address;
    public $service_list;
    public $washing_contacts;

    function sinks_cont()
    {

        $this->washing_address = trim($_POST['washing_address']);
        $this->service_list = trim($_POST['service_list']);
        $this->washing_contacts = trim($_POST['washing_contact']);
    }

    function set_sinks()
    {
        $this->id_m = $_SESSION['user']->id_m;
        global $pdo;
        $sql = 'SELECT * FROM sinks WHERE id_m=:id_m';
        $request = $pdo->prepare($sql);
        $request->bindParam(':id_m', $this->id_m);
        $request->execute();
        $data = $request->fetchAll();
        return $data;
    }
    function set_fullsinks()
    {
        global $pdo;
        $sql = 'SELECT * FROM sinks';
        $request = $pdo->prepare($sql);
        $request->execute();
        $data = $request->fetchAll();
        return $data;
    }


    function check_param()
    {
        $this->id_r = trim($_POST['id_r']);
        $this->id_a = trim($_POST['id_a']);
        $this->id_m = trim($_POST['id_m']);
        $this->id_w = trim($_POST['id_w']);
        $this->date_time_recording = trim($_POST['date_time_recording']);
        $this->full_procedure_request = trim($_POST['full_procedure_request']);
        $this->application_lead_time = trim($_POST['application_lead_time']);
        $this->status_request = trim($_POST['status_request']);
        if (trim($_POST['id_r']) && trim($_POST['id_a']) && trim($_POST['id_m']) && trim($_POST['id_w'])
            && trim($_POST['date_time_recording']) && trim($_POST['full_procedure_request'])
            && trim($_POST['application_lead_time']) && trim($_POST['status_request'])) {
        } else {
            throw new Exception('Пожалуйста, заполните все поля.');
        }
    }


    function create_sinks()
    {

        global $pdo;
        $sql = 'INSERT INTO sinks( washing_address, service_list, washing_contacts)
    VALUES (:washing_address, :service_list,:washing_contacts);';
        $params = [
            ':washing_address' => $this->washing_address,
            ':service_list' => $this->service_list,
            ':washing_contacts' => $this->washing_contacts,
        ];
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
    }

    function update_sinks()
    {
        global $pdo;

        $sql = 'UPDATE sinks   SET  service_list=:service_list, washing_contacts=:washing_contacts
                    WHERE id_m=:id_m';
        $params = [
            ':id_m' => $this->id_m,
            ':service_list' => $this->service_list,
            ':washing_contacts' => $this->washing_contacts
        ];

        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);


    }


}
