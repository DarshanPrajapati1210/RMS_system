<?php

include_once('adminconn.php');

function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"]== "POST") {
	
	$email = test_input($_POST["email"]);
	$emp_pass = test_input($_POST["emp_pass"]);
	$stmt = $conn->prepare("SELECT * FROM intw_auth WHERE email='$email' AND emp_pass='$emp_pass' " );
	$stmt->execute();
	$users = $stmt->fetchAll();
	
	foreach($users as $user) {
		
		if(($user['email'] == $email) &&
			($user['emp_pass'] == $emp_pass)) {
				header("Location: retrieve.php");
		}
		else {
			echo "<script language='javascript'>";
			echo "alert('WRONG INFORMATION')";
			echo "</script>";
			die();
		}
	}
}

?>
