<?PHP


?>
<head>
    <meta charset="utf-08" http-equiv="content-type"/>
    <meta http-equiv="X-UA-compatible" content="IE-edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" href="../Style/index.css"/>
</head>
<body>
<form>
    <script type="text/javascript" defer>
       let index_ObjectContent = [ 
        {Post:'Create'},
        {Get:'Read'}, 
        {Delete:'Delete'},
        {Update:'Update'}
       ]
    </script>

<div class="method-request_buttonsWrapp">
     <h2>Select one of the Crud methods with MYSQLI to try it.</h2>
  <div class="wrapp_box_section">
    <!-- POST method btn -->
    <button class="requestBtns_sect" id="creat_user"
    onclick="creat_userPage()">
    <a href=''>
        <script>
           document.write(
           '<p><strong>'+index_ObjectContent[0].Post+'</strong>'+' user </p>'
           ); 
        </script>
    </a>
    </button>

    <!-- GET method btn -->
    <button class="requestBtns_sect" id="read_user">
        <script>
           document.write(
           '<p><strong>'+index_ObjectContent[1].Get+'</strong>'+' user </p>'
           ); 
        </script>
    </button>

    <!-- DELETE method btn -->
    <button class="requestBtns_sect" id="delete_user">
        <script>
           document.write(
           '<p><strong>'+index_ObjectContent[2].Delete+'</strong>'+' user </p>'
           ); 
        </script>
    </button>

    <!-- UPDATE method btn -->
    <button class="requestBtns_sect" id="update_user">
        <script>
           document.write(
           '<p><strong>'+index_ObjectContent[3].Update+'</strong>'+' user </p>'
           ); 
        </script>
    </button>

  </div>
</div>


<script defer>
   let creat_userPage = function(){
     window.location.href= 'https://localhost/CRUD-in-PHP-MYSQL-DB/PDO/pages/creat_user.php';
   }
</script>
</form>

</body>