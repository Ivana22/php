<div class="container">
<form action="controllers/novosti_add.php" method="post" class="add" enctype="multipart/form-data">
	<h3>Додади новoст</h3>
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
	</table>
	<button name="submit" class="kopche">Додади новост</button>
</form>

</div>