<?php 
// login.php
 session_start();

$err = 0;
if(!isset($_POST['username']) && strlen($_POST['username']) == 0){$err++;}
if(!isset($_POST['password']) && strlen($_POST['password']) == 0){$err++;}
if($err == 0){
	include 'db.php';
	$sql = 'select korisnik.id, username, password, ime, prezime, tip from korisnik, tip_korisnik where username = :username and password = :password and korisnik.tipkorisnik_id = tip_korisnik.id';
	$query = $db->prepare($sql);
	$query->bindValue(':username', $_POST['username'], PDO::PARAM_STR);
	$query->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
	$query->execute();
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	if(count($res) != 0){ // korisnikot postoi
		$_SESSION['user'] = $res[0];
		header('location: admin.php');
	}else{ // korisnikot NE postoi
		header('location: index.php');
	}
	// echo "true";
}else{
	header('location: index.php');
	// echo "false";
}
// echo "test";

?>