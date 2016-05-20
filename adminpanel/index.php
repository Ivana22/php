<html>
	<head>
		<title>Пет Плус Маркет - Најава</title>
		<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles/global.css">
	<script type="text/javascript" src="js/js.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
	</head>
	<body>
		<form action="login.php" method="post" class="login">
			 <div class="thumbnail"><img src="images/petplus1.png"/></div>
			<h3>Најавете Се</h3>
			<label>
				Корисничко име:
				<br/>
				
				<input type="email" name="username" placeholder="email@server.com" required autofocus/>
				<i class="fa fa-user"></i>
			</label>
			<br/>
			<label>
				Лозинка:
				<br/>
				
				<input type="password" name="password" placeholder="password" required />
				<i class="fa fa-key"></i>
			</label>
			<br/>
			<a href="#">Ја заборавивте лозинката?</a>
			
			<br/>
			<button type="submit">
			<i class="spinner"></i>
			<span class="state">Најавете се</span>
			</button>
		</form>
	</body>
</html>