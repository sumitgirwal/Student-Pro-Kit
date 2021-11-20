 <?php

session_start();

$value=$_SESSION["value"];	
$sid=$_SESSION['sid'];
$fname=$_SESSION["fname"];
$lname=$_SESSION["lname"];
$password=$_POST["password"];
$email=$_SESSION["email"];
$city=$_SESSION["city"];
$cno=$_SESSION["cno"];
$status=0;



if(!strcmp($_SESSION["vercode"],$_POST["vercodeuser"]))
{
	$con=mysqli_connect("localhost","root","","titanpro");	    
	$query="INSERT INTO `student` (`id`, `sid`, `fname`, `lname`, `password`, `email`, `city`, `cno`, `status`, `regdate`, `update`) 
	VALUES (NULL, '$sid', '$fname', '$lname', '$password', '$email', '$city', '$cno', '$status', CURRENT_TIMESTAMP, NULL)";
	
	
	
	$run = mysqli_query($con,$query);
	
	if($run==true)
	{
      ?>
	<script>alert("<?php echo "".$_SESSION["sid"]."";?> : Successfully SignUp!!");
	window.open('http://localhost/zat/signup.php','_self');
	</script>
	
	
	<?php
	
		
		
	}
	else{
	?>
	
	
	<script>alert("<?php echo "".$_SESSION["sid"]."";?> : Not be SignUp!!");
	window.open('http://localhost/zat/signup.php','_self');
	</script>
	
	
	<?php
	}
	
}
else
{
	
	?>
	
	<script>alert("Verifiy Code do not match  !!");
	window.open('http://localhost/zat/confirm.php','_self');
	</script>
	<?php
}


?>