<?php
$limite = intval($_POST['numero']);
if ($limite > 0) {
    $numero = rand(0, $limite);
    echo "Número sorteado entre 0 e $limite: $numero";
} else {
    echo "Por favor, informe um número maior que zero.";
}
?>

<br><br>
<a href="Exercício2.html">← Voltar</a>
