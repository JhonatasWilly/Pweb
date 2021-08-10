<?php
    function soma($valor1, $valor2){
        $total = $valor1 + $valor2;

        return $total;
    }

    echo ("Resultado -> " . soma($_POST['val1'], $_POST['val2']));
?>