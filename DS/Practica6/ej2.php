<?php
$cont=0;
for($i=0;$i<100;$i++){
    $n=rand(0,500);
    if($n>=100){
        $cont+=1;
    };
    if($n==0){
        die();
    }
}
echo "Hay $cont números mayores o iguales a 100";
?>