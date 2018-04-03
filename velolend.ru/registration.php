<?php 
	include "include/connection.php";

	function clean($value = "") {
	    $value = trim($value);
	    $value = stripslashes($value);
	    $value = strip_tags($value);
	    $value = htmlspecialchars($value);
	    
	    return $value;
	}

	function check_length($value = "", $min, $max) {
	    $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
	    return !$result;
	}

	if(isset($_POST["reg"]))
	{
		$login = $_POST["login"];
		$email = $_POST["email"];
		$login = clean($login);
		$email = clean($email); 
		$i=0;
		$query1 = mysqli_query($connection,"SELECT * FROM `users` WHERE `login`='$login';");
		if(empty($login))
		{	
			$i=1;
		}
		if(!empty($login) && !check_length($login,2,20))
		{
			$i=2;
		}
		if(mysqli_num_rows($query1) == 1)
		{
			$i=3;
		}
		$j=0;
		$query2 = mysqli_query($connection,"SELECT * FROM `users` WHERE `email`='$email';");
		if(empty($email))
		{	
			$j=1;
		}
		if(!empty($email) && !check_length($email,2,40))
		{
			$j=2;
		}
		if(mysqli_num_rows($query2) == 1)
		{
			$j=3;
		}
		$k=0;
		if(empty($_POST["password"]))
		{	
			$k=1;
		}
		if(!empty($_POST["password"]) && !check_length($_POST["password"],5,70))
		{
			$k=2;
		}
		if($i == 0 && $j == 0 && $k == 0)
		{
			$password = md5($_POST["password"]);
			$result = mysqli_query($connection,"INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES (NULL, '$login', '$email', '$password');");
			$result2 = mysqli_query($connection,"SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password';");
			$result_query = mysqli_fetch_assoc($result2);
			$_SESSION['logged_user'] = $result_query;
			header("Location:myprofile.php");
		}
	}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Регистрация</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">
</head>
<body>
	<div class="wrapper">
		<div class="reg_wrap">
			<div class="reg_logo">
				<img src="assets/img/logo_reg.png">
			</div>
			<div class="reg_form">
				<form name="registration" action="" method="post">
					<div class="reg_field">
						<label><strong>Логин</strong></label><br>
						<input type="text" name="login" value="<?php echo $_POST['login']; ?>"><br>
						<div class="reg_error"><?php if($i==1) echo "Введите логин!";
						else if($i==2) echo "Логин должен быть не более 20 символов";
						else if($i==3) echo "Данный логин уже занят!"; ?></div>
					</div>
					<div class="reg_field">
						<label><strong>Email</strong></label><br>
						<input type="email" name="email" value="<?php echo $_POST['email']; ?>"><br>
						<div class="reg_error"><?php if($j==1) echo "Введите email!";
						else if($j==2) echo "Email должен быть не более 40 символов";
						else if($j==3) echo "Данный email уже используется!"; ?></div>
					</div>
					<div class="reg_field">
						<label><strong>Пароль</strong></label><br>
						<input type="password" name="password"><br>
						<div class="reg_error"><?php if($k==1) echo "Введите пароль!";
						else if($k==2) echo "Пароль должен быть не менее 5 символов"; ?></div>
					</div>
					<input id="button" type="submit" name="reg" value="Зарегистрироваться">
				</form>
			</div>
		</div>
	</div>
</body>
</html>