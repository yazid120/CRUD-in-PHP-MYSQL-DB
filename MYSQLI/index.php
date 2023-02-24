
<head>
    <meta charset="utf-08" http-equiv="content-type"/>
    <meta http-equiv="X-UA-compatible" content="IE-edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    <h1> page </h1>
<?PHP 
 ob_start(); 
?>
<form>

foreach($_SERVER as $key => $c){ 
    echo $key.' => '. $c.'</br>';
}
// $request = $_SERVER['URI_REQUEST'];
if(isset($request)){

}

</form>
<?php
ob_end_clean(); 
?>
</body>