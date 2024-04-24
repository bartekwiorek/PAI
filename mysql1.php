<html>
	<head>
		<title>Baza danych</title>
		<link rel="stylesheet" type="text/css" href="stylebazy.css">
	</head>
	<body>
	
</html>
<?php
  $szukane="";
  if(isset($_POST['szukane'])) {$szukane=$_POST['szukane'];};
  $szukane=htmlspecialchars(trim($szukane));
  $grsz=0;
  if(isset($_POST['grsz'])) {$grsz=$_POST['grsz'];};
  
  $id=mysqli_connect("localhost","root","","4ti_bw");
  $sql="SELECT towary.tid,towary.nazwa,towary.jm,
        towary.cena_netto,towary.barcod,towary.stan,
		towary.promocja,vat.stawka,grupy.nazwa AS ngr 
		FROM towary,grupy,vat WHERE towary.vat=vat.vid 
		AND towary.grupa=grupy.grid 
		AND 
		((towary.nazwa like '%$szukane%') 
		OR
		(towary.barcod like '%$szukane%'))";
   if($grsz>0) {$sql=$sql." AND towary.grupa='$grsz' ";};
   
   $sql=$sql." order by tid DESC LIMIT 100; "; 
		
  $result=mysqli_query($id,$sql);
  echo"<TABLE class=tabela border=1 >
       <TR>
	     <TD class=naglowek colspan=11>
		    <FORM method='POST' action=''>
			   Wyszukaj:
			   <INPUT type='text' name='szukane' value='$szukane'>
			   Grupa:
			   <SELECT name='grsz'>
			   <OPTION value=0></OPTION>";
			   $sql_gr="select * from grupy";
			   $result_gr=mysqli_query($id,$sql_gr);
			   while($row_gr=mysqli_fetch_array($result_gr))
			   { 
		        $sel="";
				if($row_gr['grid'] == $grsz )
				   {$sel=" selected ";}
		        echo"<OPTION value=$row_gr[grid] $sel>$row_gr[nazwa]</OPTION>";
			   }
    			  
  	echo"</SELECT><br>
			<div class=div1>
				<INPUT class=buttonszukaj type='submit' value='Szukaj'>
			</div>";
	echo"<div class=div2>
			   	<input class=buttondodaj type='submit' href='nowy.php' value=Dodaj></A>
				</div>
			</FORM>
		 </TD>
	   </TR>
       <TR>
	     <TD class=tablehead>ID</TD>
		 <TD class=tablehead>EDY</TD>
		 <TD class=tablehead>ZDJECIE</TD>
		 <TD class=tablehead>NAZWA</TD>
		 <TD class=tablehead>VAT</TD>
		 <TD class=tablehead>JEDNOSTKA</TD>
		 <TD class=tablehead>CENA NETTO</TD>
		 <TD class=tablehead>GRUPA</TD>
		 <TD class=tablehead>BARCOD</TD>
		 <TD class=tablehead>STAN</TD>
		 <TD class=tablehead>PROMOCJA</TD>
	   </TR>
      ";
  
  while($row=mysqli_fetch_array($result))
  {
	$rysunek='nofoto.jpg';
	if(file_exists("img/".$row['tid'].".jpg"))
	  { $rysunek="img/".$row['tid'].".jpg";};
    echo"
	    <TR>
		  <TD class=tablehead> $row[tid]</TD>
		  <TD class=tablehead>
		     <A href='kasuj.php?kid=$row[tid]'>x</A>
			 <A href='popraw.php?pid=$row[tid]'>e</A>
		  </TD>
		  <TD class=tablehead>
		    <A href='$rysunek' target='_blank'>
		     <IMG SRC='$rysunek' width=100>
			</A>
		  </TD>
		  <TD class=tablehead>$row[nazwa]</TD>
		  <TD class=tablehead>$row[stawka]</TD>
		  <TD class=tablehead>$row[jm]</TD>
		  <TD class=tablehead>$row[cena_netto]</TD>
		  <TD class=tablehead>$row[ngr]</TD>
		  <TD class=tablehead>$row[barcod]</TD>
		  <TD class=tablehead>$row[stan]</TD>
		  <TD class=tablehead>$row[promocja]</TD>
		</TR>  
	    ";  
  };
  echo"</TABLE>";
  mysqli_close($id);
echo"
	</body>
</html>";
?>
