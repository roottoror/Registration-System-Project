<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Kayıt sistemi</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Kayıt</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Kullanıcı Adı</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Şifre</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Şifreyi Onaylayın</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Kayıt</button>
  	</div>
  	<p>
  		Hala üye Değilmisiniz? <a href="login.php">Oturum Aç</a>
  	</p>
  </form>
</body>
</html>