<?php

    $nome = $_REQUEST['nome'];

    $lista = array("Ana", "Bia", "Carlos", "Daniel", "Eduardo", "Fernanda", "Gustavo", "Hugo", "Igor", "João");

    foreach($lista as $nome_lista){
        if($nome == $nome_lista){
            echo "O nome $nome foi encontrado na lista!";
            return;
        } else {
            echo "O nome $nome não foi encontrado na lista!";
            return;
        }
    }

?>