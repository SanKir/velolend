<?php 
  include "../include/connection.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Аксессуары: багажники</title>
      <meta name="description" content="Продажа велосипедов" />
      <meta name="keywords" content="аксессуары, багажники, продажа" />
      <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
      <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">
</head>
<body>
      <div class="main">


<?php 
  include "../include/header.php";
?>


       <div class="site_content">
        <h2 class="name_page">Багажники для велосипеда</h2>
            <div class="text_description"><p>Багажники для велосипеда - приспособление, значительно облегчающее перевозку груза на вашем байке. Сейчас, когда существует множество их разновидностей, выбор этого удобного аксессуара не представляет труда. Неразборный велобагажник способен выдерживать нагрузку до 25 кг, а также гарантировать возможность удерживания на нем велорюкзака.</p>
            </div>
            <div class="katalog">
                  <table class="table_katalog">
                        <?php 
                        if(isset($_POST['delete']))
                              {
                                $delete = mysqli_query($connection,"DELETE FROM `products` WHERE `id` = '$_POST[id_product]';");
                              }
                        if(isset($_POST['set_redact']))
                                  {
                                    $redact = mysqli_query($connection,"UPDATE `products` SET `name` = '$_POST[set_name]',
                                      `price`='$_POST[set_price]',`photo`= '$_POST[set_photo]',`discription`='$_POST[set_discription]' 
                                      WHERE `id` = '$_POST[id_product2]';");
                                  }
                            $i=2;
                            $result = mysqli_query($connection,"SELECT * FROM `products` WHERE `podcategories` = '7';");
                            while ($cat = mysqli_fetch_assoc($result)) {
                              $i++;
                              if($i % 3 == 0)
                              { ?>
                                <tr>
                                </tr>
                              <?php } ?>
                              <td><p><?php 
                                      if(isset($_SESSION['logged_user']))
                                        { 
                                          $admin_email = 'admin@mail.ru';
                                          $admin_password = md5('admin');
                                          if($_SESSION['logged_user']['email'] == $admin_email && $_SESSION['logged_user']['password'] == $admin_password)
                                          {?>
                                            <form class="delete_form" action="" method="post">
                                              <input type="hidden" name="id_product" value="<?php echo $cat[id]; ?>">
                                              <input type="submit" name="delete" value="&#10006;">
                                              <input type="submit" name="redactr" value="&#9998;">
                                            </form>
                                    <?php }
                                        }
                               ?></p><a href="#"><img src="../assets/img/accessories/<?php echo $cat[photo]; ?>"></a><br><p><a href="#" class="tovar_name"><?php 
                                include "../include/redact.php"; ?> 
                              </td>
                            <?php } ?>                    
                  </table>
            </div>
       </div>

<?php 
  include "../include/footer.php";
?>
  </div>

</body>
</html>