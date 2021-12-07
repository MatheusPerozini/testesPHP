<?php
    $input = readline("Digite o numero: ");

    function PrimoInferior($num){
        if($num <= 2){
            return 0;
        } else {
            for($divisor = $num; $divisor >= 2; $divisor--){
                if(($num % $divisor) != 0){
                    if($divisor % 2 != 0 || $divisor == 2){
                        return $divisor;
                    }
                }
            }
        };
    };

    echo PrimoInferior($input);
?>