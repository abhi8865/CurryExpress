<html>
<body>
<?php 
if(isset($_POST["submit"])){
	
    $to = "aman.pal8445@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
	$phone=$_POST['phone'];
	$event_details=$_POST['event_details'];
	$msg_to_amber=$_POST['msg_to_amber'];
    $subject = "Online Order From Client";
    $subject2 = "Cofirmation For Your Order";
    $message = "Name: " . "". $first_name . " " . $last_name ."\n\n".
				"Email: " . "". $from."\n\n".
				"Phone: " . "". $phone."\n\n".
				"Event Details: " . "". $event_details."\n\n".
				"Message to Curry Express Rockwall: " . "". $msg_to_amber."\n\n";
    $message2 = "Your Order Is In Queue :-" ."\n\n".
				"Name: " . "". $first_name . " " . $last_name ."\n\n".
				"Event Details: " . "". $event_details."\n\n".
				

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
	$me =  "Your Order Received ,Thank you " . $first_name ." ".$last_name.""." We Will Contact You Shortly....!!!!";
echo "<script type='text/javascript'>alert('$me');</script>";
    }
?>
</body>
</html>