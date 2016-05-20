<?php
include '/../usercheck.php';
include '/../db.php';
echo 'test';

if(isset($_POST['submit'])){

// kreiraj galerija
	//sliki

$target_dir = "../../uploads/";
$target_file = $target_dir . basename($_FILES["slika"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["slika"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["slika"]["size"] > 1000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["slika"]["tmp_name"], $target_file)) {
       // echo "The file ". basename( $_FILES["slika"]["name"]). " has been uploaded.";

        $sql='insert into novosti (naslov, opis, tekst, slika, datum, korisnik_id) values (:naslov, :opis, :tekst, :slika, NOW(), :korisnik_id)';
        echo $_POST['naslov'];
	$query=$db->prepare($sql);
	$query->bindValue(':naslov', $_POST['naslov']);
	$query->bindValue(':opis', $_POST['opis']);
	$query->bindValue(':tekst', $_POST['tekst']);
	$query->bindValue(':slika', $_FILES["slika"]["name"]);
	$query->bindValue(':korisnik_id', $_SESSION['user']['id']);
	$query->execute();



    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}}
?>