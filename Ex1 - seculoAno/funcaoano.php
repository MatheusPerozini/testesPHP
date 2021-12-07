<?php
    $input = readline("Digite o ano: ");

    function SeculoAno(int $ano){
        $seculo = $ano/100;
        $resto = $ano%100;
        if($resto != 0){
            $seculo += 1;
            $seculo = intval($seculo);
        }


        return $seculo;
    }

    echo SeculoAno($input);
?>