<?php
  require_once('../php/session_header.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <table border="1px" border="1" cellpadding="5" cellspacing="0" align="center">
   <tr >
    <td colspan="2" width="900px"><h2>X-HOTEL</h2> 
      <ul align="right"> Logged in as
        <a href="staff_page.php"><?=$_SESSION['name']?></a>|
        <a href="../php/logout.php">Logout</a>
      </ul>
    </td>
  </tr>

  <tr height="300px" align="center">
  	<td>
		<ul>
			<p><a href="staffwork_schedule.php"> Work Schedule </a></p>
      <p><a href="room_service.php"> Room-Service List </a></p>
      <p><a href="staff_salary.php"> Salary </a> </p>
      <p><a href="staff_feedback.php"> Feedback </a></p>
		</ul>
	</td>
    
  </tr>
	<tr>
		<td colspan="2" align="center">copyright@2017</td>
	</tr>
</table>

</body>
</html>