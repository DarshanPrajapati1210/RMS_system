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
        $status = $_REQUEST['status'];

		$sql = "INSERT INTO candi_status VALUES ('$id','$first_name','$last_name','$myemail','$status')";
		
		if(mysqli_query($conn, $sql)){
			// echo "<h3>CONGRATULATIONS!! YOUR DATA HAS BEEN SUBMITTED</h3>";
            
			header("Location: retrieve.php");

			// echo nl2br("\n$id\n $first_name\n $last_name\n  $myemail\n $status\n");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>


</body>

</html>
