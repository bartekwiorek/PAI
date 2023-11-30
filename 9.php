<?php
$a="Ala ma kota a sierotka ma Rysia";
$dl=strlen($a);
echo"$a<br>";
echo"$dl<br><br>";

for($i=0;$i<$dl;$i++){
    $b=substr($a,$i,1);
    echo"$b<br>";
}
echo"<br><br>";

for($i=$dl-1;$i>=0;$i--){
    $b=substr($a,$i,1);
    echo"$b<br>";
}



?>

