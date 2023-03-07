<?php

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="cadastrados";
$tableName = "cadastros";
$columns =['nome','curso'];

$conn = new mysqli ($host, $dbusername,$dbpassword,$dbname);


function fetch_data($dbname, $tablename, $columns){
    $columnName = implode(", ", $columns);
    $query = "SELECT ".$columnName." FROM $tableName"." ORDER BY id DESC";
    $result = $db->query($query);
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
    return $msg;
}
?>