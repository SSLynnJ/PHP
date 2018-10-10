<?php
include 'otzyv.php';
?>

<!doctype html>
<html>
<head>
  <title> Контакты </title>
<meta charset = "UTF8">
<link rel = "stylesheet" type = "text/css" href = "./css/style.css">
</head>
<body>
  <div class ="container">
  
  <div class ="header">

  <ul class="main">
<li> <a href = "index.html">Главная </a> </li>
<li> <a href = "katalog.html"> Каталог</a> </li>
<li> <a href = "kontakti.html"> Контакты </a> </li>
</ul>
    <div id= "logo"> <img src="./img/logotip.png"> </div>
   </div>

    <div class="content">
    
      <h3> Напишите нам </h3>
        <form action="URL" >
           
          <input type = "text" size = "40" placeholder = "Имя" required="required"> <br>
         
          <input type = "text" size = "40" placeholder = "Email" autocomplete="on"> 
          <br>
         
          <input type="tel" placeholder="Телефон" required="required"> </br>
         
          <input type="date"> </br>
          <input type = "text" size = "40" placeholder = "Тема" autofocus="autofocus"> <br>
          <input type = "text" style="width: 500px; height: 100px;"  placeholder = "Текст" autocomplete="off">

         <a href="#" class="bott"> Отправить </a>
        </form>

      <h3> <i> Адрес </i> <h3>
        <p> 8818465565 <br>
            Эдж стрит 17, Нью-Касл, Великобритания <br>
            paperdolls@gmail.com </p>
  
  <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A22e9baecb3692571f3cc9b4a59a42c92c279b6b2b406e1faec7229c14022a858&amp;width=500&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>


<form action="" method="post">
<input name="username">
<br><textarea name="msg" rows="10"></textarea>
<br><br>
<input type="submit" name="ok" value="Отправить" >
</form>



</div>

      
        <div class ="footer"> <div id="prava"> &copy; Все права защищены </div> </div>
</body>
</html>