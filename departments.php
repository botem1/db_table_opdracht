<?php

require 'db.php';

$departs = $con->query("SELECT department_id, department_name FROM departments");
            
foreach($departs as $depart){
    echo '<option value="' . $depart["department_id"] . '" name=department' . '>' . $depart["department_name"] . '</option>';
}