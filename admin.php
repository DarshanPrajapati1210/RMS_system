<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="login.css">
	<title>Login Page</title>

    <script>
        function myFunction() {
        var x = document.getElementById("mypass");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        }

		window.addEventListener( "pageshow", function ( event ) {
		var historyTraversal = event.persisted || 
								( typeof window.performance != "undefined" && 
									window.performance.navigation.type === 2 );
		if ( historyTraversal ) {
			// Handle page restore.
			window.location.reload();
 	 	}
		  
		history.pushState(null, null, document.URL);
				window.addEventListener('popstate', function () {
					history.pushState(null, null, document.URL);
				});
		});

</script>


<style>
	body{
		margin: 0;
		padding: 0;


	}
	.login-box{
		margin: 0 auto;
		box-sizing: border-box;
	
	}
</style>

</head>

<body>
	
	

	<form action="validate.php" method="post" >
		<div class="login-box">
			<h1>Login</h1>

			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="email" placeholder="E-mail" name="email" value="" required>
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input id="mypass" type="password" placeholder="Password" name="emp_pass" value="" required>
			</div><input type="checkbox" onclick="myFunction()"> Show Password

			<button class="button" type="submit" name="login" value="Sign In">Sign-in</button>
		</div>
	</form>
	
</body>

</html>
