<?PHP
// require __DIR__ .'../methods/create.php';



?>
<script type="text/javascript">
  let creatUser_Object =[
    {name:'user Name'}, 
    {email:'user email'},
    {phone_num:'phone numbre'}, 
    {age:'age'}, 
    {gender:'gender',
        sexe:{
            homme:'homme',
            femme:'femme'
       }
    },
    {submition:'create user'}

  ]
</script>
<body>
<form action="../methods/create.php" method="post">

<label for="">
<script> 
  document.write(creatUser_Object[0].name);
</script>
</label></br>
<input type="text" name="name" /></br>

<label for="">
<script>
  document.write(creatUser_Object[1].email);
</script>
</label></br>
<input type="text" name="email" /></br>

<label for="">
<script>
    document.write(creatUser_Object[2].phone_num);
</script>
</label></br>
<input type="tel" name="phone_num" /></br>

<label for="">
<script>
    document.write(creatUser_Object[3].age);
</script>
</label></br>
<input type="numbre" name="age" value=""/></br>

<label><script>document.write(creatUser_Object[4].gender)</script></label></br>
<!-- homme radio btn -->
<label for="">
<script>document.write(creatUser_Object[4].sexe.homme);</script>
</label>
<input type="radio" name="sexe" value="homme"/>
<!-- femme radio btn -->
<label for="">
    <script>
document.write(creatUser_Object[4].sexe.femme);
</script>
</label>
<input type="radio" name="sexe" value="femme"/></br>

<button type="submit" name="creat">
  <script>document.write(creatUser_Object[5].submition)</script>
</button>
</form>

</body>