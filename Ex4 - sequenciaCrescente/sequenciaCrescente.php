<?php

    $input = readline("Digite o array (Ex:[1,2,3] ou 1,2,3): ");
    if(str_contains($input,"[") && str_contains($input,"]")){
        $input = str_replace("[","",$input);
        $input = str_replace("]","",$input);
    }
    $array = explode(",", $input);

    function SequenciaCrescente($array){
        $resultado = "FALSE";
        for($i = 0;count($array) >= $i;$i++){
            $newArray = $array;
            \array_splice($newArray,$i ,1);
            $numeroAnt = PHP_INT_MIN;
            $isCrescended = true;
            foreach($newArray as $valor){
                if ($numeroAnt >= $valor) {
                    $isCrescended = false;
                }
                $numeroAnt = $valor;
            }
            if($isCrescended == false && $resultado == "FALSE"){
                $resultado = "FALSE";
            } else if($isCrescended == true){
                $resultado = 'TRUE';
            }
        }
        return $resultado;
    }

    echo SequenciaCrescente($array);
?>