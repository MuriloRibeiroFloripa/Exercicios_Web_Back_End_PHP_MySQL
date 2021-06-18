<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Exercícios 11</title>
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
        <p><b><h1>Exercicio 11:</h1> <br>
        <p>Faça um programa para calcular o Índice de Massa Corporal (IMC) de uma pessoa. Para calcular o IMC deve-se dividir o peso pela altura ao quadrado: imc = peso / (altura * altura).</p>
      </ul>         
  </nav>  
    <br>
    <form method="post" action="massaCorporal.php">
      <center>
        <table bgcolor="silver">
        <tr>
            <td><label> Informe o Peso: </label></td>
            <td><input type="text" name="peso"></td>        
        </tr>
        <tr>
            <td><label> Informe o Altura: </label></td>
            <td><input type="text" name="altura"></td>        
        </tr>
        <tr> 
            <td></td>       
            <td><input type="submit" name="Enviar"></td>        
        </tr>
        </table>
      </center>
</form>	
</body>
</html>