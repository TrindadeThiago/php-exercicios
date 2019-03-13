<?php
    $num = $_GET['num'];

    for($cont = 0; $cont < 11; $cont ++){
        echo $num ."x". $cont ."=". ($num * $cont). "  "; 
    }
?>