
<FORM ACTION="http://www.highwaydriverleasing.com/thanks-driver.htm" METHOD="post" NAME="frm">
<?


$message = "Highway Driver & Leasing Submission :- \n\n";
$message = $message."Name  		: ".$_POST['Name']."\n";
$message = $message."Address  		: ".$_POST['Address']."\n";
$message = $message."City  		: ".$_POST['City']."\n";
$message = $message."State  		: ".$_POST['State']."\n";
$message = $message."Zip  		: ".$_POST['Zip']."\n";
$message = $message."Phone  		: ".$_POST['Phone']."\n";
$message = $message."Email  		: ".$_POST['Email']."\n";
$message = $message."CDL A or B  		: ".$_POST['cdl']."\n";
$message = $message."Expiration date of medical card  		: ".$_POST['exp']."\n";
$message = $message."# of years CDL driving experience  		: ".$_POST['experience']."\n";
$message = $message."Accidents, DWI's or suspensions in the last five years?  		: ".$_POST['accidents']."\n";
$message = $message."Availability - F/T, P/T, Placement  		: ".$_POST['availability']."\n";
$message = $message."Comments/Questions  		: ".$_POST['Comments']."\n";



	$headers .= "From: <highwaydriverleasing.com>\r\n"; 				
        $subject ="Highway Driver & Leasing Submission "; 
		

		    $ok=mail("info@highwaydriverleasing.com",$subject,$message,$headers);
			//$ok=mail("mike@multisoltech.com",$subject,$message,$headers);
  		   
?>
</FORM> 
<SCRIPT language="JavaScript">
	    document.frm.submit();
		window.location.href = "http://www.highwaydriverleasing.com/thanks-driver.htm"
</SCRIPT>     
                            
                        