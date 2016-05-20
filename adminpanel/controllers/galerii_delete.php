<?php
include '../usercheck.php';
include '../db.php';
if(isset($_GET['id']) == true && strlen($_GET['id']) > 0){
$query = $db->prepare("delete from galerija where id = :id");
$query->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$query->execute();
header('location: ../admin.php?page=galerii');
}
?>