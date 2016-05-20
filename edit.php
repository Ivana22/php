<?php
/**
 * Created by PhpStorm.
 * User: Kristina Shalkoska
 * Date: 4/27/2016
 * Time: 7:15 PM
 */
$dsn = 'mysql:dbname=shkolo;host=127.0.0.1';
$username = 'root';
$password = '';
$db = new PDO($dsn, $username, $password);
if (isset($_GET['id'])) {
    $stmt = $db->prepare('select * from korisnici where id=:id');
    $stmt->bindValue(':id', $_GET['id']);
    $stmt->execute();
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <form action="edit.php" method="post">
        Име <br>
        <input type="text" name="ime" value="<?= $res[0]['ime'] ?>" required> <br>
        Емаил <br>
        <input type="email" name="email" value="<?php echo $res[0]['email']; ?>" required> <br>
        Пасворд <br>
        <input type="password" name="password" value="<?php echo $res[0]['password']; ?>" required><br/>
        Тип на корисник <br>
        <input type="number" name="id_tip_korisnici" value="<?php echo $res[0]['id_tip_korisnici']; ?>"
               required><br><br>
        <input type="hidden" name="id" value="<?= $res[0]['id'] ?>">
        <button type="submit" name="submit">Save</button>
    </form>
    <?php
}
if (isset($_POST['submit'])) {
    $sql = "UPDATE korisnici SET ime=:ime, email=:email, password=:password, id_tip_korisnici=:id_tip_korisnici WHERE id=:id";
    // Prepare statement
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':id', $_POST['id']);
    $stmt->bindValue(':ime', $_POST['ime']);
    $stmt->bindValue(':email', $_POST['email']);
    $stmt->bindValue(':password', $_POST['password']);
    $stmt->bindValue(':id_tip_korisnici', $_POST['id_tip_korisnici']);
    // execute the query
    $stmt->execute();
    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
    header( "refresh:3;url=addEditDelete.php" );
}
?>