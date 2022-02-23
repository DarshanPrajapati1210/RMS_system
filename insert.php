<!DOCTYPE html>
<html>

<head>
	<title>Insert Page </title>
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
		$mymobile = $_REQUEST['mymobile'];
		$mygender = $_REQUEST['mygender'];
        $mydob = $_REQUEST['mydob'];
        $myaddress = $_REQUEST['myaddress'];
        $mycity = $_REQUEST['mycity'];
        $mypin = $_REQUEST['mypin'];
        $mystate = $_REQUEST['mystate'];
        $myqualification = $_REQUEST['myqualification'];
        $mysalary = $_REQUEST['mysalary'];
		
		
		$sql = "INSERT INTO candi_info VALUES ('$id','$first_name',
			'$last_name','$myemail','$mymobile','$mygender','$mydob','$myaddress','$mycity','$mypin','$mystate','$myqualification','$mysalary')";
		
		if(mysqli_query($conn, $sql)){
			// echo "<h3>CONGRATULATIONS!! YOUR DATA HAS BEEN SUBMITTED</h3>";
            
			header("Location: cData.php");

			// echo nl2br("\n$id\n $first_name\n $last_name\n  $myemail\n $mymobile\n $mygender\n $mydob\n $myaddress\n $mycity\n $mypin\n $mystate\n $myqualification\n $mysalary\n ");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>


</body>

</html>
