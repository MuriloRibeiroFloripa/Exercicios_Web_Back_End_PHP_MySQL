<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Exercicio 7</title>
   <link rel="stylesheet" href="">
</head>
<body>
   <nav>
   <ul>
        <li><a href="../index.php">Pagina Principal</a></li>
        <li><a href="../exercicio1/exercicio1.php">Exercicio 1</a></li>
        <li><a href="../exercicio2/exercicio2.php">Exercicio 2</a></li>
        <li><a href="../exercicio3/exercicio3.php">Exercicio 3</a></li>
        <li><a href="../exercicio4/exercicio4.php">Exercicio 4</a></li>
        <li><a href="../exercicio5/exercicio5.php">Exercicio 5</a></li>
        <li><a href="../exercicio6/exercicio6.php">Exercicio 6</a></li>
        <li><a href="../exercicio7/exercicio7.php">Exercicio 7</a></li> 
        <li><a href="../exercicio8/exercicio8.php">Exercicio 8</a></li> 
        <h1>Exercício 7 :</h1> 
        </ul>
   </nav>
   <?php
   $metros = $_POST['metros'];
   $pessoas = $_POST['pessoas'];
   $equipamentos = $_POST['equipamentos'];

   $metros2btus = $metros * 600;
   $somaEquipamentos = $equipamentos * 600;

   if($pessoas > 1){
      $adcionalPessoas = ($pessoas * 600) - 600;
      $btus = $metros2btus + $adcionalPessoas + $somaEquipamentos; 
      echo("<br>");
      echo ("<center><br>O ar condicionado terá que ter no minimo <i><strong><mark>$btus BTUs</strong></mark></i> <br>Para refrigerar o este ambiente.<center>");
      echo("<br><br>");   
   }
   else{
      $btus = $metros2btus + $somaEquipamentos; 
      echo("<br>");
      echo ("Exercicio 7: O ar condicionad terá que ter no minimo $btus para refrigerar o ambiente");
      echo("<br><br>");
   }
   ?>
</body>
</html>