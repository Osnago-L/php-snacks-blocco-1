<?php
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];

    if( (strlen($name)>3) && (ctype_digit($age)) && (strpos($mail,"@")!= false) && (strpos($mail,".")!= false)){
        echo "Accesso Effettuato";
    }else{
        echo "Accesso Negato";
    };

    var_dump($name);
    var_dump($mail);
    var_dump($age);
?>
