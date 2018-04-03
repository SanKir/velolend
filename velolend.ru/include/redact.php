<?php 
                                if(isset($_POST['redactr'])) 
                              {
                                if($_POST['id_product'] == $cat['id'])
                                {
                                  
                                  ?> 
                                  <form action="" method="post">
                                    <input type="hidden" name="id_product2" value="<?php echo $cat[id]; ?>">
                                    <input type="text" name="set_photo" value="<?php echo $cat[photo]; ?>"><br>
                                    <input type="text" name="set_name" value="<?php echo $cat[name]; ?>"><br>
                                    <input type="text" name="set_discription" value="<?php echo $cat[discription]; ?>"><br>
                                    <input type="text" name="set_price" value="<?php echo $cat[price]; ?>"><br>
                                    <input type="submit" name="set_redact" value="Принять">
                                  </form>
                          <?php }
                                else echo $cat["name"]."<br>".$cat[discription]."</a></p><br><p class=\"price\">".$cat[price]." р.</p>";
                              }
                               else echo $cat["name"]."<br>".$cat[discription]."</a></p><br><p class=\"price\">".$cat[price]." р.</p>" ?>