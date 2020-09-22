<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'null_value'){
			echo "email/Password field can't left empty...";
		}

		if($_GET['error'] == 'invalid_user'){
			echo "Invalid email or Password";
		}

		if($_GET['error'] == 'invalid_request'){
			echo "You have to login first...";
		}

	}else if(isset($_GET['success'])){
		
		if($_GET['success'] == 'registration_done'){
			echo "Registration Done! Now you can login...";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<form action="../php/logCheck.php" method="post">
		<fieldset>
			<legend>SignIn</legend>
			<table>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Login"><a href="../index.php">HOME</a></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>