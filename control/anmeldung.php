<?php 
  session_start();
    $_SESSION['benutzer'] = $_REQUEST['benutzer'];
    $_SESSION['password'] = $_REQUEST['password'];

// Prüfe Inhalt von Eingabe  
    if ((strlen($_SESSION['benutzer'])>0)and (strlen($_SESSION['password'])>0))
    {
    	header("Location: ../index.php");
    }
    else
    {
    	$html_Output = "<html><head><title>Anmeldung</title></head>";
    	$html_Output .= "<body>";
    	$html_Output .= "Hallo, die Anmeldung war nicht erfolgreich.";
    	$html_Output .= "</body></html>";    	
    }


	echo $html_Output;
?>




