<?php
    if(!empty($_POST['optPlaca'])){
        $optPlaca = $_POST['optPlaca'];
    }
    
    if(!empty($optPlaca)){
        switch($optPlaca){
            case "1" || "2":
                echo "Segunda-Feira";
                break;
            case "3" || "4":
                echo "Terca-feira";
                break;
        }
    }    
?>