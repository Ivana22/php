<?php 
$query = $db->query('select blog.id, naslov, opis, datum, korisnik.ime, korisnik.prezime, kategorija from blog, blog_kategorija, korisnik where blog.korisnik_id=korisnik.id and blog.kategorija_id=blog_kategorija.id');
$res = $query->fetchAll(PDO::FETCH_ASSOC);
?>