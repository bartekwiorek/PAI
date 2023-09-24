<?php

$a=0;
$b=5;
$c=3;
$d=0;
$e=1;
$f=9;
$g=0;
$h=6;
$i=3;
$j=5;

$k=1;
$l=3;
$m=7;
$n=9;

$liczenie1= $a * $k + $b * $l + $c * $m + $d * $n + $e * $k + $f * $l + $g * $m + $h * $n + $i * $k + $j * $l; 
$mod = $liczenie1 % 10;
$lkon = 10 - $mod;
$ostcyf = $lkon;
 
if ($j%2==1)
{
    echo"Men</br>";
}
else{
    echo"Women</br>";
}

echo"Ostatnia cyfra peselu $a $b $c $d $e $f $g $h $i $j wynosi $ostcyf";

echo"</br>Rok urodzenia 20$a$b";
$miesiac = 4 - $c.$d ;
echo"</br>Miesiąc $miesiac";
echo"</br>Dzień $e$f";

?>
