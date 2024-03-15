

<?php
include('./config.php');
// error_reporting(E_ALL);

//include('sendgrid.php');



//$pname = $_POST['name'];

//$name = $_POST['name'];
if(isset($_POST['submit'])){
    
$name = $_POST['name'];

$tel = $_POST['mobile'];
$email = $_POST['email'];

//echo "insert into email_details(name,designation,organisation,organisation-url,people,email,startup) values ('$name','$desg','$com','$url','$ppl','$tel','$email','$start')";exit;
//print_r($_POST);exit;

//$from = 'Sriramaanilaya';
 //$subject = 'Sriramaanilaya Wesbite Leads';
//    mysql_query("insert into order(proname,name,email,qty,ordernotes,status)values('$pname','$name','$email','$qty','$msg','$status')")
//            or die('unable to insert' . mysql_error());
 
 $sql="INSERT INTO eq (name, email, mobile) VALUES ('$name','$email', '$tel')";
 if (mysqli_query($conn, $sql)) {
   echo ("<script>
    window.alert('Thank You for registering')
    window.location.href='http://mittalelanza.com/leads';
    </script>");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->close();
 

 
}
else{
    
    echo ("<script>
    window.alert('Please enter your Fields!')

    window.location.href='http://mittalelanza.com/leads';
    </script>");
}
           
//print_r($_POST);exit;
//$to = 'sriramaanilaya@gmail.com';
//$to = 'swamiprasad827@gmail.com';
//$mail_body = "Name : $name | Email : $email | Mobile : $tel | Message : $msg ";


//$headers = 'MIME-Version: 1.0' . "\r\n";
//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//$headers .= '<From: swamiprasad827@gmail.com>' . "\r\n";
//$headers .= "Cc:swamiprasad827@gmail.com \r\n";

//$sent = mail($to, $subject, $mail_body, $headers);

?>