<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Exercício 16</title>
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
        <li><a href="../exercicio9/exercicio9.php">Exercicio 9</a></li>
        <li><a href="../exercicio10/exercicio10.php">Exercicio 10</a></li>
        <li><a href="../exercicio11/exercicio11.php">Exercicio 11</a></li>
        <li><a href="../exercicio12/exercicio12.php">Exercicio 12</a></li>
        <li><a href="../exercicio13/exercicio13.php">Exercicio 13</a></li>
        <li><a href="../exercicio14/exercicio14.php">Exercicio 14</a></li>
        <li><a href="../exercicio15/exercicio15.php">Exercicio 15</a></li>
        <li><a href="../exercicio16/exercicio16.php">Exercicio 16</a></li>
        <p><b><h1>Exercicio 16:</h1> <br>  
    </ul>
    </nav>
    <?php 
    $ano = @$_POST['ano'];
   

      if (($ano % 100 != 0 && $ano % 4 == 0) || ($ano % 400 == 0)) {   
        echo ("<br><br><center><table bgcolor=silver><tr><td><strong> $ano = ano Bissexto </strong></td></tr></table></center>");
      }
      else {
        echo ("<br><br><center><table bgcolor=silver><tr><td><strong> $ano = não é ano Bissexto </strong></td></tr></table></center>");
      }
        
     ?>
    

</body>
</html>