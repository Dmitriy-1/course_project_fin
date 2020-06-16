<?php
if (isset($_SESSION['user'])) {
    $login =$_SESSION['user']->login;
    $name=$_SESSION['user']->name_administrator;
    $surname=$_SESSION['user']->surname_a;

    if($_SESSION['user']->director==1){
        echo '
    <div class="hello_header">
            <p class="p_hello">Здравствуйте директор,  '.$name  . ' '.$surname.'</p>
            <form method="post" action="methods/logout.php" >
                <input type="submit" name="out" value="Выйти" class="button7 ">
            </form>
    </div>            
                    ';
    }
    else{
        echo '
        <div class="hello_header">
             <p class="p_hello">Здравствуйте администратор, '.$name  . ' '.$surname.'</p>
             <form method="post" action="methods/logout.php" >
                <input type="submit" name="out" value="Выйти" class="button7 ">
            </form>
        </div>           ';
    }
    $protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']), 'https') === FALSE ? 'http' : 'https';
    $hostame     = $_SERVER['HTTP_HOST'];
    $script   = $_SERVER['SCRIPT_NAME'];
    $params   = $_SERVER['QUERY_STRING'];
    $currentUrl = $protocol . '://' . $hostame . $script . '?' . $params;
    if($currentUrl=="$protocol://$hostame/index.php?") {
        echo "
 <ul class=\"action_list\">
            <li class=\"action_method\"> <select onchange=\"document.location=this.options[this.selectedIndex].value\">
                    <option selected disabled value=\"#\">Таблицы</option>
                    <option value=\"Client.php\">Клиент</option>
                    <option value=\"Request.php\">Заявка</option>
                    <option value=\"Administrator.php\">Администратор</option>
                    <option value=\"Sinks.php\">Мойка</option>
                    <option value=\"Washer.php\">Мойщик</option>
                    <option value=\"Orders.php\">Заказы</option>
                    <option value=\"Provider.php\">Поставщик</option>
                    <option value=\"Services.php\">Услуги</option>
                    <option value=\"Quantity_in_orders.php\">Количество средств в заказе</option>
                    <option value=\"Detergents.php\">Моющие средства</option>
                    <option value=\"Include.php\">Включает</option>
                </select>
                </li>
            <li class=\"action_method\"> <select onchange=\"document . location = this . options[this . selectedIndex] . value\">
                    <option selected disabled value=\"#\">Отчеты </option>
                    <option value =\"execute_view.php\"> Общая стоимость выполненных заявок </option >
                    <option value =\"execute_view2.php\"> Затраты на обслуживание </option >
                </select >
            </li >
        </ul>";
    }

    elseif ($currentUrl=="$protocol://$hostame/Director.php?") {
        echo "
 <ul class=\"action_list\">
            <li class=\"action_method\"> <select onchange=\"document.location=this.options[this.selectedIndex].value\">
                    <option selected disabled value=\"#\">Таблицы</option>                 
                    <option value=\"Administrator.php\">Администратор</option>
                    <option value=\"Sinks.php\">Мойка</option>
                    <option value=\"Orders.php\">Заказы</option>
                    <option value=\"Provider.php\">Поставщик</option>
                    <option value=\"Quantity_in_orders.php\">Количество средств в заказе</option>
                    <option value=\"Detergents.php\">Моющие средства</option>
                </select>
                </li>
            <li class=\"action_method\"> <select onchange=\"document . location = this . options[this . selectedIndex] . value\">
                    <option selected disabled value=\"#\">Отчеты </option>
                    <option value =\"execute_view.php\"> Общая стоимость выполненных заявок </option >
                    <option value =\"execute_view2.php\"> Затраты на обслуживание </option >
                </select >
            </li >
        </ul>";
    }


    else {
        echo "
 <ul class=\"action_list\">

            <li class=\"action_method\"><a class=\"action_href\" href=\"./../index.php\">Главная</a></li>
            <li class=\"action_method\"> <select onchange=\"document . location = this . options[this . selectedIndex] . value\">
                    <option selected disabled value=\"#\">Отчеты</option>
                    <option value = \"execute_view.php\" > Общая стоимость выполненных заявок </option >
                    <option value =\"execute_view2.php\"> Затраты на обслуживание </option >
                </select >
            </li >
        </ul>";
    }



}
else{
    $protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']), 'https') === FALSE ? 'http' : 'https';
    $hostame     = $_SERVER['HTTP_HOST'];
    $script   = $_SERVER['SCRIPT_NAME'];
    $params   = $_SERVER['QUERY_STRING'];
    $currentUrl = $protocol . '://' . $hostame . $script . '?' . $params;
    if($currentUrl=="$protocol://$hostame/index.php?") {
        echo '       
       <div class="hello_header">
       <p class="p_hello">Здравствуйте, выполните вход</p>
          <form method="post" action="autorization.php">
                <input type="submit" name="sign_in"  value="Вход" class="button7 btn">
          </form>
       </div>           
                        ';
    }
     if($currentUrl=="$protocol://$hostame/autorization.php?") {
        echo '
   <div class="hello_header">
       <p class="p_hello">Здравствуйте, выполните вход</p>
           <form method="post" action="./../index.php">
                        <input type="submit" name="index" value="Главная" class="button7 btn">
                    </form>
       </div>    
                 
    </div>
                        ';
    }
}





