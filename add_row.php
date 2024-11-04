<?php

require 'db.php';

if(isset($_POST["firstName"], $_POST["lastName"], $_POST["departmentId"])){
    $result = $con->query("
        INSERT INTO employees (first_name, last_name, department_id)
        VALUES ('{$_POST["firstName"]}', '{$_POST["lastName"]}', {$_POST["departmentId"]});
    ");

    require 'display_table.php';
} else{
    echo "error occured";
}