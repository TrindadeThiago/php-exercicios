<?php
    if(!empty($_POST['optPlaca'])){
        $optPlaca = $_POST['optPlaca'];

        if($optPlaca == 1 || $optPlaca == 2){
            echo "Segunda-feira";
        }else if($optPlaca == 3 || $optPlaca == 4){
            echo "Terca-feira";
        }else if($optPlaca == 5 || $optPlaca == 6){
            echo "Quarta-feira";
        }else if($optPlaca == 7 || $optPlaca == 8){
            echo "Quinta-feira";
        }else if($optPlaca == 9 || $optPlaca == 10){
            echo "Sexta-feira";
        }
    }  
?>