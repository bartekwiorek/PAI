<?php

$a=0;
$b=5;
$c=2;
$d=1;
$e=0;
$f=7;
$g=4;
$h=8;
$i=7;
$j=1;
$k=1;


$liczenie1= $a * 1 + $b * 3 + $c * 7 + $d * 9 + $e * 1 + $f * 3 + $g * 7 + $h * 9 + $i * 1 + $j * 3; 
$dziel10 = $liczenie1 % 10;
$kontrolna = 10 - $dziel10;
$ostcyfra = $kontrolna;
 
if ($j%2==1)
{
    echo"Płeć: Chłop<br>";
}
else{
    echo"Płeć: Baba<br>";
};

echo"Ostatnia cyfra peselu $a $b $c $d $e $f $g $h $i $j $k wynosi $ostcyfra";

if ($k == $ostcyfra){
    echo"<br>Pesel jest poprawny";
}else
{
    echo"<br>Pesel nie jest poprawny";
}
?>