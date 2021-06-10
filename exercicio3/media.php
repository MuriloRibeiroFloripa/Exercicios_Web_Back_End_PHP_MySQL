<nav>
	<ul>
		<li><a href="../index.php">Voltar a Pagina Principal</a></li>
        <li><a href="../exercicio1/exercicio1.php">Exercicio 1</a></li>
        <li><a href="../exercicio2/exercicio2.php">Exercicio 2</a></li>
    </ul>
</nav

<br>

<?php

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$n4 = $_POST['n4'];

$media = ($n1 + $n2 + $n3 + $n4)/4;

echo ("Exercicio 3: A media dos  4 valores informados é = $media");

?>








