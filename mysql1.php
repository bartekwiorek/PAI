<?php
  $szukane="";
  if(isset($_POST['szukane'])) {$szukane=$_POST['szukane'];};
  $szukane=htmlspecialchars(trim($szukane));
  $grsz=0;
  if(isset($_POST['grsz'])) {$grsz=$_POST['grsz'];};
  
  $id=mysqli_connect("localhost","root","","iv_ti_1");
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
   
   $sql=$sql." order by tid LIMIT 100; "; 
		
  $result=mysqli_query($id,$sql);
  echo"<TABLE border=1>
       <TR>
	     <TD colspan=9>
		    $sql
		    <HR>
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
    			  
  echo"		   </SELECT>
			   <INPUT type='submit' value='Szukaj'>
			</FORM>
		 </TD>
	   </TR>
       <TR>
	     <TD align=center><B>ID</B></TD>
		 <TD><B>NAZWA</B></TD>
		 <TD><B>VAT</B></TD>
		 <TD><B>JEDNOSTKA</B></TD>
		 <TD><B>CENA NETTO</B></TD>
		 <TD><B>GRUPA</B></TD>
		 <TD><B>BARCOD</B></TD>
		 <TD><B>STAN</B></TD>
		 <TD><B>PROMOCJA</B></TD>
	   </TR>
      ";
  
  while($row=mysqli_fetch_array($result))
  {
    echo"
	    <TR>
		  <TD align=right>$row[tid]</TD>
		  <TD align=left>$row[nazwa]</TD>
		  <TD>$row[stawka]</TD>
		  <TD>$row[jm]</TD>
		  <TD>$row[cena_netto]</TD>
		  <TD>$row[ngr]</TD>
		  <TD>$row[barcod]</TD>
		  <TD>$row[stan]</TD>
		  <TD>$row[promocja]</TD>
		</TR>  
	    ";  
  };
  echo"</TABLE>";
  mysqli_close($id);
?>