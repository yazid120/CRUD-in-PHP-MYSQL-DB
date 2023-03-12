<?php
if(isset( $_POST['creat'])){

$new_user =  array(
'name' => $_POST['name'],
'email' => $_POST['email'],
'phone_num' => $_POST['phone_num'],
'age' => $_POST['age'],
'location' => $_POST['location'],
'sexe' => $_POST['sexe'],
); 

print_r($new_user); 
}
?>