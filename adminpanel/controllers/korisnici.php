<?php 
$query = $db->query('select korisnik.id, username, password, ime, prezime, tip from korisnik, tip_korisnik where korisnik.tipkorisnik_id=tip_korisnik.id');
$res = $query->fetchAll(PDO::FETCH_ASSOC);

$query2 = $db->prepare('select * from tip_korisnik');
	$query2->execute();
	$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);

?>