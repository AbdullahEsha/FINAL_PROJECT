<?php
	require_once('../db/db.php');


	function validate($user){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from users where email='{$user['email']}' and password='{$user['password']}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		if(count($user) > 0 ){
			return $user;
		}else{
			return $user;
		}
	}

	function insert($user){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "INSERT INTO `users` VALUES ('','{$user['name']}','{$user['password']}','{$user['email']}','{$user['userType']}','{$user['phone']}','{$user['picture']}','{$user['dob']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function insertCheckeIn($checkeIn){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "INSERT INTO `check_in_out` VALUES ('','{$checkeIn['name']}','{$checkeIn['nid']}','{$checkeIn['inTime']}','{$checkeIn['outTime']}','Checked In')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllInvoice($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "SELECT * FROM customer_bill WHERE customer_Id ='$id'";
		$result = mysqli_query($conn, $sql);
		$invoice = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($invoice, $row);
		}

		return $invoice;
	}

	
	function getCountByInvoiceID($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "SELECT `bill` FROM `customer_bill` WHERE customer_Id = '$id'";
		$result = mysqli_query($conn, $sql);
		$total = 0;
	    while($row = mysqli_fetch_assoc($result)){
	        $total += $row['bill'];
	    }
	    return $total;
	}


	function getAllBooking(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "SELECT * FROM bookings WHERE status ='requested'";
		$result = mysqli_query($conn, $sql);
		$booking = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($booking, $row);
		}

		return $booking;
	}

	function getAllCustomerOrder(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "SELECT * FROM customer_order";
		$result = mysqli_query($conn, $sql);
		$order = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($order, $row);
		}

		return $order;
	}


	function getAllParking(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "SELECT * FROM car_parking";
		$result = mysqli_query($conn, $sql);
		$parking = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($parking, $row);
		}

		return $parking;
	}



	function getAllReservation(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "SELECT * FROM car_reservation";
		$result = mysqli_query($conn, $sql);
		$reservation = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($reservation, $row);
		}

		return $reservation;
	}


	function getAllcomplain(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "SELECT * FROM complains";
		$result = mysqli_query($conn, $sql);
		$complain = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($complain, $row);
		}

		return $complain;
	}

	function getAllempDetail($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "SELECT * FROM employee_details WHERE user_id = '$id'";
		$result = mysqli_query($conn, $sql);
		$detail = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($detail, $row);
		}

		return $detail;
	}


	function getAllfeedback(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "SELECT * FROM empfeedback";
		$result = mysqli_query($conn, $sql);
		$feedback = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($feedback, $row);
		}

		return $feedback;
	}



	function getAllBookingExtend(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "SELECT * FROM booking_request WHERE status ='Requsested'";
		$result = mysqli_query($conn, $sql);
		$bookingExtend = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($bookingExtend, $row);
		}

		return $bookingExtend;
	}


	function getAllCheckIn($search){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "SELECT * FROM `check_in_out` WHERE name LIKE '%$search%'";
		$result = mysqli_query($conn, $sql);
		$checkIn = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($checkIn, $row);
		}

		return $checkIn;
	}


	function getCheckInByID($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from check_in_out where id={$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}


	function updateCheckedIn($checkedIn){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}
		$sql = "UPDATE check_in_out SET status ='Checked out' WHERE id={$checkedIn['id']}";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}



	function deleteBill($invoice){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "DELETE FROM customer_bill WHERE id='{$invoice['id']}'";
		echo $sql;
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


	






























	

	