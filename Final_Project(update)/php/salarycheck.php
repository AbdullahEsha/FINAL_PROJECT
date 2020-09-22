<?php
    require_once('../php/session_header.php');
	require_once("../service/userService.php");
	if(isset($_POST['get'])){
		$id = $_SESSION['id'];
		$salary = getAllSalary($id);

		echo printAll($salary);	
	}

	function printAll($getList){
		$doc = "";
		foreach ($getList as $salary) {
			$doc .= "<tr align='center'>".
					    "<td>{$salary['date']}</td>".
					    "<td>{$salary['salary']}</td>".
					    "<td>{$salary['bonus']}</td>".
					     "<td>{$salary['totalSalary']}</td>".
					"</tr>";
		}
		return $doc;
	}
?>