<?php
class Quantity_in_orders{


    public $order_number;
    public $detergent_code;
    public $order_quantity;


    function qorders_cont()
    {
        $this->order_number = trim($_POST['order_number']);
        $this->detergent_code = trim($_POST['detergent_code']);
        $this->order_quantity = trim($_POST['order_quantity']);
    }

    function set_orders()
    {
        global $pdo;
        $sql = 'select * from quantity_in_orders Q inner join (select order_number from orders O inner join 
administrator A on O.id_a=A.id_a) F on Q.order_number=F.order_number';
        $request = $pdo->prepare($sql);
        $request->execute();
        $data = $request->fetchAll();
        return $data;
    }


    function check_param()
    {
        $this->id_a = $_SESSION['user']->id_a;
        $this->order_number = trim($_POST['order_number']);
        $this->name_company = trim($_POST['name_company']);
        $this->order_date = trim($_POST['order_date']);
        $this->order_price = trim($_POST['order_price']);
        $this->shipping_cost = trim($_POST['shipping_cost']);
        $this->supplier_price = trim($_POST['supplier_price']);
        $this->text_order = trim($_POST['text_order']);
        if (trim($_POST['name_company']) && trim($_POST['order_date']) && trim($_POST['order_price']) && trim($_POST['shipping_cost'])
            && trim($_POST['supplier_price']) && trim($_POST['text_order'])) {
        } else {
            throw new Exception('Пожалуйста, заполните все поля.');
        }
    }


    function create_qorders()
    {

        global $pdo;
        $sql = 'INSERT INTO quantity_in_orders(order_number, detergent_code, order_quantity)
    VALUES ( :order_number, :detergent_code, :order_quantity);';
        $params = [
            ':order_number' => $this->order_number,
            ':detergent_code' => $this->detergent_code,
            ':order_quantity' => $this->order_quantity
        ];
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
    }

    function update_orders()
    {
        global $pdo;
        $sql = 'UPDATE orders   SET id_a=:id_a, name_company=:name_company, order_date=:order_date, 
order_price=:order_price, shipping_cost=:shipping_cost,supplier_price=:supplier_price, text_order=:text_order
 WHERE order_number=:order_number';
        $params = [
            ':order_number' => $this->order_number,
            ':id_a' => $this->id_a,
            ':name_company' => $this->name_company,
            ':order_date' => $this->order_date,
            ':order_price' => $this->order_price,
            ':shipping_cost' => $this->shipping_cost,
            ':supplier_price' => $this->supplier_price,
            ':text_order' => $this->text_order
        ];
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
    }

    function delete_quant_orders($order_number){
        $this->order_number = $order_number;
        global $pdo;
        $sql = 'DELETE FROM quantity_in_orders WHERE order_number=:order_number ';
        $params = [
            ':order_number' => $this->order_number,
        ];
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);}



}
