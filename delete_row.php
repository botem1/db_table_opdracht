<?php

require 'db.php';

if(isset($_POST["employee_id"])){
    $result = $con->query("
        DELETE FROM employees
        WHERE employee_id = {$_POST["employee_id"]};
    ");

    require 'display_table.php';
} else{
    echo "error occured";
}