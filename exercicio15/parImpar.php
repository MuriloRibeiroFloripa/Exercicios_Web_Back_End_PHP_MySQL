<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Exercício 15</title>
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
        <p><b><h1>Exercicio 15:</h1> <br>  
    </ul>
    </nav>
    <?php 
    $numero = @$_POST['numero'];
    $numero1 = $numero % 2;

      if($numero1 == 0){    
        echo ("<br><br><center><table bgcolor=silver><tr><td><strong>Par = $numero  </strong></td></tr></table></center>");
      }
      else if($numero1 == 1) {
        echo ("<br><br><center><table bgcolor=silver><tr><td><strong>Impar = $numero  </strong></td></tr></table></center>");
      }
         
    else //faz nada, para não aparecer a tabela antes da hora certa da execução
     ?>
    

</body>
</html>