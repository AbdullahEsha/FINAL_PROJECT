<!DOCTYPE html>
<html>
<head>
<style>
  *{
    margin: 0;
    padding: 0;
  }
	body {
		background-image: url(final1.jpg);
		background-repeat: no-repeat;
    background-size: 125%;
    opacity: 0.8;
	}

    ul {
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
    }
    
    li {
      float: left;
    }
    
    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 15px 30px;
      text-decoration: none;
    }
    
    .active {
      background-color: #4CAF50;
    }
    a:hover{
      background-color: green;
    }
</style>
</head>
<body>

<table width="100%">
  <tr>
    <td colspan="2">
      <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li style="float:right"><a class="active" href="views/login.php">Login</a></li>
        <li style="float:right"><a class="active" href="views/register.php">SignUp</a></li>
      </ul>
    </td>
  </tr>
  <tr>
    <td height="837px">
      
    </td>
    <td>
      
    </td>
  </tr>
  <tr style="background-color: white;">
    <td colspan="2" align="center">copyright@2017</td>
  </tr>
</table>

</body>
</html>