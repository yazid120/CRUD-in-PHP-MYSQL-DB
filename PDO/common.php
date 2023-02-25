<?PHP
 $session_status = session_status(); 
 if($session_status == 1)
   session_start(); 

   if(isset($_SESSION)){
    if($_SESSION['csrf']){
        
    }

   }


?>