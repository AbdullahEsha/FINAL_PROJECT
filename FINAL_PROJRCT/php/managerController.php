<?php 
	require_once('../php/session_header.php');
	require_once('../services/managerService.php');

	//checkeIn
	if(isset($_POST['checkeIn'])){
		$name 	    = $_POST['name'];
		$nid 	    = $_POST['nid'];
		$inTime     = $_POST['inTime'];
		$outTime 	= $_POST['outTime'];

		if(empty($nid) || empty($name) || empty($inTime) || empty($outTime)){
			header('location: ../views/check_in_out.php?error=null_value');
		}else{

			$checkeIn = [
				'nid'       => $nid,
				'name'      => $name,
				'inTime'    => $inTime,
				'outTime'   => $outTime
			];

			$status = insertCheckeIn($checkeIn);

			if($status){
				header('location: ../views/check_in_out.php?success=done');
			}else{
				header('location: ../views/check_in_out.php?error=db_error');
			}
		}
	}

	if(isset($_POST['updateCheckedIn'])){
		$id  = $_POST['id'];

		if(empty($id)){
			header('location: ../views/checkOut.php?id={$id}');
		}else{

			$checkeIn = [
				
				'id' => $id
			];

			$status = updateCheckedIn($checkeIn);

			if($status){
				header('location: ../views/check_in_out.php?success=done');
			}else{
				header('location: ../views/checkOut.php?id={$id}');
			}
		}
	}

	if(isset($_POST['invoice'])){
		$id = $_POST['id'];

		if(empty($id)){
			header('location: ../views/invoicePay.php?id={$id}');
		}else{

			$invoice = [
				
				'id'=> $id
			];

			$status = deleteBill($invoice);

			if($status){
				header('location: ../views/invoice.php?success=done');
			}else{
				header('location: ../views/invoicePay.php?id={$id}');
			}
		}
	}











	//Inventory
	if(isset($_POST['restoreInventory'])){
		$product 	= $_POST['product'];
		$amount 	= $_POST['amount'];
		$price      = $_POST['price'];
		$picture 	= $_POST['picture'];

		if(empty($product) || empty($amount) || empty($price) || empty($picture)){
			header('location: ../views/restoreInventory.php?error=null_value');
		}else{

			$inventory = [
				'product'   => $product,
				'amount'    => $amount,
				'price'     => $price,
				'picture'   => $picture
			];

			$status = insertInventory($inventory);

			if($status){
				header('location: ../views/inventory.php?success=done');
			}else{
				header('location: ../views/restoreInventory.php?error=db_error');
			}
		}
	}
	
		

	//update Recipe
	if(isset($_POST['editRecipe'])){
		$ingredients = $_POST['ingredients'];
		$process     = $_POST['process'];
		$itemName 	 = $_POST['itemName'];
		$picture 	 = $_POST['picture'];
		$id          = $_POST['id'];

		if(empty($ingredients) || empty($process) || empty($itemName) || empty($picture) ){
			header('location: ../views/editRecipe.php?id={$id}');
		}else{

			$recipe = [
				'ingredients'=> $ingredients,
				'process'    => $process,
				'itemName'   => $itemName,
				'picture'    => $picture,
				'id'         => $id
			];

			$status = updateRecipe($recipe);

			if($status){
				header('location: ../views/cook_book.php?success=done');
			}else{
				header('location: ../views/editRecipe.php?id={$id}');
			}
		}
	}
	
	//update Order
	

	if(isset($_POST['newRestore'])){

		$amount 	= $_POST['amount'];
		$newAmount 	= ($_POST['newAmount']+$_POST['amount']);
		$id 		= $_POST['id'];

		if(empty($newAmount) || empty($amount) || empty($id)){
			header('location: ../views/newRestore.php?id={$id}');
		}else{

			$newrestore = [
				'newAmount'=> $newAmount,
				'id'=> $id
			];

			$status = newRestoreInventory($newrestore);

			if($status){
				header('location: ../views/inventory.php?success=done');
			}else{
				header('location: ../views/newRestore.php?id={$id}');
			}
		}
	}

	if(isset($_POST['takeProduct'])){

		$amount 	= $_POST['amount'];
		$newAmount 	= ($_POST['amount']-$_POST['newAmount']);
		$id 		= $_POST['id'];

		if(empty($newAmount) || empty($amount) || empty($id)){
			header('location: ../views/takeProduct.php?id={$id}');
		}
		else{

			$newrestore = [
				'newAmount'=> $newAmount,
				'id'=> $id
			];

			$status = newRestoreInventory($newrestore);

			if($status){
				header('location: ../views/inventory.php?success=done');
			}else{
				header('location: ../views/takeProduct.php?id={$id}');
			}
		}
	}

	

	

?>