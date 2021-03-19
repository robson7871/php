<?php
$nome = "Robson";

$sobrenome = "Sousa";

// concatenação é a forma de junta as coisas e deve usar o ponto

$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;
exit;

echo $nome;

echo "<br/>";

unset ($nome);
if (isset($nome))  {

    echo $nome;
}


?>
