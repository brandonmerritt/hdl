
<FORM ACTION="http://www.highwaydriverleasing.com/thanks-company.htm" METHOD="post" NAME="frm">
<?

$message = "REQUEST A DRIVER OR FURTHER INFORMATION:- \n\n";
$message = $message."Contact Name  			: ".$_POST['Name']."\n";
$message = $message."Company Name  			: ".$_POST['Company']."\n";
$message = $message."Phone Number  			: ".$_POST['Phone']."\n";
$message = $message."Best Time  			: ".$_POST['Time']."\n";
$message = $message."Email Address  			: ".$_POST['Email']."\n";



	$headers .= "From: <wmacpherson@highwaydriverleasing.com>\r\n"; 				
        $subject ="REQUEST A DRIVER OR FURTHER INFORMATION"; 
		

		    $ok=mail("wmacpherson@highwaydriverleasing.com",$subject,$message,$headers);
			//$ok=mail("webmaster@multisoltech.com",$subject,$message,$headers);

  		   
?>
</FORM> 
<SCRIPT language="JavaScript">
	    document.frm.submit();
		window.location.href = "http://www.highwaydriverleasing.com/thanks-company.htm"
</SCRIPT>     
                            
                        