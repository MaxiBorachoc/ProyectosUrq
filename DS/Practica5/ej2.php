<?php
    $primero=$_GET["primero"];
    $segundo=$_GET["segundo"];
    $tercero=$_GET["tercero"];

    if($primero==90){
        echo "Es un triángulo rectángulo";
    } else{
        if($segundo==90){
            echo "Es un triángulo rectángulo";
        }else{
            if($tercero==90){
                echo "Es un triángulo rectángulo";
            }else{
                echo "No es un triángulo rectángulo";
            }
        }
    }
    
?>
