<?php
$genero = $_POST['genero'];

$sortes_homem = ["Hoje é seu dia de brilhar!", "Confie na sua intuição!", "Você é mais forte do que pensa."];
$sortes_mulher = ["Sua energia é inspiradora!", "Você tem um brilho único!", "Nada pode te parar hoje!"];

$sorte = ($genero == "homem") ? $sortes_homem[array_rand($sortes_homem)] : $sortes_mulher[array_rand($sortes_mulher)];
echo "Sorte para você: $sorte";
?>

<br><br>
<a href="Exercício3.html">← Voltar</a>
