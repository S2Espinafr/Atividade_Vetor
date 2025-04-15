<?php
$time = $_POST['time'];

$mensagens = [
    "Palmeiras" => ["Avanti Palestra!", "Verde é a cor da esperança!", "Vamos, Palmeiras!"],
    "Corinthians" => ["Vai, Corinthians!", "Timão é raça!", "Fiel sempre presente!"],
    "São Paulo" => ["Vamos, Tricolor!", "Soberano em campo!", "Orgulho da torcida!"],
    "Santos" => ["Vai pra cima deles, Peixe!", "Meninos da Vila em ação!", "Santos sempre Santos!"]
];

$frase = $mensagens[$time][array_rand($mensagens[$time])];
echo "Mensagem para o $time: $frase";
?>

<br><br>
<a href="Exercício4.html">← Voltar</a>
