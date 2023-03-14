<?php 
require_once './vendor/autoload.php';
require_once __DIR__.'/standard.php';
require_once __DIR__. '/Router.php';
$REQUEST_METHOD = METHOD_REQUEST;

$router = new AltoRouter(); 

$router -> map('GET','/PDO', function(){
    require './PDO/index.php';
},'PDO'); 
$router -> map('GET','/MYSQLI', function(){
    require './MYSQLI/index.php';
},'MYSQLI');
// echo $router->generate('PDO');
?>
<head>
    <meta charset="utf-08"/>
    <link rel="stylesheet" href="./Style/index.css"/>
</head>
<p>Test CRUD en PHP avec des requets SQL</p>
<body>
<script>
    let Main_Object =[
        {title:"Choisir l'extension a utuliser pour les requests"},
        {PDO:"PDO"}, 
        {MYSQLI:"MYSQLI"}
    ]
</script>
<div class="classic_extensions_wrapp">
    <div class="integrated_link_extension">
    <a href='<?=$router->generate('PDO')?>'>PDO</a>   
    </div>

    <div class="integrated_link_extension"> 
    <a href='<?php echo $router->generate('MYSQLI')?>'>
    MYSQLI
    </a>
    </div>
</div>
<script src="./scripts/index.js" defer></script>
</body>