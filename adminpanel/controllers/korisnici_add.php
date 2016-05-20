<?php
include '/../usercheck.php';
include '/../db.php';
echo 'test';
if(isset($_POST['submit'])){
	$sql='insert into korisnik (username, password, ime, prezime, tipkorisnik_id) values (:username, :password, :ime, :prezime, :tipkorisnik_id)';
	$query=$db->prepare($sql);
	$query->bindValue(':username', $_POST['username']);
	$query->bindValue(':password', $_POST['password']);
	$query->bindValue(':ime', $_POST['ime']);
	$query->bindValue(':prezime', $_POST['prezime']);
	$query->bindValue(':tipkorisnik_id', $_POST['tipkorisnik_id']);
	$query->execute();

	$query2 = $db->prepare('select * from tip_korisnik');
	$query2->execute();
	$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!-- <form action="korisnici_add.php" method="post">
	<label>
		Корисничко име: <br>
		<input type="text" name="username" required><br>
	</label>
	<label>
		Лозинка: <br>
		<input type="password" name="password" required><br>
	</label>
	<label>
		Име: <br>
		<input type="text" name="ime" required><br>
	</label>
	<label>
		Презиме: <br>
		<input type="prezime" name="prezime" required><br>
	</label>
	<label>
	Тип на корисник: <br>
	<select name="tip">
  		<?php  for($i=0;$i<count($res2);$i++){ ?>
	  		<option
			 value="<?=$res2[$i]['id'] ?>"><?=$res2[$i]['tip']?>
	  		</option>
  		<?php } ?>
	</select>
	</label>
	<button type="submit" name="submit">Додади</button> -->
</form>