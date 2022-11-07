<?php 

$server = "localhost";
$username = "root";
$password = "";
$db_name = "toko_tanaman_polaris";

$db = mysqli_connect($server, $username, $password, $db_name);

if(!$db){
    die("Gagal terhubung");
}