<?php
    $biblioteca = array(
        $PHP = array("codigo" => "8282","livro" => "PHP", "autor" => "Marcos de Melo", "paginas" => "360"),
        $HTML = array("codigo" => "8283","livro" => "HTML", "autor" => "Ernandes Silva", "paginas" => "266"),
        $JQUERY = array("codigo" => "8284","livro" => "JQUERY", "autor" => "Nicoly Almeida", "paginas" => "159"),
        $CSS = array("codigo" => "8285","livro" => "CSS", "autor" => "Juliana Aparecida", "paginas" => "123")
    );
     
    $livro = mb_strtoupper($_POST['livro']);

    function buscar_livros($biblioteca, $livro){
        foreach($biblioteca as $teste){
            if($teste["livro"] == $livro){
                $flag = true;
                break;
            }
            else{
                $flag = false;
            };
        };

        return $flag;
    };

    if(buscar_livros($biblioteca, $livro) == true){
        echo("Resultado da busca: {$livro}<br/>");
        echo("Codigo: {$$livro["codigo"]}<br/>");
        echo("Livro: {$$livro["livro"]}<br/>");
        echo("Autor: {$$livro["autor"]}<br/>");
        echo("Paginas: {$$livro["paginas"]}<br/>");
    }
    else{
        echo("Livro não cadastrado.");
    };

?>