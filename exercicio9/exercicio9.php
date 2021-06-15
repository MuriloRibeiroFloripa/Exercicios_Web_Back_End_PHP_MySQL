<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Exercícios 9</title>
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
        
        <p><<h1>Exercicio 7:<h1> 

      </ul>      
  </nav>
  <nav>
    <ul>
     <p> Escrever um programa que leia o nome de um vendedor, o seu salário fixo e o total de vendas efetuadas por ele no mês (em dinheiro). Sabendo que este vendedor ganha 15% de comissão sobre suas vendas efetuadas, imprima o seu nome, o salário fixo e salário no final do mês (salário fixo + comissão).</p>     
    </ul>
  </nav>
  <br>
  <center>
   <form method="post" action="salario.php">
      <label>  </label>
      <br>
      <table bgcolor="silver">
        <tr>
          <td> <label><strong> Informe o nome do vendedor: </strong> </label> </td>
          <td><input type="text" name="nome"></td>        
        </tr>
        <tr>
          <td><label> <strong>Informe o Salário fixo: </strong> </label></td>
          <td> <input type="text" name="salarioFixo"></td>        
        </tr>
        <tr>
          <td><label><strong> Informe o valor total das vendas realizadas no Mês: </strong></label></td>
          <td><input type="text" name="vendasRealizadas"></td>        
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="Enviar"></td>
        </tr>
      </table>
    </form>
  </center>
</body>
</html>