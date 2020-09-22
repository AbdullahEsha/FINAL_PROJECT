<?php
	require_once("../services/managerService.php");
	if(isset($_POST['get'])){

		$getALL = getAllReservation();

		echo printAll($getALL);	
	}
	function printAll($getList){
		$doc = "";
		foreach ($getList as $reservation) {
			$doc .= "<tr>".
            "<td>{$reservation['id']}</td>".
            "<td>{$reservation['reservationDate']}</td>".
            "<td>{$reservation['nid']}</td>".
            "<td>{$reservation['customer_id']}</td>".
            "<td>{$reservation['status']}</td>".
            "<td>".
                "<a href='reservationAccept.php?id={$reservation['customer_id']}'>Accept</a> |".
                "<a href='reservationReject.php?id={$reservation['customer_id']}'>Reject</a>".
            "</td>".
        "</tr>";
		}
		return $doc;
	}
?>
