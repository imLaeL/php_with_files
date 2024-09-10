<?php

    $frase1 = $_REQUEST['frase1'];
    $frase2 = $_REQUEST['frase2'];
    $frase3 = $_REQUEST['frase3'];

    $arquivo = fopen('frases.txt', 'a');

    fwrite($arquivo, $frase1 . "\n");
    fwrite($arquivo, $frase2 . "\n");
    fwrite($arquivo, $frase3 . "\n");

    echo "Frases gravadas com sucesso!";

    fclose($arquivo);

?>