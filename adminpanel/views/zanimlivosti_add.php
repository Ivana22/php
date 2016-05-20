<div class="container">
<form action="controllers/zanimlivosti_add.php" method="post" class="add" enctype="multipart/form-data">
	<h3>Додади нов блог пост</h3>
	<table>
	<tr>
		<td>Наслов: </td>
		<td><input type="text" value="" name="naslov" required></td>
	</tr>
	
	<tr>
		<td>Опис: </td>
		<td><input type="text" value="" name="opis" required></td>
	</tr>
	<tr>
		<td>Текст:</td>
		<td><input type="text" value="" name="tekst" required></td>
	</tr>
	<tr>
		<td>Слика:</td>
		<td><input type="file" value="" name="slika" required></td>
	</tr>
	<tr>
	<td>Kатегорија: </td>
	<td><select name="kategorija">
  		<?php  for($i=0;$i<count($res2);$i++){ ?>
	  		<option
			 value="<?=$res2[$i]['id'] ?>"><?=$res2[$i]['kategorija']?>
	  		</option>
  		<?php } ?>
	</select></td>
	</tr>
	</table>
	<button name="submit" class="kopche">Додади нов корисник</button>
</form>

</div>