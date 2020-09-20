<?php
  if (isset($_GET['error'])) {
    
    if($_GET['error'] == 'db_error'){
      echo "Something went wrong...please try again";
    }
  }


// function Name()
// {
//     $error = "";
//     $name = "";

//     if (isset($_GET['name'])) 
//     {
//         $name=$_GET['name'];
//         if (empty($name)) 
//         {
//             $error = "Invalid";
//         }
//         else 
//         {
//             $name =$_GET["name"] ;
    
//             if (!preg_match("/^[a-zA-Z ]*$/",$name ) )
//             {
//                 $error = "Invalid";
//             }
//             if (strlen($name) < 2)
//             {
//                 $error = "Invalid";
//             }
//         }
//     }
//     if($error == "")
//         echo $name;
//     else
//         echo "Invalid";

// }


// function Email()
// {
//     // cannot be empty
//     if(isset($_GET['email']))
//     {
//         $email=$_GET['email'];
//         //must be valid
//         if($email=="")
//         {
//             echo "Invalid Email";
//         }
//         else
//         {
            
//         }
//     }
// }

// function Phone()
// {
//     // cannot be empty
//     if(isset($_GET['phone']))
//     {
//         $phone=$_GET['phone'];
//         //must be valid
//         if($phone=="")
//         {
//             echo "Invalid phone";
//         }
//         else
//         {
            
//         }
//     }
// }

// function Password()
// {
//     // cannot be empty
//     if(isset($_GET['password']))
//     {
//         $password=$_GET['password'];
//         //must be valid
//         if($password=="")
//         {
//             echo "Invalid password";
//         }
//         else
//         {
            
//         }
//     }
// }

// function ConfirmPassword()
// {
//     // cannot be empty
//     if(isset($_GET['confirmPassword']))
//     {
//         $pass=$_GET['password'];
//         $conpass=$GET['confirmPassword']
//         //must be valid
//         if($pass!=$conpass)
//         {
//             echo "Invalid confirm password";
//         }
//         else
//         {
            
//         }
//     }
// }


// function DateOfBirth()
// {
//     $error="";
//     $day="";
//     $month="";
//     $year="";

//     if(isset($_GET['sdate']))
//     {
//         $day=(int)$_GET['sdate'];
//         if($day>0 and $day<=31)
//         {
            
//         }
//         else
//         {
//             $error="Invalid";
//         }
        
//     }
//     if(isset($_GET['smonth']))
//     {
//         $month=(int)$_GET['smonth'];
//         if($month>0 and $month<=12)
//         {
            
//         }
//         else
//         {
//             $error="Invalid";
//         }
//     }
//     if(isset($_GET['syear']))
//     {
//         $year=(int)$_GET['syear'];
//         if($year>=1900 and $year<=2016)
//         {
            
//         }
//         else
//         {
//             $error="Invalid";
//         }
//     }
    


//     if($error == "")
//     {
//         /*echo $day."<br>";
//         echo $month."<br>";
//         echo $year."<br>";*/
//     }
//     else
//     {
//         echo "Invalid";
//     }
// }

// function BloodGroup()
// {
//     if(isset($_GET['blood_group']))
//         {
//             echo $_GET['blood_group'];
//         }
// }

// function Degree()
// {
//     if(isset($_GET['ssc']) || isset($_GET['hsc'])|| isset($_GET['bsc']) || isset($_GET['msc']))
//         {
//             if(isset($_GET['ssc']))
//             {
//                 echo $_GET['ssc'];
//             }
//             if(isset($_GET['hsc']))
//             {
//                 echo $_GET['hsc'];
//             }
//             if(isset($_GET['bsc']))
//             {
//                 echo $_GET['bsc'];
//             }
//             if(isset($_GET['msc']))
//             {
//                 echo $_GET['msc'];
//             }
//         }
//         else
//         {
//             if(isset($_GET['Submit']))
//             {
//                 echo " At least choose one";
//             }
//         }
// }

// function Profile()
// {
// $flag=true;
// /*if(isset($_GET['sid']))
// {
//     $a=(int)($_GET['sid']);
//     if ($a<1) 
//     {
//         $flag=false;
//     }
// }*/
// if (isset($_GET['picture'])) 
// {
//     $a=$_GET['picture'];
//     if(empty($a)) 
//     {
//         $flag=false;
//     }
// }

// /*if(isset($_GET['Submit']))
// {
//     if ($flag==false) 
// {
//     echo "invalid";
// }
// else
// {
//     echo "Successful";
// }
// }*/
// }

?>



