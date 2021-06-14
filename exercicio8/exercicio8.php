<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Exercícios 8</title>
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
        <p><h1>Exercicio 8:</h1>
        <p> Faça um programa que calcule uma prestação em atraso. Para tanto, ele deve ler o valor original da prestação, o percentual de multa diária e a quantidade de dias em atraso. Ao final, o programa deve imprimir o novo valor da prestação. Antes de escrever o programa, identifique os dados de entrada e saída, e as fórmulas matemáticas.</p>
      </ul>      
  </nav>    
   </nav>
  <form method="post" action="prestacao.php">
  <center>
  <table bgcolor="silver">
    <tr>
        <th><label><b> Digite o valor da prestacao vencida: </b></label></th>
        <th><input type="text" name="valorVencido"></th>        
    </tr>
    <tr>
        <td><label><b> Taxa de juros: </b></label></td>
        <td><input type="text" name="taxaJuros"></td>
    </tr>
    <tr>
        <td><label><b> Periodo de atraso: </b></label></td>
        <td><input type="text" name="periodoAtraso"></td>        
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" name="Enviar"></td>
    </tr>
</body>
</html>