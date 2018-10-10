<?php 
    // Соединяемся с сервером БД 
    mysql_connect ( 'localhost', 'root', '' ); 
  
    mysql_select_db ( 'изображения' ); 

   if ( isset( $_GET['Id'] ) ) { 
  // Здесь $id номер изображения 
  $id = (int)$_GET['Id']; 
  if ( $id > 0 ) { 
    $query = "SELECT `content` FROM `Images` WHERE `Id`=".$id; 
    // Выполняем запрос и получаем файл 
    $res = mysql_query($query); 
    if ( mysql_num_rows( $res ) == 1 ) { 
      $image = mysql_fetch_array($res); 
      // Отсылаем браузеру заголовок, сообщающий о том, что сейчас будет передаваться файл изображения
      header("Content-type: image/jpeg"); 
      // И  передаем сам файл 
      echo $image['content']; 
    } 
  } 
} 
?>