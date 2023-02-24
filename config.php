<?php 

  $host = 'localhost'; 
  $userName ='root'; 
  $userPassword =''; 
  $db_name ='CRUD_PROJECT'; 

  $dsn = "mysql:host=$host;dbname=$db_name"; 
  $connection = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );

?>