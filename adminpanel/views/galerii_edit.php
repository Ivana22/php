<div class="container">
<h3>Галерија &raquo; <?=$res[0]['galerija']; ?> </h3>

<form action="controllers/galerii_slika_add.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?=$res[0]['id']; ?>">
	<input type="file" multiple name="sliki[]">
	<button type="submit">Додади Слики</button>
</form>

<table class="table-fill">
	<thead>
		<tr>
			<th class="text-left">Слика</th>
			<th class="text-left">Име</th>
			<th class="text-left"><span><i class="fa fa-trash-o" aria-hidden="true"></i></span></th>
		</tr>
	</thead>
	<tbody class="table-hover">

	<?php foreach($res as $row){ ?>

	<tr>
		<td><img src="../uploads/<?=$row['slika_ime'] ?>"</td>
		<td><?=$row['slika_ime']?></td>
		<td>
			<a href="controllers/galerii_slika_delete.php?id=<?=$row['slika_id']?> &img=<?=$row['slika_ime']?> &gid=<?=$res[0]['id']; ?>">
				Избриши
			</a>
		</td>
		<?php } ?>
	</tr>
		</tbody>
</table>
<hr>
</div>

