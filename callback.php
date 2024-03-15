
<?php

$EmailFrom = "Mittal Elanza";
$EmailTo = "elanza@mittaluniversal.com"; /**/
$Subject = "Mittal Elanza Website: Get An Instant Callback";

$name = Trim(stripslashes($_POST['name'])); 
$phone = Trim(stripslashes($_POST['phone'])); 
$email = Trim(stripslashes($_POST['email'])); 
$message = Trim(stripslashes($_POST['message'])); 

//prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name; 
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $phone; 
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email; 
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";


$headers = "From: $name <$email>\r\n"; 
$headers .= "Bcc: leads@magikboxmedia.in \r\n"; //


if(empty($name) || empty($phone) || empty($email))
{
    echo "You did not fill out the required fields.";
}
else {
  // send email 
	$success = mail($EmailTo,$Subject,$Body,$headers);
}

// redirect to success page
// CHANGE THE URL BELOW TO YOUR "THANK YOU" PAGE
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=http://mittalelanza.com/thank-you.html\">";
  // echo "<div>Congrats,Your Query Posted sucessfully. Thanks.</div>"; 
}
else
{
    echo '<br><div class="info">Sorry,We are not able to process your query.</div><br>';
}
        
?>


