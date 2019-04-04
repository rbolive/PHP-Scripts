<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en" >

<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div class="login-page">
  <div class="form">
    <form class="login-form" method="post" action="login.php">
		<img src="https://media.featuredcustomers.com/Company.logo/grafisch2x.png" width="150px" height="150px">
		<h1></h1>
      <?php include('error.php'); ?>
      <input type="text" name="username" placeholder="Gebruikersnaam"/>
      <input type="password" name="password" placeholder="Wachtwoord"/>
      <button type="submit" class="btn" name="login_user">Login</button>
      <p class="message">Nog geen account?&nbsp; <a href="register.php">Maak hier een account aan!</a></p>
	  <p class="message">Wachtwoord vergeten?&nbsp; <a href="vergeten.php">Klik hier!</a></p>
    </form>
	  
  </div>
</div>
	
</body>
</html>
