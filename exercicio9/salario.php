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
        <li><a href="../exercicio9/exercicio9.php">Exercicio 9</a></li> 
        <h1>Exercício 9 :</h1> 
        </ul>
   </nav>
   <?php
   $nome = $_POST['nome'];
   $salarioFixo = $_POST['salarioFixo'];
   $vendasRealizadas = $_POST['vendasRealizadas'];

   $salarioFinal = $salarioFixo + (0.15 * $vendasRealizadas);
   ?>
   <br>
   <center>
   <table bgcolor="silver">
        <tr>
          <td> <label><strong> Vendedor: </strong> </label> </td>
          <td><?php echo $nome ?> </td>        
        </tr>
        <tr>
          <td><label> <strong>Salario Fixo: </strong> </label></td>
          <td> <?php echo $salarioFixo?></td>        
        </tr>
        <tr>
          <td><label><strong> Salario final: </strong></label></td>
          <td><?php echo $salarioFinal?></td>        
        </tr>        
      </table>
      </center>
</body>
</html>