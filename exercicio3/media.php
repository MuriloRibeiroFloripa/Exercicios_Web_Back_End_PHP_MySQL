<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exercício 3</title>
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
            <p><h1> Exercicio 3: </h1></p>
        </ul>
    </nav
    <?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];
    $media = ($n1 + $n2 + $n3 + $n4)/4;
    ?>
    <>
    <center>
        <table bgcolor="silver">
            <tr>
                <td><label> <?php echo ("A média dos quatros valores = <b>$media</b>"); ?> </label></td>                   
            </tr>
        </table>
    </center> 
</body>
</html>