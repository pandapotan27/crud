<?php

$hostname = "localhost:3308";
$username = "root";
$password = "";
$database_name = "kuliah";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if ($db->connect_error) {
    echo "Gagal terhubung ke database";
    die("Error!");
}

?>