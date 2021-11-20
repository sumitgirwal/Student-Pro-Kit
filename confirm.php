<?php

session_start();
error_reporting(0);

if(strlen($_POST['status'])!=0)
{   
  header('location:index.php');
}
else
{

$con=mysqli_connect("localhost","root","","titanpro");      
$query="select * from student";
$res = mysqli_query($con,$query);
$count=0;


while($row =mysqli_fetch_assoc($res))
{
  $count=$count+1;
}
$value=$count;
$value=$value+1;
$sid="sg@".$value;


?>


<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
 <link rel="stylesheet" href="assets/css/confirm.css"> 
 <link rel="stylesheet" href="assets/css/style.css"> 
 <link rel="stylesheet" href="assets/css/bootstrap.css"> 
 
 
</head>

<body>
    <?php include('includes/header.php'); ?>
     <div class="container">


       <div class="form">
        
          <table class="tables">


            <tr>
              <td> User ID : </td> <td> <?php echo "sg@".$value; ?> </td><td>&nbsp;</td>
              <td><label>Password :</label></td>  <td>  <input type="password" name="password"  pleaceholder="Password" required autocomplete="off"/> </td>
            </tr>
               <tr></tr><tr></tr>
            <tr>
              <td> First Name : </td> <td> <?php echo $fname=$_POST["fname"];?> </td>&nbsp;<td></td>
              <td> Last  Name  :</td>  <td> <?php echo $lname=$_POST["lname"];?> </td>
            </tr>
                  <tr></tr><tr></tr>
             <tr>
              <td> City  : </td> <td> <?php echo $city=$_POST["city"] ?> </td><td>&nbsp;</td>
              <td> Email ID  :</td>  <td> <?php echo $email=$_POST["email"]; ?> </td>
            </tr>
             <tr></tr><tr></tr>
             <tr>
              <td>Verification code : </td> <td> 
                <input type="text"  name="vercodeuser" maxlength="5" autocomplete="off" required style=" width: 80px; height: 25px;" /> </td><td>&nbsp;</td>
              <td> Contact no. : </td>  <td> <?php echo $cno=$_POST["number"];?> </td>
            </tr>
            <tr><td></td>
              <td>  <img src="captcha.php"></td>
            </tr>

          </table>
        </form>
        <p style="text-align: center; padding-top: 50px;">
        <button type="button" class="btn btn-outline-light btn-lg " onclick="window.location.href='http://localhost/zat/index.php'">
             Back
          </button>

          <button type="submit" class="btn btn-outline-light btn-lg" onclick="window.location.href='http://localhost/zat/check.php'">
             SignUp
          </button>
        </p>


       </div>


      </div>
      
</div>
 <?php include('includes/footer.php'); ?>
</body>
</html>
<?php

$_SESSION["sid"]=$sid; 
$_SESSION["fname"]=$fname;
$_SESSION["lname"]=$lname;
$_SESSION["city"]=$city;
$_SESSION["email"]=$email;
$_SESSION["value"]=$value;
$_SESSION["cno"]=$cno;



}
?>