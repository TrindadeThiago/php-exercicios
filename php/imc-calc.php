<?php
    if(!empty($_POST['peso'])){
        $peso = $_POST['peso'];
    }
    
    if(!empty($_POST['altura'])){
        $altura = $_POST['altura'];
    }

    if(!empty($altura) && !empty($peso) ){
        $imc = $peso/($altura * $altura);

        if($imc < 18.5){
            echo "Abaixo do peso";
        }else if($imc >= 18.6 && $imc <= 24.9){
            echo "Peso ideal";
        }else if($imc >= 25 && $imc <=29.9){
            echo "Levemente acima do peso";
        }else if($imc >= 30 && $imc <= 34.9){
            echo "Obesidade grau I";
        }else if($imc >= 35 && $imc <= 39.9){
            echo "Obesidade grau II";
        }else if($imc > 40){
            echo "Obesidade grau III";
        }
    

    }    

?>