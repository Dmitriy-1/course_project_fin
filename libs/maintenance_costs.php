<?php
class Maintenance_costs{
    function get_view(){
        global $pdo;
        $sql = 'SELECT sum_orders
  FROM maintenance_costs';
        $request = $pdo->prepare($sql);
        $request->execute();
        $data = $request->fetchAll();
        return $data;
    }
}
