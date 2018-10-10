<!doctype html>
<html>
<head>
  	<title> Главная страница </title>
	<meta charset = "UTF-8">
	<link rel = "stylesheet"  href = "./css/style.css">
</head>
<body>
	<div class ="container">
  
	<div class ="header">

		

  <ul class="menu">
<li> <a href = "index.html">Распродажа </a> 
		<ul class="submenu">
		<li><a href=#> О нас </a></li>
        <li><a href=#> Новости</a></li>
    </ul> </li>	
		
<li> <a href = "katalog.html"> Одежда</a> 
		<ul class="submenu">
		<li><a href=#> Одежда </a></li>
        <li><a href=#> Обувь </a></li>
        <li><a href=#> Аксессуары </a></li>
        </ul>	</li>
        <li> <a href = "katalog.html"> Обувь</a> 
        	<li> <a href = "katalog.html"> Аксессуары</a>
        	<li> <a href = "katalog.html"> Лицо и тело</a> 
        	<li> <a href = "katalog.html"> Бренды</a>
        	<li> <a href = "katalog.html"> Аутлет</a>   
<li> <a href = "kontakti.html"> Контакты </a> </li>
</ul>
	
	
	 
	 <div id= "logo"> <img src="./img/logotip.png" alt="logo"> </div> 

</div>
  
  <div class="content">
	
    
      <h1> Галерея </h1>
 

      <h3> Привет! Если ты ищещь стильную одежду, которая подчеркнет твою индивидуальность, то ты в нужном месте.У нас представлены коллекции более 500 модных брендов.Все для тебя!</h3>

<?php
 

      mysql_connect ( 'localhost', 'root', '' ); 
      mysql_query( 'utf8_general ci' ); 
      mysql_select_db ( 'изображения' ); 
            $query = "SELECT Id FROM Images"; 
            $res = mysql_query( $query ); 
            while( $img = mysql_fetch_array( $res ) ) { 
              echo '<img src="images.php?Id='.$img['Id'].'" />'; 
            } 
 
?>
     
      <form action="URL">

      	<input type="search">
      	<input type = "submit" value="Поиск">

      </form>	
     </div>
     
        <div class ="footer"> <div id="prava"> &copy; Все права защищены </div> </div>
</div>
</body>
</html>