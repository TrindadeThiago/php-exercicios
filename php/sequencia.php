<?php
        $num = $_GET['num'];
        $cont = 0;

        while($cont <= 200){
            if($num % 2 == 0){
                echo "$num ";
            }
            $num ++;
            $cont ++;
        }
?>