<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Exercícios 7</title>
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
        <p><b>Exercicio 7:  programa para calcular a quantidade de <i>BTUs</i> de um ar-condicionado em um ambiente.</b></p>
      </ul>      
  </nav>
  <nav>
    <ul>
      Faça um programa para calcular a quantidade de <i>BTUs</i> de um ar-condicionado. O cálculo é feito da seguinte forma:
      <li>
        Para cada metro quadrado, multiplica-se por <i>600 BTUs</i>;
      </li>
      <li>
        Cada pessoa adicional soma <i>600 BTUs</i> (a primeira pessoa não é contabilizada);
      </li>
      <li>
        Cada equipamento eletrônico soma <i>600 BTU</i>.
      </li> 
       Ex.: Uma sala com <i>30m2</i> para três pessoas com dois computadores: <i>30m2 x 600 BTU + 1200 BTU</i> (duas pessoas, pois a primeira não conta)<i> + 1200 BTU</i> (dois computadores) =<i> 20400 BTU</i>
    </ul>
  </nav>
  <br>
  <center>
   <form method="post" action="btus.php">
      <label> Programa para calcular a quantidade de <i>BTUs</i> de um ar-condicionado em um Ambiente. </label>
      <br>
      <table bgcolor="silver">
        <tr>
          <td> <label><strong> Informe em Metros Quadrados, o tamanho do Ambiente:</strong> </label> </td>
          <td><input type="text" name="metros"></td>        
        </tr>
        <tr>
          <td><label> <strong>Informe quantos equipamento eletrônico esta ligado neste Ambiente: </strong> </label></td>
          <td> <input type="text" name="pessoas"></td>        
        </tr>
        <tr>
          <td><label><strong> Quantas Pessoas Estão no Local : </strong></label></td>
          <td><input type="text" name="equipamentos"></td>        
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