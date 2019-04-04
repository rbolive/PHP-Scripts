<?php include('server.php') ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Register</title>
<style type="text/css">
</style>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="login-page">
  <div class="form">
	<form class="register-form" method="post" action="register.php">
		<img src="https://media.featuredcustomers.com/Company.logo/grafisch2x.png" width="150px" height="150px">
		<h1></h1>
		<?php include('error.php'); ?>
      <input type="text" name="username" placeholder="Gebruikersnaam"/>
	  <input type="email" name="email" placeholder="Email"/>
      <input type="password" name="password_1" placeholder="Wachtwoord"/>
	  <input type="password" name="password_2" placeholder="Verificatie Wachtwoord"/>
      <button type="submit" class="btn" name="reg_user">Registreer</button>
      <p class="message">Heb je al een account?&nbsp; <a href="login.php">Login</a></p>
    </form>
	</div>
	</div>
	
</body>
</html>
