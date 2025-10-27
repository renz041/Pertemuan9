<?php
$server = "sql300.infinityfree.com";
$user = "if0_40208473"; 
$password = "9R7UNP86JpQc"; 
$nama_database = "if0_40208473_w009_db";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>
