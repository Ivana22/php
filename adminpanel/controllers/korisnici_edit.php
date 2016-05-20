<?php

include '/../usercheck.php';
include '/../db.php';

if (isset($_GET['id'])){
	$query = $db->prepare('select korisnik.id, username, password, ime, prezime, tipkorisnik_id from petplus.korisnik, petplus.tip_korisnik  where korisnik.id=:id and korisnik.tipkorisnik_id=petplus.tip_korisnik.id');
	$query->bindValue(':id', $_GET['id']);
	$query->execute();
	$res = $query->fetchAll(PDO::FETCH_ASSOC);


	$query2 = $db->prepare('select * from tip_korisnik');
	$query2->execute();
	$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
?>


<?php
}

if (isset($_POST['submit'])){
	$sql = "UPDATE korisnik set username=:username, password=:password, ime=:ime, prezime=:prezime, tipkorisnik_id=:tip where id=:id";
	
	$query=$db->prepare($sql);
	$query->bindValue(':id', $_POST['id']);
	$query->bindValue(':username', $_POST['username']);
	$query->bindValue(':password', $_POST['password']);
	$query->bindValue(':ime', $_POST['ime']);
	$query->bindValue(':prezime', $_POST['prezime']);
	$query->bindValue(':tip', $_POST['tip']);
	$query->execute();

	echo $query->rowCount() . "records Updated";
	header( "refresh:3;url=../admin.php?page=korisnici" );
}
?>
