<html>
<body>
<?php 
if(isset($_POST["submit"])){
	
    $to = "aman.pal8445@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
	$phone=$_POST['phone'];
	$message=$_POST['message'];
    $subject = "Information for the contact us";
    $subject2 = "Cofirmation Messaage  ";
    $message = "Name: " . "". $name."\n\n".
				"Email: " . "". $from."\n\n".
				"Phone: " . "". $phone."\n\n".
				"Message: " . "". $message."\n\n";
    $message2 = "your Information Has Been Recieved To Us We Will Contact You Shortly" ."\n\n".
				"Name: " . "". $name."\n\n";
				

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
	$me =  "Your Information Has Been Received By Us, Thank you " . $name.", We Will Contact You Shortly....!!!";
echo "<script type='text/javascript'>alert('$me');</script>";
    }
?>
</body>
</html>