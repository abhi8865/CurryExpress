<html>
<body>
<?php 
if(isset($_POST["submit"])){
    $to = "aman.pal8445@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
	$phone=$_POST['phone'];
	$company=$_POST['company'];
	$event_details=$_POST['event_details'];
	$date=$_POST['date'];
	$start_time=$_POST['start_time'];
	$end_time=$_POST['end_time'];
	$guests=$_POST['guests'];
	$msg_to_amber=$_POST['msg_to_amber'];
    $subject = "Online Group Dining Request From Client";
    $subject2 = "Cofirmation For Group Dining Request";
    $message = "Name: " . "". $first_name . " " . $last_name ."\n\n".
				"Email: " . "". $from."\n\n".
				"Phone: " . "". $phone."\n\n".
				 "Company Name: "."".$company."\n\n".
				 "Occasion: "."".$event_details."\n\n".
				 "Date of Event: "."".$date."\n\n".
				 "Starting Time of Event: "."".$start_time."\n\n".
				 "Closing Time of Event: "."".$end_time."\n\n".
				"Number Of Guests: " . "". $guests."\n\n".
				"Message to Curry Express Rockwall: " . "". $msg_to_amber."\n\n";
    $message2 = "Your Request For Group Dining Has Been Recived :-" ."\n\n".
				"Name: " . "". $first_name . " " . $last_name ."\n\n".
	             "Company Name: "."".$company."\n\n".
				 "Occasion: "."".$event_details."\n\n".
				 "Date of Event: "."".$date."\n\n".
				 "Starting Time of Event: "."".$start_time."\n\n".
				 "Closing Time of Event: "."".$end_time."\n\n".
				"Number Of Guests: " . "". $guests."\n\n";
				
				

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
$me =  "Your Group Dining Request Has Been Received, Thank you " . $first_name ." ".$last_name."".", We Will Contact You Shortly....!!!!";
echo "<script type='text/javascript'>alert('$me');</script>";
}
?>
</body>
</html>