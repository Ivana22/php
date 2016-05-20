<?php
$query = $db->query('select novosti.id, naslov, opis, datum, korisnik.ime, korisnik.prezime from novosti, korisnik where novosti.korisnik_id=korisnik.id');

$res = $query->fetchAll(PDO::FETCH_ASSOC);




?>