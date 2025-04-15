<?php
$cores = [
    "Azul" => "Tranquilidade está com você hoje.",
    "Vermelho" => "Energia e paixão marcam o seu dia.",
    "Verde" => "Equilíbrio e esperança à sua volta.",
    "Amarelo" => "Alegria e criatividade te acompanham.",
    "Roxo" => "Misterioso e sábio, esse é o seu momento."
];

$cor = array_rand($cores);
$mensagem = $cores[$cor];

echo "Cor sorteada: $cor<br>Mensagem: $mensagem";
?>

<br><br>
<a href="Exercício5.html">← Voltar</a>
