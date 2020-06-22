<?php
class Orders{

    public $order_number;
    public $id_a;
    public $name_company;
    public $order_date;
    public $order_price;
    public $shipping_cost;
    public $supplier_price;
    public $text_order;

    function orders_cont()
    {
        $this->id_a = $_SESSION['user']->id_a;
        $this->name_company = trim($_POST['list_prov']);
        $this->order_date = trim($_POST['order_date']);
        //$this->order_price = trim($_POST['order_price']);
       // $this->shipping_cost = trim($_POST['shipping_cost']);
       // $this->supplier_price = trim($_POST['supplier_price']);
        $this->text_order = 'закупка средств для мойки';
    }

    function set_orders()
    {
        $this->id_a = $_SESSION['user']->id_a;
        global $pdo;
        $sql = 'SELECT * FROM orders WHERE id_a=:id_a';
        $request = $pdo->prepare($sql);
        $request->bindParam(':id_a', $this->id_a);
        $request->execute();
        $data = $request->fetchAll();
        return $data;
    }

    function set_orders_id()
    {
        global $pdo;
        $sql = 'SELECT MAX(order_number) FROM orders ';
        $request = $pdo->prepare($sql);
        $request->execute();
        $data = $request->fetchAll();
        return $data;
    }

    function set_fullorders()
    {

        global $pdo;
        $sql = 'SELECT * FROM orders ';
        $request = $pdo->prepare($sql);
        $request->execute();
        $data = $request->fetchAll();
        return $data;
    }



    function check_param()
    {
        $this->id_a=$_SESSION['user']->id_a;
        $this->order_number = trim($_POST['order_number']);
        $this->name_company = trim($_POST['name_company']);
        $this->order_date = trim($_POST['order_date']);
        $this->order_price = trim($_POST['order_price']);
        $this->shipping_cost = trim($_POST['shipping_cost']);
        $this->supplier_price = trim($_POST['supplier_price']);
        $this->text_order = trim($_POST['text_order']);
        if (trim($_POST['name_company']) && trim($_POST['order_date']) && trim($_POST['order_price']) && trim($_POST['shipping_cost'])
            && trim($_POST['supplier_price'])&& trim($_POST['text_order'])) {
        } else {
            throw new Exception('Пожалуйста, заполните все поля.');
        }
    }


    function create_orders()
    {
        global $pdo;
        $sql = 'INSERT INTO orders(id_a, name_company, order_date, order_price, shipping_cost, 
            supplier_price, text_order)
    VALUES ( :id_a, :name_company, :order_date, :order_price, :shipping_cost, 
            :supplier_price, :text_order);';
        $params = [
            ':id_a' => $this->id_a,
            ':name_company' => $this->name_company,
            ':order_date' => $this->order_date,
            ':order_price' => $this->order_price,
            ':shipping_cost' => number_format($this->shipping_cost, 2, ',','' ),
            ':supplier_price' => number_format($this->supplier_price, 2, ',',''),
            ':text_order' => $this->text_order
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


    function delete_orders($id_a){
        $this->id_a = $id_a;
        global $pdo;
        $sql = 'DELETE FROM orders WHERE id_a=:id_a ';
        $params = [
            ':id_a' => $this->id_a,
        ];
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);}


    function set_orders_quant($id_a)
    {
        $this->id_a = $id_a;
        global $pdo;
        $sql = 'SELECT order_number FROM orders WHERE id_a=:id_a';
        $request = $pdo->prepare($sql);
        $request->bindParam(':id_a', $this->id_a);
        $request->execute();
        $data = $request->fetchAll();
        return $data;
    }
}
