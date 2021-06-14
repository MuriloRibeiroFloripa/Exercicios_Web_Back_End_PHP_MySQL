<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exercício 5</title>
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
            <p><h1>Exercício 5:</h1></p>  
        </ul>
    </nav>
</head>
<body>
    <br>
    <center>
    <?php
    $i;
    $numero = $_POST['numero'];
    echo ("<b>Exercicio 5: </b>Aqui esta a tabuada desejada ");
    echo("<br><br>");
    ?>
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