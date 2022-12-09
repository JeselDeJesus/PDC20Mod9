<?php
header("Content-Type:application/json");

include ('servercon.php');

$stnt = $dbconnect -> prepare("SELECT id, name, age, salary from emp_tbl");

$stnt -> execute();
$result = $stnt -> get_result();
$outp = $result ->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);
?>