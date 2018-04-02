<?php 
	include "include/connection.php";

	function clean($value = "") {
	    $value = trim($value);
	    $value = stripslashes($value);
	    $value = strip_tags($value);
	    $value = htmlspecialchars($value);
	    
	    return $value;
	}

	if(isset($_POST["input"]))
	{
		$email = $_POST["email"];

		$email = clean($email);
		$i=0;
		if(empty($email))
		{
			$i=1;
		}
		$j=0;
		if(empty($_POST["password"]))
		{
			$j=1;
		}
		if($i == 0 && $j == 0)
		{
			$k=0;
			$password = md5($_POST["password"]);
			$query = mysqli_query($connection,"SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password';");
			if(mysqli_num_rows($query) == 1)
			{	
				$result_query = mysqli_fetch_assoc($query);
				$_SESSION['logged_user'] = $result_query;
				header("Location:myprofile.php");
			}
			else $k=1;
		}
	}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Вход</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">
</head>
<body>
	<div class="wrapper">
		<div class="reg_wrap">
			<div class="reg_logo">
				<img src="assets/img/logo_input.png">
			</div>
			<div class="reg_form">
				<form class="popup_form" method="post">
       	   					<div class="reg_field">
	       	   					<label><strong>Email</strong></label><br>
	       	   					<input type="email" name="email" value="<?php echo $_POST['email']; ?>"><br>
	       	   					<div class="reg_error"><?php if($i==1) echo "Введите email!"; ?></div>
       	   					</div>
       	   					<div class="reg_field">
	       	   					<label><strong>Пароль</strong></label><br>
	       	   					<input type="password" name="password"><br>
	       	   					<div class="reg_error"><?php if($j==1) echo "Введите пароль!"; ?></div>
       	   					</div>
       	   					<input id="button" type="submit" name="input" value="Войти"><br>
       	   					<div class="reg_error"><?php if($k==1) echo "<br><hr><br>Такого пользователя не существует!"; ?></div>
       	   		</form>
			</div>
		</div>
	</div>
</body>
</html>