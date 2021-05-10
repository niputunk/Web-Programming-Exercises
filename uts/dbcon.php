<?php
$dbHost = 'localhost';
$dbName = 'game';
$dbUsername = 'game_mtk';
$dbPassword = '';
$conn = mysqli_connect($dbHost, $dbName, $dbUsername, $dbPassword);
if(!$conn->connect_error){
    die ("Koneksi gagal:". $conn->connect_error);
}
?>