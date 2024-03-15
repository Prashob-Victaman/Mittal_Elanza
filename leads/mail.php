<style type="text/css">
	.button {
  background-color: #f5f3f3;
    border: none;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 9px;;
}
</style>
<?php

$msg ="
Name:".$_REQUEST['name']."
Email:".$_REQUEST['email']."
Moible No:".$_REQUEST['mobile']."
";


$msg = wordwrap($msg,70);

// send email
mail("atish.kumar@mittaluniversal.com","User Enquiry",$msg);
mail("arun@lighthouseindia.in","User Enquiry",$msg);

?>
<h1>Thankyou for Visting our us our Team will reach you Shortly</h1>
</br>
<a href="http://adgenext.in/mittalelanza/" class="button">Back</a>