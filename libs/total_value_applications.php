<?php
class total_value_applications{
    function get_view(){
        global $pdo;
        $sql = 'SELECT sum_procedure
  FROM total_value_applications';
        $request = $pdo->prepare($sql);
        $request->execute();
        $data = $request->fetchAll();
        return $data;
    }

}
