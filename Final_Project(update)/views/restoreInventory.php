<?php
  require_once('../php/session_header.php');
  if (isset($_GET['error'])) {
    
    if($_GET['error'] == 'db_error'){
      echo "Something went wrong...please try again";
    }
  }

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <table border="1px" border="1" cellpadding="5" cellspacing="0" align="center">
 <tr >
    <td colspan="2" width="900px"><h2>Xcompany</h2> 
      <ul align="right"> Logged in as
        <a href="chef_page.php"><?=$_SESSION['name']?></a>|
        <a href="../php/logout.php">Logout</a>
      </ul>
    </td>
  </tr>

  <tr height="300px">
  	<td>
		<ul>
			<p><a href="my_recipe.php"> My Recipe </a></p>
      <p><a href="cook_book.php"> Cook-Book </a> </p>
      <p><a href="chef_order.php">Food Orders</a>
      <p><a href="inventory.php"> Inventory </a></p>
      <p><a href="chefwork_schedule.php">Chef Work-Schedule </a></p>
      <p><a href="chef_salary.php">Chef Salary </a> </p>
      <p><a href="chef_feedback.php">Chef Feedback </a></p>
		</ul>
	</td>
	<td width="60%">
    <fieldset>
      <legend>INVENTORY</legend>
    	<form action="../php/userController.php" method="post">
    		<table width="100%">
           <tr>
             <td>Product Name</td>
             <td><input type="text" name="product" size="40%"></td>
             <td rowspan="4">
              <img src="final2.jpg" height="100px" width="120px">
             </td>
           </tr>
           <tr>
             <td>Amount in Unit</td>
             <td><input type="text" name="amount" size="40%"></td>
           </tr>
           <tr>
             <td>Price</td>
             <td><input type="text" name="price" size="40%"></td>
           </tr>
           <tr>
             <td>Picture</td>
             <td><input type="file" name="picture" size="40%"></td>
           </tr>
           <tr>
            <td colspan="3">
             <hr>
           </td>
           </tr>
           <tr>
             <td colspan="3" align="right">
               <input type="submit" name="restoreInventory" value="Restore">
             </td>
           </tr>
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