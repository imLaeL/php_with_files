<?php

    $numero = $_REQUEST['numero'];

    function tabuada($numero){
        for($i = 1; $i <= 10; $i++){
            $linha = $numero * $i;
            $arquivo = fopen('tabuada.txt', 'a');
            fwrite($arquivo, "$numero x $i = $linha" . "\n");
        }
    }

    tabuada($numero);

    $arquivo = fopen('tabuada.txt', 'r');

    while(!feof($arquivo)) {
        $linha = fgets($arquivo);
        echo $linha . "<br>";
    }

?>