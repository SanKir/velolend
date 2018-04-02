<?php 
	include "include/connection.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Личный кабинет</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">
</head>
<body>
	<div class="main">

<?php 
	include "include/header.php";
?>


<div class="site_content">
	       	<div class="main_content">
	       		<h1>Личный кабинет</h1><hr><br>
	       			<?php if(isset($_SESSION['logged_user']))
	       				{ 
	       					$admin_email = 'admin@mail.ru';
	       					$admin_password = md5('admin');
	       					if($_SESSION['logged_user']['email'] != $admin_email && $_SESSION['logged_user']['password'] != $admin_password)
	       					{ ?>
		       					<div class="my_info">
		       					<h3>Ваши личные данные: </h3><br>
		       					<p>Логин: <?php echo $_SESSION['logged_user']['login'];?></p>
		       					<p>Email: <?php echo $_SESSION['logged_user']['email'];?></p>
	       					</div>
	       			<?php   }
	       					else if($_SESSION['logged_user']['email'] == $admin_email && $_SESSION['logged_user']['password'] == $admin_password)
	       					{ ?>
	       						<div class="admin_content">
	       							<h2>Вы вошли как администратор данного сайта!</h2>
	       							<p>**Если вы вошли как администратор, то вам открыт доступ к таким функциям, как добавление товаров на сайт, удаление товаров с сайта, а также редактирование товаров на сайте. Вы можете воспользоваться данными функциями прямо сейчас!</p>
	       							<?php 
	       								function clean($value = "") {
										    $value = trim($value);
										    $value = stripslashes($value);
										    $value = strip_tags($value);
										    $value = htmlspecialchars($value);
										    
										    return $value;
										}

										if(isset($_POST["done"]))
										{
											$nameproduct = $_POST["name_product"];
											$podcategories = $_POST["podcategories"];
											$priceproduct = $_POST["price_product"];
											$photoproduct = $_POST["photo_product"];
											$discriptionproduct = $_POST["discription_product"];

											$nameproduct = clean($nameproduct);
											$priceproduct = clean($priceproduct);
											$photoproduct = clean($photoproduct);
											$discriptionproduct = clean($discriptionproduct);

											$i=0;
											if(empty($nameproduct))
											{
												$i=1;
											}
											$j=0;
											if($podcategories == "")
											{
												$j=1;
											}
											$k=0;
											if(empty($priceproduct))
											{
												$k=1;
											}
											$l=0;
											if(empty($photoproduct))
											{
												$l=1;
											}
											$success_done = 0;
											if($i == 0 && $j == 0 && $k == 0 && $l == 0)
											{
												$success_done = 1;
												$query = mysqli_query($connection,"INSERT INTO `products`(`id`, `name`, `podcategories`, `price`, `photo`, `discription`) VALUES (NULL, '$nameproduct', '$podcategories', '$priceproduct', '$photoproduct', '$discriptionproduct');");
												$nameproduct = "";
											}
										}
	       							?>
	       							<div class="add_product">
	       								<h2>Добавление товара</h2>
		       							<form action="" method="post" class="set_products">
		       								<div class="products_set_wrapper">
			       								<div class="b1_field clearfix">
				       								<div class="field">
				       									<input type="text" name="name_product" placeholder="Введите название продукта*" value="<?php echo $_POST["name_product"]; ?>">
				       									<div class="reg_error"><?php if($i == 1) echo "Введите имя товара!"; ?></div>
				       								</div>
				       								<div class="field_select">
					       								<select name="podcategories">
					       									<option value="" style="display:none">Выберите нужную подкатегорию*</option>
					       									<?php 
					       										$query = mysqli_query($connection,"SELECT * FROM `categories`;");
					       										while ($result = mysqli_fetch_assoc($query)) { ?>
					       											<optgroup label="<?php echo $result[name]; ?>">
					       											<?php
					       												$query2 = mysqli_query($connection,"SELECT * FROM `podcategories` WHERE `categories` = '$result[id]';");
					       												while ($result2 = mysqli_fetch_assoc($query2)) { ?>
					       													<option value="<?php echo $result2[id]; ?>"><?php echo $result2['name']; ?></option>
					       												<?php }
					       											}
					       											?>
					       								</select>
					       								<div class="reg_error"><?php if($j == 1) echo "Выберите подкатегорию товара!"; ?></div>
					       							</div>
				       							</div>
				       							<div class="b1_field clearfix">
				       								<div class="field">
				       									<input type="text" name="price_product" placeholder="Введите цену продукта*" value="<?php echo $_POST["price_product"]; ?>">
				       									<div class="reg_error"><?php if($k == 1) echo "Введите цену товара!"; ?></div>
				       								</div>
				       								<div class="field">
				       									<input type="text" name="photo_product" placeholder="Введите название фото продукта*" value="<?php echo $_POST["photo_product"]; ?>">
				       									<div class="reg_error"><?php if($l == 1) echo "Введите название фото товара!"; ?></div>
				       								</div>
				       							</div>
				       							<div class="discription">
			       									<textarea name="discription_product" rows = "9" cols = "55" placeholder="Введите описание продукта"><?php echo $_POST["discription_product"]; ?></textarea>
			       								</div>
			       								<input id="done" type="submit" name="done" value="Добавить">
			       								<div class="success_done"><?php if($success_done == 1) echo "Товар успешно добавлен на сайт!"; ?></div>
			       							</div>
		       							</form>
		       						</div>
	       						</div>
	       					<?php }
	       		   		}
	       		?>
	       	</div>
       </div>


<?php 
	include "include/footer.php";
?>

</div>

</body>
</html>