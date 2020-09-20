<?php
	require_once("../service/userService.php");
	if(isset($_POST['get'])){
		$room = getAllRoomService();

		echo printAll($room);	
	}

	function printAll($getList){
		$doc = "";
		foreach ($getList as $service) {
			$doc .= "<tr align='center'>".
					    "<td>{$service['id']}</td>".
					    "<td>{$service['roomNumber']}</td>".
					    "<td>{$service['service']}</td>".
					    "<td>".
					        "<a href='acceptRoomSurvice.php?id={$service['id']}'>Accept</a>".
					    "</td>".
					"</tr>";
		}
		return $doc;
	}
?>