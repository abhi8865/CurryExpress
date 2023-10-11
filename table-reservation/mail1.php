<html>
<body>

<?php 
if(isset($_POST["submit"])){
	
    $to = "aman.pal8445@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
	$phone=$_POST['phone'];
	$member=$_POST['member'];
	$msg_to_amber=$_POST['msg_to_amber'];
    $subject = "Online Table Reservation Request From Client";
    $subject2 = "Cofirmation For Your Table Reservation Request";
    $message = "Name: " . "". $first_name . " " . $last_name ."\n\n".
				"Email: " . "". $from."\n\n".
				"Phone: " . "". $phone."\n\n".
				"Number Of Member: " . "". $member."\n\n".
				"Message to Curry Express Rockwall: " . "". $msg_to_amber."\n\n";
    $message2 = "Your Table Reservation Request Has Been Received :-" ."\n\n".
				"Name: " . "". $first_name . " " . $last_name ."\n\n".
				"Number of member: " . "". $member."\n\n".
				

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
$me =  "Your Request Has Been Received For Table Reservation,Thank you " . $first_name ." ".$last_name."".", We Will Contact You Shortly.....!!!";
echo "<script type='text/javascript'>alert('$me');</script>";

    }

?>
</body>
</html>