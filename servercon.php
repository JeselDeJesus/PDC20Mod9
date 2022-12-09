<?php
$dbconnect = mysqli_connect("localhost", "pdc20user", "ripper1331", "pdc20mod9");
if (mysqli_connect_errno()){
    echo "failed to connect to MySQL: " . mysqli_connect_errno();
    die();
}
?>