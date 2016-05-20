<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<link rel="stylesheet" type="text/css" href="styles/global.css">
<script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
</head>
<body>
<div class="top">
	<span><i class="fa fa-user" aria-hidden="true"></i><?php echo $_SESSION['user']['ime'];?> <span><i class="fa fa-sign-out" aria-hidden="true"></i> <a href="logout.php">Одјави Се</a></span></span>
	<div class="clear"></div>
</div>
<div class="navigation">
<img src="images/petplus1.png">
<h3>Добредојде, <span><?php echo $_SESSION['user']['ime'];?></span></h3>

<ul class="menu">
	<li>
		<a href="?page=dashboard">Почетна</a>
	</li>
	<?php 
	if(isset($_SESSION['user'])){
		if($_SESSION['user']['tip'] == 'administrator'){
	
		?>
		<li>
			<a href="?page=korisnici">Корисници</a>
		</li>
	<?php
		}
	}
	?>

	<li>
		<a href="?page=zanimlivosti">Занимливости</a>
			<ul>
				<li><a href="#">Внеси нов пост</a></li>
				<li><a href="#">Внеси нова категорија</a></li>
			</ul>
	</li>
	<li>
		<a href="?page=novosti">Новости</a>
			<ul>
				<li><a href="#">Додади нов новост</a></li>
			</ul>
	</li>
	<li>
		<a href="?page=galerii">Галерии</a>
	</li>
	<li>
		<a href="?page=proizvodi">Производи</a>
			<ul>
				<li><a href="#">Додади нов производ</a></li>
				<li><a href="#">Додади нова категорија</a></li>
				<li><a href="#">Додади ново животно</a></li>
				<li><a href="#">Додади нов тип на производ</a></li>
			</ul>
	</li>
	<li>
		<a href="logout.php">Одјави Се</a>
	</li>

</ul>
		<script>
		$(document).ready(
var list_items = document.querySelectorAll('.menu > li');

			for(var i = 0; i < list_items.length; i++){
				list_items[i].addEventListener('click', function(){
					if (this.querySelector('ul').style.display == 'block'){
						this.querySelector('ul').style.display = 'none';
					} else {
						this.querySelector('ul').style.display = 'block';
					}
				});
			}

			var li = document.querySelectorAll('li li');

			for(var a = 0; a < li.length; a++){
				li[a].addEventListener('click', function(e){
					e.stopPropagation();
				});
			}
 });
		</script>

</div>
</body>
</html>
