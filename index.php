<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Je moet eerst inloggen";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Home Pagina</h2>
</div>
<div class="content">
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <?php  if (isset($_SESSION['username'])) : ?>
    	<link href="css/style.css" rel="stylesheet" type="text/css">
	<div class="login-page">
	<div class="form">
	 <form class="register-form">
		<img src="https://media.featuredcustomers.com/Company.logo/grafisch2x.png" width="150px" height="150px">
		<h2>Gemaakt door: Rob Borsboom - 81297</h2>
    		<p>Welkom <strong><?php echo $_SESSION['username']; ?></strong></p>
    		<p> <a href="index.php?logout='1'" style="color: red;">Uitloggen</a> </p>
	 </form>
	</div>
	</div>
    <?php endif ?>
</div>
		
</body>
</html>