<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="../asset/register.js"></script>
</head>
<body>
 <table border="1px" cellpadding="5" cellspacing="0" align="center" width="100%" height="100%">
  <tr>
    <td width="800px"><h1>X HOTEL</h1>
      <h2 align="right">
        <a href="../index.php">Home</a> ||
        <a href="login.php">Login</a> ||
        <a href="register.php">Registration</a> ||
        <a href="cv_page.php"> Apply For CV</a>
      </h2>
    </td>
  </tr>

  <tr height="500px">
    <td>
        <fieldset>
    <legend><b>REGISTRATION</b></legend>
    <form action="../php/regCheck.php" method="POST" onsubmit="return validate()">
        <br/>
        <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input id="name" name="name" type="text" onkeyup="removerName()"></td>
                <td id="nmsg"></td>
            </tr>       

            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>User Type</td>
                <td>:</td>
                <td>
                    <select id="userType" name="userType">
                        <option>select one</option>
                        <option>Chef</option>
                        <option>Staff</option>
                    </select>
                <td></td>
            </tr>

            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                    <input id="email" name="email" type="text" onkeyup="f2()">
                    <abbr title="hint: sample@example.com"><b>i</b></abbr>
                </td>
                <td id="emailmsg"></td>
            </tr>

            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Phone</td>
                <td>:</td>
                <td>
                    <input id="phone" name="phone" type="text">
                </td>
                <td id="pmsg"></td>
            </tr>         
                
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input id="password" name="password" type="password"></td>
                <td></td>
            </tr>       
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Confirm Password</td>
                <td>:</td>
                <td><input id="confirmPassword" name="confirmPassword" type="password"></td>
                <td></td>
            </tr>       
            <tr><td colspan="4"><hr/></td></tr>
<!--             <tr>
                <td colspan="3">
                    <fieldset>
                        <legend>Gender</legend>    
                        <input name="gender" type="radio" value="Male">Male
                        <input name="gender" type="radio" value="Female">Female
                        <input name="gender" type="radio" value="Other">Other
                    </fieldset>
                </td>
                <td></td>
            </tr>       
            <tr><td colspan="4"><hr/></td></tr> -->
           <!--  <tr>
                <td colspan="3">
                    <fieldset>
                        <legend>Date of Birth</legend>    
                        <input type="Date" size="2" id="dob" name="dob">
                        <font size="2"><i>(dd/mm/yyyy)</i></font> -->
                <!-- </fieldset> -->
               <!--  </td>
                <td></td>
            </tr>
             <tr><td colspan="4"><hr/></td></tr> --> 
            <tr>
                <td>Profile Picture</td>
                <td>:</td>
                <td><input id="picture" name="picture" type="file" onkeyup="removerPicture()"></td>
                <td id="dis"></td>
            </tr>
        </table>
        <hr/>
        <input type="button" value="Submit" name="submit" onclick="f1()">
        <a href="login.php" style="display: none">Login</a>
        <input type="reset">
    </form>
</fieldset>
    </td>
  </tr>

  <tr>
    <td align="center">copyright@2017</td>
  </tr>
</table>

<script type="text/javascript">
    // function f1() {
            
    //         var name=document.getElementById('name').value;
    //         var email=document.getElementById('email').value;
    //         var password=document.getElementById('password').value;
    //         var phone=document.getElementById('phone').value;
    //         var userType=document.getElementById('userType').value;
    //         //var dob=document.getElementById('dob').value;
    //         var profile=document.getElementById('picture').value;

    //         if(name!="" && email!="" && password!="" && phone!="" && userType!="" && profile!=""  && document.getElementById('emailmsg').innerHTML=="")
    //         {
    //             //alert("works");
    //             var xhttp = new XMLHttpRequest();
    //         xhttp.open('POST', '../php/regCheck.php', true);
    //         xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    //         xhttp.send('name='+name+'&'+'password='+password+'&'+'email='+email+'&'+'phone='+phone+'&'+'userType='+userType+'&'+'picture='+profile);

    //         xhttp.onreadystatechange = function (){
    //         if(this.readyState == 4 && this.status == 200){

    //             if(this.responseText != ""){
    //                 document.getElementById('emailmsg').innerHTML = this.responseText;
    //             }else{
    //                 document.getElementById('emailmsg').innerHTML = "";
    //             }
                
    //         }   
    //         }
    //             document.getElementsByTagName('a')[0].style.display='inline';
    //         }
    //     }

    //     function f2()
    //     {
    //         var email = document.getElementById('email').value;
    //         var xhttp = new XMLHttpRequest();
    //         xhttp.open('POST', '../php/email_check.php', true);
    //         xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    //         xhttp.send('email='+email);

    //         xhttp.onreadystatechange = function (){
    //         if(this.readyState == 4 && this.status == 200){

    //             if(this.responseText != ""){
    //                 document.getElementById('emailmsg').innerHTML = this.responseText;
    //             }else{
    //                 document.getElementById('emailmsg').innerHTML = "";
    //             }
                
    //         }   
    //         }
    //     }

</script>
</body>
</html>