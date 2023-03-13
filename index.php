<?php 
require_once __DIR__.'/standard.php';
$REQUEST_METHOD = METHOD_REQUEST;

switch($REQUEST_METHOD){ 
    case'/': 
        include_once('./index.php'); 
    case'/PDO':
        include_once('./PDO/index.php'); 
    case'/MYSQLI':
        require_once('./MYSQLI/index.php'); 
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
</body>