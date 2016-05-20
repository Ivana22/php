<?php
	$query = $db->query('select * from galerija');
	$res = $query->fetchAll(PDO::FETCH_ASSOC);



?>