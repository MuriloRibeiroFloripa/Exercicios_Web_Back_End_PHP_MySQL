<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Exercício 10</title>
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
        <p><h1>Exercicio 10:<h1> 
        <center><p> Você escolheu Calcular Superfície do Trapézio!</p></center>
      </ul>
       </nav>
  <center>
   <form method="POST" action="trapezio.php">
      <label>  </label>
      <br>
      <table bgcolor="silver" width="18%" cellpadding="8">
        <tr>
          <td> <label><strong> Informe base menor: </strong> </label> </td>
          <td><input type="text" name="baseMenor"></td>        
        </tr>
        <tr>
          <td><label> <strong>Informe base maior: </strong> </label></td>
          <td> <input type="text" name="baseMaior"></td>        
        </tr>
        <tr>
          <td><label> <strong>Informe Altura: </strong> </label></td>
          <td> <input type="text" name="altura"></td>        
        </tr>       
        <tr>
          <td></td>
          <td><input type="submit" name="Calcular"></td>
        </tr>
      </table>
    </form>
  </center>

   <?php

   $baseMenor = @$_POST['baseMenor'];
   $baseMaior = @$_POST['baseMaior'];
   $altura = @$_POST['altura'];

   $area = (($baseMenor * $baseMaior)/2)*$altura;

   if($area != 0){

   echo ("<br><br><center><table bgcolor=silver><tr><td><strong> Superficie do Trapézio = $area </strong></td></tr></table></center>");
    }

   else    //faz nada, para não aparecer a tabela antes da hora certa da execução   
  ?>      
  </nav>
</body>
</html>