
<div class="container">
<form action="controllers/korisnici_edit.php" method="post" class="add">
<h3>Ажурирај податоци за корисник</h3>
<table>
<tr>
	<td>Корисничко име:</td>
	<td><input type="text" name="username" value="<?=$res[0]['username'] ?>" required></td>
</tr>
<tr>
	<td>Лозинка:</td>
	<td><input type="text" name="password" value="<?=$res[0]['password'] ?>" required></td>
</tr>
<tr>
	<td>Име:</td>
	<td><input type="text" name="ime" value="<?=$res[0]['ime'] ?>" required></td>
</tr>
<tr>
	<td>Презиме:</td>
	<td><input type="text" name="prezime" value="<?=$res[0]['prezime'] ?>" required></td>
</tr>
<tr>
	<td>Тип на корисник:</td>
	<td><select name="tip">

  		<?php  for($i=0;$i<count($res2);$i++){ ?>
  		<option 

  		<?php  if($res2[$i]['id'] == $res[0]['tipkorisnik_id']){
				echo "selected";
  			}  
  			?> 

  		value="<?=$res2[$i]['id'] ?>"> <?=$res2[$i]['tip']?>
  		</option>

  		<?php } ?>
	</select></td>
</tr>
<tr>
	<input type="hidden" name="id" value="<?= $res[0]['id'] ?>">
</tr>
<!-- <label>
	<input type="hidden" name="korisnik_id" value="<?= $res[0]['korisnik.id'] ?>">
</label> -->
</table>
  <button type="submit" name="submit" class="kopche">Зачувај</button>
</form>
</div>