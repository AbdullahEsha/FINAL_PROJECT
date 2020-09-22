<?php
	require_once("../services/managerService.php");
	if(isset($_POST['get'])){

		$getALL = getAllParking();

		echo printAll($getALL);	
	}

	function printAll($getList){
		$doc = "";
		foreach ($getList as $parking) {
			$doc .= "<tr>".
            "<td>{$parking['id']}</td>".
            "<td>{$parking['checkIntime']}</td>".
            "<td>{$parking['customerName']}</td>".
            "<td>{$parking['customer_id']}</td>".
            "<td>{$parking['status']}</td>".
            "<td>".
                "<a href='accept_parking.php?id={$parking['customer_id']}'>Accept</a> |".
                "<a href='hold_parking.php?id={$parking['customer_id']}'>Hold</a> |".
                "<a href='reject_parking.php?id={$parking['customer_id']}'>Reject</a>".
            "</td>".
        "</tr>";
		}
		return $doc;
	}
?>