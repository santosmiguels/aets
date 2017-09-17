<?php
  //if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
	  
	  //Email information
	  $admin_email = "ipox@live.com";
	  $email = $_REQUEST['email'];
	  $subject = $_REQUEST['subject'];
	  $comment = $_REQUEST['message'];
	  
	  //send email
	  mail($email, "$subject", $comment, "De: " . $admin_email);
	  
	  //Email response
	  echo "Obrigado!";
  } else  {
	  echo "Favor informar e-mail.";
  }
?>
