<nav>
	<ul>
		<li><a href="../index.php">Voltar a Pagina Principal</a></li>
        <li><a href="../exercicio1/exercicio1.php">Exercicio 1</a></li>
        <li><a href="../exercicio2/exercicio2.php">Exercicio 2</a></li>
        <li><a href="../exercicio3/exercicio3.php">Exercicio 3</a></li>
        <li><a href="../exercicio4/exercicio4.php">Exercicio 4</a></li>
    </ul>
</nav

<br>

<?php

$i;
$numero = $_POST['numero'];
echo ("Exercicio 5: Aqui esta a tabuada desejada ");
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








