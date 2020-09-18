<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<style>
		body {
		background-image: url(final4.jpg);
		background-repeat: no-repeat;
        background-size: 125%;	    
        }

        ul {
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            opacity: 0.8;
        }
        form{
        	float: center;
        }
        
        li {
          float: left;
        }
        
        li a {
          display: block;
          color: white;
          text-align: center;
          padding: 15px 30px;
          text-decoration: none;
        }
        #A{
        	float: right;
        }
        #D{
        	background-color: antiquewhite; 
        	position: absolute;
            margin-top: 35%;
            margin-left: 55%;
            border: 1px solid;
            padding: 10px;
            box-shadow: 5px 10px #888888;
            opacity: 0.8;
        }
        
        .active {
          background-color: #4CAF50;
        }	
	</style>
</head>
<body>
	<ul>
        <li><a href="../index.php">Home</a></li>
        <li style="float:right"><a class="active" href="login.php">Login</a></li>
        <li style="float:right"><a class="active" href="register.php">SignUp</a></li>
    </ul>

	<form action="../php/regCheck.php" method="post">
		<div id="D" style="box-shadow: ">
			User Name
			<br>
		    <input type="text" name="username" size="60%">
		    <br>	
			Password<br>
			<input type="password" name="password" size="60%">
			<br>
			Email<br>
			<input type="text" name="email" size="60%">
			<br>
			<hr>
		    <input type="submit" name="submit" value="Confirm">     <a id="A" href="../index.php">HOME</a>
		</div>	
	</form>
</body>
</html>