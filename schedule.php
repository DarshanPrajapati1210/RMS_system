<!DOCTYPE html>
<html>

<head>
	<title>Insert Status </title>
</head>


<body>

		<?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "hrlogin";
		$conn = mysqli_connect("localhost", "root", "", "hrlogin");

		if(isset($_POST['submit'])){
			$to = $_POST['myemail']; // this is your Email address
			$from = "1210.drp@gmail.com"; // this is the sender's Email address
			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
			$subject = "Form submission";
			$subject2 = "Copy of your form submission";
			$message = $first_name . " " . $last_name . "" . $inter_name . " " . $Date . " " . $note . " wrote the following:" . "\n\n" . $_POST['message'];
			$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];
		
			$headers = "From:" . $from;
			$headers2 = "From:" . $to;
			mail($to,$subject,$message,$headers);
			mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
			echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
			// You can also use header('Location: thank_you.php'); to redirect to another page.
			}


		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all values from the form data(input)
		$id = $_REQUEST['id'];
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$myemail = $_REQUEST['myemail'];
        $inter_name = $_REQUEST['inter_name'];
        $Date = $_REQUEST['Date'];
        $note = $_REQUEST['note'];

		$sql = "INSERT INTO schedule VALUES ('$id','$first_name','$last_name','$myemail','$inter_name',
        '$Date','$note')";
		
		if(mysqli_query($conn, $sql)){
			// echo "<h3>CONGRATULATIONS!! YOUR DATA HAS BEEN SUBMITTED</h3>";
            
			header("Location: cData.php");

			// echo nl2br("\n$id\n $first_name\n $last_name\n  $myemail\n $inter_name\n $Date\n $note\n  ");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>


</body>

</html>
