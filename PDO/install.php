<?php 

   require_once './config.php'; 

try{
    $connection = new PDO("host:mysql=$host",$userName,$userPassword,$option);
    $sql = file_get_contents('/Data/DataBase.sql'); 
    $connection ->exec($sql); 

    $result = ['message' => 'successful connection: Database and 
    table users created successfully.']; 
    echo $result['message']; 
}catch(PDOException $e){
   echo $sql . '' . '</br>'. $e -> getMessage(); 
}
    

?>