<?php

    $numero = $_REQUEST['numero'];

    function tabuada($numero){
        for($i = 1; $i <= 10; $i++){
            echo "$numero x $i = " . $numero * $i . "<br>";
        }
    }

    tabuada($numero);

?>