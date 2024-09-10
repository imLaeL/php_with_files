<?php

    $nome = $_REQUEST['nome'];
    $disciplina = $_REQUEST['disciplina'];
    $nota1 = $_REQUEST['nota1'];
    $nota2 = $_REQUEST['nota2'];
    $nota3 = $_REQUEST['nota3'];

    function media($nota1, $nota2, $nota3){
        return ($nota1 + $nota2 + $nota3) / 3;
    }


    echo "Nome: $nome <br>";
    echo "Disciplina: $disciplina <br>";
    echo "Média: " . media($nota1, $nota2, $nota3) . "<br>";

?>