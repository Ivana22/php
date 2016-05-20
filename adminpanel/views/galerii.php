<div class="container">

<h3>Галерии</h3>

<form action="controllers/galerii_add.php" method="post" enctype="multipart/form-data">

	<input type="text" name="ime" placeholder="Име на галерија" required>
	<input type="file" multiple name="sliki[]">
	<button type="submit">Зачувај</button>
</form>

<table class="table-fill">
	<thead>
		<tr>
			<th class="text-left">ИД</th>
			<th class="text-left">Име</th>
			<th class="text-left"><span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></th>
			<th class="text-left"><span><i class="fa fa-trash-o" aria-hidden="true"></i></span></th>
		</tr>
	</thead>
	<tbody class="table-hover">

	<?php foreach($res as $row){ ?>

	<tr>
		<td><?=$row['id']?></td>
		<td><?=$row['ime']?></td>
		<td>
			<a href="?page=galerii_edit&id=<?=$row['id']?>">
			 Промени </a>
		</td>
		<td>
			<a href="controllers/galerii_delete.php?id=<?=$row['id']?>">
				Избриши
			</a>
		</td>
		<?php } ?>
	</tr>
		</tbody>
</table>
<hr>
</div>