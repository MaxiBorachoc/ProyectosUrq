<?php
$alumnos= array();
$totalNotas=0;
$totalNotasAlum=0;
$exam1=0;
$exam2=0;
$exam3=0;
$exam4=0;
$exam5=0;

function promedio($totalNotas,$i){
    return $totalNotas/$i;
}

for($i=1;$i<35;$i++){
    for($k=0;$k<5;$k++){
        $alumnos[$i][$k]=rand(1,10);
        $totalNotas+=$alumnos[$i][$k];
        $totalNotasAlum+=$alumnos[$i][$k];
    }
    $exam1+=$alumnos[$i][0];
    $exam2+=$alumnos[$i][1];
    $exam3+=$alumnos[$i][2];
    $exam4+=$alumnos[$i][3];
    $exam5+=$alumnos[$i][4];
    
    $promedioXalumno= promedio($totalNotasAlum,$k);
    echo "El alumno $i tiene $promedioXalumno de promedio en sus notas. <br>";
    $totalNotasAlum=0;
}
$promTotal=promedio($totalNotas,170);

echo "<br> El promedio de todas las notas es $promTotal";


echo "<br> <br>";

$exam1=promedio($exam1,34);
$exam2=promedio($exam2,34);
$exam3=promedio($exam3,34);
$exam4=promedio($exam4,34);
$exam5=promedio($exam5,34);

echo "El promedio del primer exámen es de $exam1 <br>";
echo "El promedio del segundo exámen es de $exam2 <br>";
echo "El promedio del tercer exámen es de $exam3 <br>";
echo "El promedio del cuarto exámen es de $exam4 <br>";
echo "El promedio del quinto exámen es de $exam5 <br>";

?>
