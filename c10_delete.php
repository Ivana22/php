<?php 
// c11_add.php
$dsn = 'mysql:dbname=ljubenlape;host=127.0.0.1';
$username = 'root';
$password = 'root';
$db = new PDO($dsn, $username, $password);
// print_r($_POST);
$sql = 'delete from korisnici where id = '.$_GET['id'];
$db->query($sql);
header('location: c10.php');
?>