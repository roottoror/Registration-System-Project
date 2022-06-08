<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Kayıt Sistemi</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Oturum Aç</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Kullanıcı Adı</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Şifre</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
Henüz üye değil misiniz? <a href="register.php">Kaydol</a>
  	</p>
  </form>
</body>
</html>