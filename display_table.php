<?php

require 'db.php';

$result = $con->query("
    SELECT e.employee_id, e.first_name, e.last_name, d.department_name
    FROM employees e
    LEFT JOIN departments d ON e.department_id = d.department_id;
");


foreach($result as $row){
    //print_r($row);
    echo "<tr id=\"{$row["employee_id"]}\">";
    //echo "<tr>";
    echo "<td>{$row["first_name"]}</td>";
    echo "<td>{$row["last_name"]}</td>";
    echo "<td>";
        echo (
            (is_null($row["department_name"])) ? "-" : $row["department_name"]
        );
    echo "</td>";
    echo "
            <td class=\"deleteBtnCell\">
                <button class=\"deleteBtn\">X</button>
            </td>
        ";
    echo "</tr>";
}
