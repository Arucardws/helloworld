<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="css/estilo.css" rel="stylesheet">
</head>
<body>
 <div class="red">
 <?php  $telefone =  "999-888"; ?>
    <ul>
    <?php for($i=5; $i > 0; $i--){ ?>
     <li><?php echo $i . $telefone. $i ."<br>"; ?></li>
    <?php } ?>
 </ul>
    <h1>Elias  <?php echo date("d/m/Y"); ?></h1>
    <h2>Elias</h2>
    <h3>Elias</h3>
    <h4 class="red bg-blue">Elias</h4>
    <img src="img/Naruto.jpg" alt="">
    <p class="red">Elias</p>
    <p class="bg-blue">Menudo</p>
    <span class="red">Elias</span>
    <span class="red bg-blue"> Menudo</span>

</div>
</body>
</html>