<?php

// Get the user id
$id = $_REQUEST['id'];

// Database connection
$con = mysqli_connect("localhost", "root", "", "hrlogin");

if ($id !== "") {
	
	// Get corresponding first name and
	// last name for that user id	
	$query = mysqli_query($con, "SELECT first_name, last_name, myemail FROM candi_info WHERE id='$id'");

	$row = mysqli_fetch_array($query);

	// Get the first name
	$first_name = $row["first_name"];

	// Get the first name
	$last_name = $row["last_name"];

    $myemail = $row["myemail"];
}

// Store it in a array
$result = array("$first_name", "$last_name", "$myemail");

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>
