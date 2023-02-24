<?PHP
 
 $host = 'localhost';
 $user_name = 'root'; 
 $db_name = 'CRUD_PROJECT'; 
 $db_password = "";

 $connection = mysqli_connect($host,$user_name,$db_name,$db_password);

 if($connection){
    $resonse = ['message' => 'success'];
    echo $resonse; 
 }else{
    $resonse = ['message'=> "error"];
    die($resonse); 
 }

?>