<?php
 echo $_GET['id'];
	if(isset($_GET['id']) == true && strlen($_GET['id']) >0){
		$sql = "select galerija.id as id, galerija.ime as galerija, galerija_sliki.id as slika_id, galerija_sliki.ime as slika_ime from galerija join galerija_sliki on galerija_sliki.id_galerija = galerija.id where galerija.id = :id";
		$query = $db -> prepare($sql);
		$query ->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
		$query->execute();
		$res = $query->fetchAll(PDO::FETCH_ASSOC);
	}



?>