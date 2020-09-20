<?php
  require_once('../php/session_header.php');
  require_once('../service/userservice.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script type="text/javascript" src="../asset/workSchedule.js"></script>
</head>
<body onload="scheduleData();">
  <table border="1px" border="1" cellpadding="5" cellspacing="0" align="center">
    <tr >
    <td colspan="2" width="900px"><h2>X-HOTEL</h2> 
      <ul align="right"> Logged in as
        <a href="staff_page.php"><?=$_SESSION['name']?></a>|
        <a href="../php/logout.php">Logout</a>
      </ul>
    </td>
  </tr>

  <tr height="300px">
  	<td>
		<ul>
			<p><a href="staffwork_schedule.php">Staff Work Schedule </a></p>
      <p><a href="room_service.php"> Room-Service List </a></p>
      <p><a href="staff_salary.php">Staff Salary </a> </p>
      <p><a href="staff_feedback.php"> Feedback </a></p>
		</ul>
	</td>
	<td width="60%">
    <fieldset>
      <legend>My Schedule</legend>
    	<form>
    		<table border="1" cellspacing="0" cellpadding="5" width="95%">
           <tr>
              <td>Id</td>
              <td>Date</td>
              <td>Start Time</td>
              <td>End Time</td>
              <td>Working Hour</td>
          </tr>
           <tbody id="schedule">
             
           </tbody>
        </table>      
    	</form>
    </fieldset>
	</td>
	<tr>
		<td colspan="2" align="center">copyright@2017</td>
	</tr>
</table>
</body>
</html>