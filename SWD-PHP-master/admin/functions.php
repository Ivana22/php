<?php 

function dbo(){
	return new PDO('mysql:dbname=petplus;host=127.0.0.1', 'root', '');
}

function loginCheck(){
	if(!isset($_SESSION['user_id'])){
		header('location: index.html');
		exit();
	}
}

?>