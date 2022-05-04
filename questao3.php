<?php

    $array = new SplFixedArray(20);
    
    $cont = 0;
    
    while($cont < 20){
        $array[$cont] = rand(1,10);
        $cont = $cont + 1;
    }
    
    $cont = 0;
    
    echo "[";
    while($cont < 20){
        echo $array[$cont] . ", ";
        $cont = $cont + 1;
    }
    echo "]; \n";
    
    echo "\nOs números que não se repetem são o ";
    
    $cont = 0;
    
    while($cont < 20){
        $repet = false;
        $aux = 0;
        while($aux < 20){
            if($aux != $cont){
                if($array[$cont] == $array[$aux]){
                    $repet = true;
                }
            }
            $aux = $aux + 1;
        }
        
        if(!$repet){
            echo $array[$cont] . ", ";
        }
        
        $cont = $cont + 1;
    }