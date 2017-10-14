<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Verify Your Account</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<?php 
$host= "localhost";
$user= "root";
$password= "";
$email=$_GET['email'];
$fullname=$_GET['fullname'];
$user=$_GET['user'];
$pass=$_GET['pass'];
?>
<div id="container">
	<div class="Header">
		Verify Your Account
	</div>

	<div class="hasil">

		<div class="fullname">
			Full name : <?php echo "$fullname"; ?><br>
		</div>

		<div class="email">
			Email : <?php echo" $email" ?><br>
		</div>

		<div class="user">
			Username  : <?php echo "$user"; ?><br>
		</div>

		<div class="pass">
			Password : <?php echo "$pass"; ?><br>
		</div>	
	</div>
</div>
</body>
</html>