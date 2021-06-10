<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Exercícios1</title>
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
        <p><b>Exercicio 6: Programa que calcula a tabuada desejada do 2.</b></p>
      </ul>      
  </nav>
    
<?php

$i;
$numero = 2;
echo ("Exercicio 6: Aqui esta a tabuada desejada do 2! ");
echo("<br><br>");
 
for($i = 1; $i <= 10; $i++){
    echo $numero;
    echo(" x ");
    echo $i;
    echo(" = ");
    echo $i*$numero;
    echo("<br>");
}

?>

</body>

</html>