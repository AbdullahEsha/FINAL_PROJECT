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
		<form action="../php/userController.php" method="post">
            <fieldset>
                <legend>My Recipe</legend>
            		<section align="center">
            			<img src="<?= $pic ?>"  align="center" height="128px" width="128px">
            			<p><input type="file" name="picture"></p>

            		<hr/>
                <input type="text" name="itemName" size="70%" placeholder="Item Name...">
                <hr>
            		<textarea rows="5" cols="50" name="ingredient" placeholder="Ingredients..."></textarea>
            		<hr/>
            		<textarea rows="5" cols="100" name="process" placeholder="Process..."></textarea>
            		<hr/>
                <input type="hidden" name="chefId" value="<?=$_COOKIE['id']?>">
            		<div align="right">
            			<input type="submit" name="myRecipe" value="DONE">
            		</div>
            		</section>
            </fieldset>
        </form>
	</td>
	<tr>
		<td colspan="2" align="center">copyright@2017</td>
	</tr>
</table>
</body>
</html>