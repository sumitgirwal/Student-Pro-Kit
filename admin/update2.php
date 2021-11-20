
<?php
session_start();

$sid=$_SESSION['sid'];
$email=$_POST['email'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$city=$_POST['city'];
$cno=$_POST['cno'];

if(!$_POST['email'])
{$email=$_SESSION['email'];}
if(!$_POST['fname'])
{$fname=$_SESSION['fname'];}
if(!$_POST['lname'])
{$lname=$_SESSION['lname'];}
if(!$_POST['city'])
{$city=$_SESSION['city'];}
if(!$_POST['cno'])
{$cno=$_SESSION['cno'];}


echo "<br>".$fname;
echo "<br>".$lname;
echo "<br>".$city;
echo "<br>".$email;
echo "<br>".$sid;
echo "<br>".$cno;

	

    $con=mysqli_connect("localhost","root","","titanpro");	    
    
	
	$query="UPDATE `student` SET  `fname` = '$fname', `lname` = '$lname',  `email` = '$email', `city` = '$city', `cno` = '$cno' WHERE `student`.`sid` = '$sid'";
	
	
	
	$run = mysqli_query($con,$query);
     
	if($run==true)
	{
		echo "<h3>yes...";
		mysqli_error($con);  
	?>
    <script>alert("Update Sucessfully..;");window.open('http://localhost/zat/admin/','_self');</script>
	
	<?php
	}
	else
	{ ?>
		echo "<h1>Not be update...".mysqli_error($con);
<script>alert("Not be Update..,");window.open('http://localhost/zat/admin/','_self');</script>
	<?php			
	}
?>