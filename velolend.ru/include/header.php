<?php session_start() ?>
<div class="header">
       	   <div class="top_menubar">
       	   	<div class="input_field">
       	   		<?php if(isset($_SESSION['logged_user']))
       	   		{ ?>
       	   			<a href="/myprofile.php">Личный кабинет</a>
       	   			<a href="/exit.php">Выход</a>
       	   		<?php } else { ?>
				<a href="/input.php">Вход</a>
       	   		<a href="/registration.php">Регистрация</a>
       	   		<?php } ?>
       	   	</div>
       		   <ul class="top_menu">
 		     		<li class="menu_usluga"><a href="">Услуги</a>
 		     		  <ul class="menudrop_usluga">
 	      				<li><a href="/dostavka.php">Доставка</a></li>
 	      				<li><a href="/remont.php">Ремонт</a></li>
 	      			  </ul>
 	      			</li>
 		     		<li><a href="/omagazine.php">О магазине</a></li>
 		     		<li><a href="/kontakti.php">Контакты</a></li>
 		     	</ul>
       	    </div>
 	      <div class="logo">
 	      	<img src="../assets/img/velik1.png">
 	      	<a href="/"><img src="../assets/img/velolend.png"></a>
 		     <div class="logo_text">
 		     	<h2>Огромный выбор <span>велосипедов</span><br>Выгодно и со вкусом!</h2>
 		     </div>
 	      </div>

 	    <div class="menubar">
 	      	<ul class="bottom_menu">
 	      		<li class="menu_list"><a href="">Велосипеды</a>
 	      			<ul class="menu_drop">
 	      				<li><a href="/bikes/extrimvelosiped.php">Экстремальные</a></li>
 	      				<li><a href="/bikes/detskivelosiped.php">Детские</a></li>
 	      				<li><a href="/bikes/gornivelosiped.php">Горные</a></li>
 	      				<li><a href="/bikes/podrostvelosiped.php">Подростковые</a></li>
 	      				<li><a href="/bikes/skladnivelosiped.php">Складные</a></li>
 	      			</ul>
 	      		</li>
 	      		<li class="menu_list"><a href="">Аксессуары</a>
 	      			<ul class="menu_drop">
 	      				<li><a href="/accessories/krilya.php">Крылья</a></li>
 	      				<li><a href="/accessories/bagaj.php">Багажники</a></li>
 	      				<li><a href="/accessories/zerkala.php">Зеркала</a></li>
 	      			</ul>
 	      		</li>
 	      		<li class="menu_list"><a href="">Запчасти</a>
 	      			<ul class="menu_drop">
 	      				<li><a href="/repair/amortizator.php">Амортизаторы</a></li>
 	      				<li><a href="/repair/koleca.php">Колеса</a></li>
 	      				<li><a href="/repair/kameri.php">Камеры</a></li>
 	      				<li><a href="/repair/rami.php">Рамы</a></li>
 	      				<li><a href="/repair/tormoza.php">Тормоза</a></li>
 	      				<li><a href="/repair/pedali.php">Педали</a></li>
 	      				<li><a href="/repair/cepi.php">Цепи</a></li>
 	      			</ul>
 	      		</li>
 	      		<li class="menu_list"><a href="">Экипировка</a>
 	      			<ul class="menu_drop">
 	      				<li><a href="/equipment/odejda.php">Одежда</a></li>
 	      				<li><a href="/equipment/zashita.php">Защита</a></li>
 	      				<li><a href="/equipment/shlemi.php">Шлемы</a></li>
 	      			</ul>
 	      		</li>
 	      	</ul>
 	    </div>
    </div>