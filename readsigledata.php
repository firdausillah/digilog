<?php
include_once('database.php');

$connect = mysqli_connect($servername, $username, $password, $dbname);
$id_record = $_GET['id_record'];
$tabel = $_GET['tabel'];
$query = "SELECT * FROM $tabel WHERE id = $id_record";
$query = mysqli_query($connect, $query);
$query = mysqli_fetch_object($query);
echo json_encode($query);



$connect = mysqli_connect($servername, $username, $password, $dbname);
$id_port = $_GET['id_port'];
$id_panel = $_GET['id_panel'];
$tabel = $_GET['tabel'];
$query = "SELECT * FROM $tabel WHERE id_panel = $id_panel AND id_port = $id_port";
$query = mysqli_query($connect, $query);
$query = mysqli_fetch_object($query);
echo json_encode($query);
?>
