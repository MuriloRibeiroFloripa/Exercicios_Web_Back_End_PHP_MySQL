<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Exercícios 6</title>
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
        <p><b>Exercício 6: Faça um programa para calcular a tabuada do 2. Deve-se apresentar o resultado assim:</b></p>
        <br>2x1 = 2
        <br>2x2 = 4
        <br>2x3 = 6
        <br>2x4 = 8
        <br>2x5 = 10
        <br>2x6 = 12
        <br>2x7 = 14
        <br>2x8 = 16
        <br>2x9 = 18
        <br>2x10 = 20
      </ul>      
  </nav>
  <br>
  <center>
    <p>"Exercicio 6: Aqui esta a tabuada desejada do 2!</p>
    <?php $i; $numero = 2; ?>
    <table bgcolor="silver">
      <tr>
        <td> <?php for($i = 1; $i <= 10; $i++){ 
          echo $numero; 
          echo (" x "); 
          echo $i; 
          echo (" = "); 
          echo $i*$numero;  
          echo("<br>");
          }?>
        </td>
      </tr>
    </table>
  </center>
</body>
</html>