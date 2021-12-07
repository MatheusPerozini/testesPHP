<?php
    $conjNumeros = [];
    $contagemNumeros = [];

    for($i = 0;20 > $i;$i++){
        $numero = rand(1,10);
        array_push($conjNumeros, $numero);

        $existente = false;
        foreach ($contagemNumeros as $objeto) {
            if ($objeto->numero == $numero) {
                $existente = true;
                $objeto->vezes += 1;
            }
        }

        if($existente == false){
            array_push($contagemNumeros, (object) ['numero' => $numero, 'vezes' => 1]);
        }
    }
    $numeroRepetido;
    for($i = 0;count($contagemNumeros) > $i;$i++){
        if($i == 0 || $numeroRepetido->vezes < $contagemNumeros[$i]->vezes){
            $numeroRepetido = $contagemNumeros[$i];
        }
    }
    print_r ($conjNumeros);
    echo "O número que mais apareceu foi: " .  $numeroRepetido->numero;
    echo "\nEle repetiu um total de: " . $numeroRepetido->vezes;
?>