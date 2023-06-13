<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nadinesiswi_sas_2023";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die('Gagal Koneksi Ke Database! Karena: ' . $conn->connect_error);
}

$koneksioy = mysqli_connect("localhost", "root", "", "nadinesiswi_sas_2023");
?>  