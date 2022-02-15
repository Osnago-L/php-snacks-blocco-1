<?php
    $array = [];
    for ($i=0; $i < 15 ; $i++) { 
        $random = rand(1,30);
        if(!in_array($random,$array)){
            $array[] = $random;
        }else{
            $i=$i-1;
        };
    }

    var_dump($array);
?>