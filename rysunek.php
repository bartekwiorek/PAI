<?php
 $tid=0;
 if (isset($_GET['tid'])) {$tid=$_GET['tid'];};
 
 $usun=0;
 if (isset($_GET['usun'])) {$usun=$_GET['usun'];};
 if ($usun==1)
 {
   if(file_exists("img/$tid.jpg")) 
     {unlink("img/$tid.jpg");};
 }
 $dodaj=0;
 if (isset($_GET['dodaj'])) {$dodaj=$_GET['dodaj'];};
 if ($dodaj==1)
 {
   echo"
        <DIV align='center'>
        <FORM method='POST' action='' enctype='multipart/form-data'>
		  <INPUT type='FILE' name='plik'>
		  <INPUT type='SUBMIT' name='ok' value='ok'>
		</FORM>
		</DIV>
       ";
  if(isset($_POST['ok']))
  {
	$plik_nazwa_tmp = $_FILES["plik"]["tmp_name"];
    //$plik_nazwa_oryginalna = $_FILES["plik"]["name"];
    //$plik_wielkosc = $_FILES["plik"]["size"];
	if(is_uploaded_file($plik_nazwa_tmp))
	{
          move_uploaded_file($plik_nazwa_tmp,"img/$tid.jpg");		
	}
  }
 }
 
 
 $rys="img/$tid.jpg";
 if(!file_exists($rys)) {$rys="nofoto.jpg";};
 echo"
     <div align=center>
     <A href='baza.php'>
       <IMG SRC='$rys'>
	 </A>
	 <br>
	 <A href='rysunek.php?tid=$tid&usun=1'>X</A>
	 <A href='rysunek.php?tid=$tid&dodaj=1'>D</A>
	 </DIV>
	 ";
 
?>