<meta charset="UTF-8"/>
<style>
    <?php include 'css/main.css'; ?>
</style>
<?php
/**
 * Created by PhpStorm.
 * User: Kristina Shalkoska
 * Date: 4/27/2016
 * Time: 6:19 PM
 */
$dsn='mysql:dbname=shkolo;host=127.0.0.1';
$username='root';
$password='';
$db=new PDO($dsn,$username,$password);
//print_r($db);
$query=$db->query('select * from korisnici');
$res=$query->fetchAll(PDO::FETCH_ASSOC);
// print_r($res);
?>

<h1>Корисници во системот</h1>
<table>
    <tr>
        <td>ID</td>
        <td>Име</td>
        <td>Е-маил</td>
        <td>Пасворд</td>
        <td>ID_TIP_KORISNICI</td>
        <td>Едитирај</td>
        <td>Избриши</td>
    </tr>
    <?php foreach($res as $row) {?>

    <tr>
        <td><?=$row['id']?></td>
        <td><?=$row['ime']?></td>
        <td><?=$row['email']?></td>
        <td><?=$row['password']?></td>
        <td><?=$row['id_tip_korisnici']?></td>
        <td>
            <a href="edit.php?id=<?=$row['id']?>">
                Edit
            </a>
        </td>
        <!-- edit.php?id=3 -->
        <td>
            <a href="delete.php?id=<?=$row['id']?>">
                Delete
            </a>
        </td>
    </tr>
    <?php } ?>
</table>

<h3>Додади Корисник <a href="add.php"> тука</a></h3>
