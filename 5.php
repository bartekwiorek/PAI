<?php
$a=2;
$b=6;
$c=2;
$delta = $b * $b -4 * $a * $c;
echo"Delta: $delta<br>";

if($delta > 0){
    $x1 = (-$b - sqrt($delta) / 2*$a);
    $x2 = (-$b + sqrt($delta) / 2*$a);

    echo"Równanie dwa ma rozwiązania<br>";
    echo"x1= $x1<br>";
    echo"x2= $x2<br>";
}
if($delta < 0){
    echo"Równanie nie ma rozwiązań<br>";
}
if($delta==0){
    $x0= -$b/(2*$a);
    echo"Równanie ma jedno rozwiązanie<br>";
    echo"x0= $x0";
    }

?>