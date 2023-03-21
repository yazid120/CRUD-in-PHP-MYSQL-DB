<?php 
require_once __DIR__.'/standard.php';
require_once __DIR__. '/Router.php';
$REQUEST_METHOD = METHOD_REQUEST;

// switch($REQUEST_METHOD){ 
//     case'/': 
//         include_once('./index.php'); 
//     case'/PDO':
//         include_once('./PDO/index.php'); 
//     case'/MYSQLI':
//         require_once('./MYSQLI/index.php'); 
// }
$Routes = [];

route('/',function(){
  echo 'Home page';
});
route('/PDO',function(){
    echo 'PDO requests page';
});
route('/MYSQLI',function(){
    echo 'MYSQLI requests page';
}); 

function route(string $path, callable $callback){
    global $routes;
    $routes[$path] = $callback; 
}
run(); 
function run(){
    $uri = REQUEST_URI;
    global $routes; 
    foreach($routes as $path => $callback){
      if($routes!== $uri) continue; 
      $callback();
    }
}
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
        <script>
            document.write(`<button href="/PDO">${Main_Object[1].PDO}</button>`); 
        </script>
    </div>
    <div class="integrated_link_extension"> 
        <script>
            document.write(`<button href="/MYSQLI">${Main_Object[2].MYSQLI}</button>`)
        </script>
    </div>
</div>
<script src="./scripts/index.js" defer></script>
<?php 
//file_exists('file.txt')
$result = file_exists('file.txt') ? true : false;
if(file_exists('file.txt')){
    echo 'fichier existent'; 
}else{
   echo 'fichier non exitent';
}
$somme = 0;
for($i=1; $i<=10; $i++){
    $somme = $somme + pow($i,3);
}
file_put_contents('file.txt',$somme); 
echo file_get_contents('file.txt');
?>
</body>