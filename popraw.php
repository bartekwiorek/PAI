<?php
  $id=mysqli_connect("localhost","root","","iv_ti_1");
  $pid=0;
  if(isset($_GET['pid'])) {$pid=$_GET['pid'];};
  if (isset($_POST['nazwa']))
   { 
     $nazwa=trim(htmlspecialchars($_POST['nazwa']));
	 $vat=(int)$_POST['vat'];
	 $jm=trim(htmlspecialchars($_POST['jm']));
	 $cena_netto=(float)$_POST['cena_netto'];
	 $grupa=(int)$_POST['grupa'];
	 $barcod=trim(htmlspecialchars($_POST['barcod']));
	 $stan=(float)$_POST['stan'];
	 $promocja=(float)$_POST['promocja'];
	 if($nazwa!="")
     {		
	   $result=mysqli_query($id,"update towary set nazwa='$nazwa' where tid='$pid' ");
	   $result=mysqli_query($id,"update towary set vat='$vat' where tid='$pid' ");
	   $result=mysqli_query($id,"update towary set jm='$jm' where tid='$pid' ");
	   $result=mysqli_query($id,"update towary set cena_netto='$cena_netto' where tid='$pid' ");
	   $result=mysqli_query($id,"update towary set grupa='$grupa' where tid='$pid' ");
	   $result=mysqli_query($id,"update towary set barcod='$barcod' where tid='$pid' ");
	   $result=mysqli_query($id,"update towary set stan='$stan' where tid='$pid' ");
	   $result=mysqli_query($id,"update towary set promocja='$promocja' where tid='$pid' ");
	 };	
	  echo"<SCRIPT>
	         location.href='baza.php';
	      </SCRIPT>
	     ";
   }; 
  $sql_t="select *from towary where tid='$pid'";
  $result_t=mysqli_query($id,$sql_t);  
  $row_t=mysqli_fetch_array($result_t);
  echo"
       <FORM action='' method='POST'>
	     Nazwa <INPUT type='text' name='nazwa' value='$row_t[nazwa]'><BR>
		 VAT <SELECT name='vat'>";
		$sql="select * from vat";
        $result=mysqli_query($id,$sql);
		while($row=mysqli_fetch_array($result))
		{
		  $sel="";
		  if($row['vid']==$row_t['vat']) {$sel=" selected ";};
		  echo"<OPTION value='$row[vid]' $sel>$row[stawka]</OPTION>";
	    }
  echo"	 </SELECT><BR>
		 Jednostka <INPUT type='text' name='jm' value='$row_t[jm]'><BR>
		 Cena <INPUT type='number' name='cena_netto' value='$row_t[cena_netto]' step='0.01'><BR>
		 Grupa towarow <SELECT name='grupa'>";
		$sql="select * from grupy";
        $result=mysqli_query($id,$sql);
		while($row=mysqli_fetch_array($result))
		{
		  $sel="";
		  if($row['grid']==$row_t['grupa']) {$sel=" selected ";};
		  echo"<OPTION value='$row[grid]' $sel>$row[nazwa]</OPTION>";
	    }
  echo"	 </SELECT><BR>
		 Kod kreskowy <INPUT type='text' name='barcod' value='$row_t[barcod]'><BR>
		 Stan <INPUT type='text' name='stan' value='$row_t[stan]'><BR>
		 Cena promocyjna <INPUT type='text' name='promocja' value='$row_t[promocja]'><BR>
		 <INPUT type='submit' name='OK' value='Zapisz'>
		 <A href='baza.php'>WROC</A>
	   </FORM>
     ";

  mysqli_close($id);
?>