<?php 
	if(isset($_SESSION['user'])){
		if($_SESSION['user']['tip'] == 'administrator'){
	
		?>
		
	
<div class="container">

<h3>Корисници</h3>

<table class="table-fill">
	<thead>
		<tr>
			<th class="text-left">ИД</th>
			<th class="text-left">Корисничко Име</th>
			<th class="text-left">Лозинка</th>
			<th class="text-left">Име</th>
			<th class="text-left">Презиме</th>
			<th class="text-left">Тип корисник</th>
			<th class="text-left"><span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></th>
			<th class="text-left"><span><i class="fa fa-trash-o" aria-hidden="true"></i></span></th>
		</tr>
	</thead>
	<tbody class="table-hover">

	<?php foreach($res as $row){ ?>

	<tr>
		<td><?=$row['id']?></td>
		<td><?=$row['username']?></td>
		<td><?=$row['password']?></td>
		<td><?=$row['ime']?></td>
		<td><?=$row['prezime']?></td>
		<td><?=$row['tip']?></td>
		<td>
			<a href="?page=korisnici_edit&id=<?=$row['id']?>">
			 Промени </a>
		</td>
		<td>
			<a href="controllers/korisnici_delete.php?id=<?=$row['id']?>">
				Избриши
			</a>
		</td>
		<?php } ?>
	</tr>
		</tbody>
</table>
<hr>

	<form action="controllers/korisnici_add.php" method="post" class="add">
	<h3>Додади нов корисник</h3>
	<table>
	<tr>
		<td>Корисничко име: </td>
		<td><input type="email" value="" name="username" required></td>
	</tr>
	
	<tr>
		<td>Лозинка: </td>
		<td><input type="password" value="" name="password" required></td>
	</tr>
	<tr>
		<td>Име:</td>
		<td><input type="text" value="" name="ime" required></td>
	</tr>
	<tr>
		<td>Презиме:</td>
		<td><input type="text" value="" name="prezime" required></td>
	</tr>
	<tr>
	<td>Тип на корисник: </td>
	<td><select name="tipkorisnik_id">
  		<?php  for($i=0;$i<count($res2);$i++){ ?>
	  		<option
			 value="<?=$res2[$i]['id'] ?>"><?=$res2[$i]['tip']?>
	  		</option>
  		<?php } ?>
	</select></td>
	</tr>
	</table>
	<button name="submit" class="kopche">Додади нов корисник</button>
</form>

</div>
<?php
		}
	}
	?>