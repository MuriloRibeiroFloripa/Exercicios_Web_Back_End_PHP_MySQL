<nav>
	<ul>
		<li><a href="../index.php">Voltar a Pagina Principal</a></li>
        <li><a href="../exercicio1/exercicio1.php">Exercicio 1</a></li>
        <li><a href="../exercicio2/exercicio2.php">Exercicio 2</a></li>
        <li><a href="../exercicio3/exercicio3.php">Exercicio 3</a></li>
    </ul>
</nav

<br>

<?php

$b1 = $_POST['b1'];
$h2 = $_POST['h2'];

$areaTriangulo = ($b1 + $h2)/2;

echo ("Exercicio 4: A area do tiangulo é = $areaTriangulo");

?>








