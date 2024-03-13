<?php
$grtw="";
$id=mysqli_connect("localhost","root","","4ti_bw");
echo"
    <FORM action='' method='POST'>
	    Nazwa:
        <INPUT Type='text' name='nazwa'><br>
	   
    VAT:
        <SELECT name='vat'>
        <OPTION value=0></OPTION>";
        $sql_vat="select * from vat";
        $result_vat=mysqli_query($id,$sql_vat);
        while($row_vat=mysqli_fetch_array($result_vat))
        { 
         echo"<OPTION value=$row_vat[grid]>$row_vat[stawka]</OPTION>";
        }

        echo"</select><br>
    jednostka:
        <INPUT Type='text' name='nazwa'><br>
    
    cena:
        <INPUT Type='text' name='nazwa'><br>

    Grupa towarów:
        <SELECT name='grtw'>
        <OPTION value=0></OPTION>";
        $sql_grtw="select * from grupy";
        $result_grtw=mysqli_query($id,$sql_grtw);
        while($row_grtw=mysqli_fetch_array($result_grtw))
        { 
        echo"<OPTION value=$row_grtw[grid]>$row_grtw[nazwa]</OPTION>";
        }
echo"</select><br>
    kod:
        <INPUT Type='text' name='nazwa'><br>
    stan:        
        <INPUT Type='text' name='nazwa'><br>
    cena promocyjna
        <INPUT Type='text' name='nazwa'><br>

	    <br><br><INPUT type='submit' value='ZAPISZ'>
	    <A href='mysql1.php'>WROC</A>
	</FORM>
";
  
mysqli_close($id);
?>