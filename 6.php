<?php
$a=10;
$b=20;
echo"<TABLE border=1><TR><TD bgcolor=lightblue>x</TD>";
for($x=1;$x<=$a;$x++){
    echo"<TD bgcolor=yellow>$x</TD>";
    }
echo"</TR>";

for($y=1;$y<=$b;$y++){
    echo"<TR><TD bgcolor=grey>$y</TD>";
for($x=1;$x<=$a;$x++) {
	$w=$x*$y;   
	echo"<TD>$w</TD>";
    }	   
    echo"</TR>";
    }	  
    echo"</TABLE>";
?>
