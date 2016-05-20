<style>
    <?php include 'css/main.css'; ?>
</style>
<?php
/**
 * Created by PhpStorm.
 * User: Kristina Shalkoska
 * Date: 4/27/2016
 * Time: 7:45 PM
 */
if (isset($_POST['submit'])) {
    $dsn='mysql:dbname=shkolo;host=127.0.0.1';
    $username='root';
    $password='';
    $db=new PDO($dsn,$username,$password);
    $sql='insert into korisnici (ime,email,password,id_tip_korisnici) values (:ime,:email,:password,:id_tip_korisnici)';
    $query=$db->prepare($sql);
    $query->bindValue(':ime',$_POST['ime']);
    $query->bindValue(':email',$_POST['email']);
    $query->bindValue(':password',$_POST['password']);
    $query->bindValue(':id_tip_korisnici',$_POST['id_tip_korisnici']);
    $query->execute();
}
?>

<form action="add.php" method="post">
    Име <br>
    <input type="text" name="ime" required> <br>
    Емаил <br>
    <input type="text" name="email" required> <br>
    Пасворд <br>
    <input type="password" name="password" required><br/>
    Тип на корисник <br>
    <input type="number" name="id_tip_korisnici" required><br><br>

    <button type="submit" name="submit">Додади</button>
</form>