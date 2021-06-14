<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Exercício 8</title>
   <link rel="stylesheet" href="">
</head>
<body>
   <nav>
      <ul>
         <li><a href="../index.php">Voltar a Pagina Principal</a></li>
         <li><a href="../exercicio1/exercicio1.php">Exercicio 1</a></li>
         <li><a href="../exercicio2/exercicio2.php">Exercicio 2</a></li>
         <li><a href="../exercicio3/exercicio3.php">Exercicio 3</a></li>
         <li><a href="../exercicio4/exercicio4.php">Exercicio 4</a></li>
         <li><a href="../exercicio5/exercicio6.php">Exercicio 5</a></li>
         <li><a href="../exercicio6/exercicio6.php">Exercicio 6</a></li>
         <h1>Exercício 8:</h1>
         <p> Formula usada: </p>

         <p>JUROS SIMPLES <BR>juros = ((valorVencido * (taxaJuros / 100)) * periodoAtraso);
            <br>novoValor = valorVencido + juros;
         </p>
      </ul>
   </nav>
   <?php
   $valorVencido = $_POST['valorVencido'];
   $taxaJuros = $_POST['taxaJuros'];
   $periodoAtraso = $_POST['periodoAtraso'];
   $novoValor;
   $juros = (($valorVencido * ($taxaJuros / 100)) * $periodoAtraso);
   $novoValor = $valorVencido + $juros;
   ?>
    <center>
        <table bgcolor="silver">
         <tr>
            <th><label><?php echo("Valor da prestação: "); ?> </label></th>
            <td><b><?php echo $valorVencido ?></b></td>
         </tr>
         <tr>
            <th><label><?php echo("Periodo de atraso: "); ?> </label></th>
            <td><b><?php echo $periodoAtraso ?></b></td>
         </tr>
         <tr>
            <th><label><?php echo("Juros a ser cobrados: "); ?> </label></th>
            <td><b><?php echo $juros ?></b></td>
            </tr>
            <tr>
               <th><label><?php echo ("<b>Valor da prestacao com juros: </b>"); ?> </label></th>
               <td><b><?php echo $novoValor ?></b></td>
            </tr>
        </table>
    </center>
    </table>   
</body>
</html>