
<div class="container">

<h3>Занимливости</h3>

	<a href="?page=zanimlivosti_add" class="link">Додади нов блог пост</a>
	<a href="?page=zanimlivosti_add" class="link">Додади новa категорија</a>

<table class="table-fill">
	<thead>
		<tr>
			<th class="text-left">ИД</th>
			<th class="text-left">Наслов</th>
			<th class="text-left">Опис</th>
			<th class="text-left">Kaтегорија</th>
			<th class="text-left">Датум</th>
			<th class="text-left">Објавено од</th>
			<th class="text-left"><span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></th>
			<th class="text-left"><span><i class="fa fa-trash-o" aria-hidden="true"></i></span></th>
		</tr>
	</thead>
	<tbody class="table-hover">

	<?php foreach($res as $row){ ?>

	<tr>
		<td><?=$row['id']?></td>
		<td><?=$row['naslov']?></td>
		<td><?=$row['opis']?></td>
		<td><?=$row['kategorija']?></td>
		<td><?=$row['datum']?></td>
		<td><?=$row['ime']?> <?=$row['prezime']?></td>
		<td>
			<a href="?page=zanimlivosti_edit&id=<?=$row['id']?>">
			 Промени </a>
		</td>
		<td>
			<a href="controllers/zanimlivosti_delete.php?id=<?=$row['id']?>">
				Избриши
			</a>
		</td>
		<?php } ?>
	</tr>
		</tbody>
</table>
<hr>
</div>