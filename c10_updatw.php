<?php 
// c11_add.php
$dsn = 'mysql:dbname=ljubenlape;host=127.0.0.1';
$username = 'root';
$password = 'root';
$db = new PDO($dsn, $username, $password);
// print_r($_POST);
$sql = 'update korisnici set ime=$_POST['ime'], email=$_POST['email'], password=$_POST['password'], id_tip_korisnici=$_POST['id_tip_korisnici'] where id = '.$_POST['id'];
$db->query($sql);

header('location: c10.php');
?>





