
<?php
session_start();
$sid=$_POST['sid'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root','','titanpro');

$sql="select * from student where sid='$sid' && password='$password'"; 
$run=mysqli_query($con,$sql);
$row=mysqli_num_rows($run);
echo "".$row;
$status=0;

  if($row==1)
  {
	  for($n=1;$n<=2;$n++)
	  {
		$row=0;
		echo "n=".$n;
	    $sql="select * from student where sid='$sid' && password='$password' && status='$n'"; 
        $run=mysqli_query($con,$sql);
        $row=mysqli_num_rows($run);
	    $_SESSION["sid"] = $sid;
		
		
	     if($row==1 && $n==2)
	     {
		 	header ("Location:http://localhost/zat/admin/index.php");
	     }
		 if($row==1 && $n==1)
		 {
		 	header ("Location:http://localhost/zat/user/index.php");
	     }
		} 

			?>
	          <script type="text/javascript" >
                  window.alert("Your account has been Block!!");
                  window.location.href='login.php';
              </script>
		
          <?php
		  
		  
	  
	  
		
	  
  }
  else
  {
    	  ?>
	          <script type="text/javascript" >
                  window.alert("Invalid User ID or Password...,");
                  window.location.href='login.php';
              </script>
		
        <?php
	}


/*

	if($row==1)
	{
	    $_SESSION["sid"] = $sid; 
		if($row['status']==1)
		{
		 header ("Location:user/user.php");
		}
		if($row['status']==2)
		{
		 header ("Location:admin/admin.php");
		}
		if($row['status']==0)
		{
		?>
	      <script type="text/javascript" >
                window.alert("Your account Block !! Please Note to help Admin !!");
                 window.location.href='login.php';
             </script>
		
           <?php
		
			
		}
		
		
	}/*
    $sql="select * from admin where sid='$sid' && password='$password'"; 
    $run=mysqli_query($con,$sql);
    $row=mysqli_num_rows($run);
    echo "".$row;
	if($row==1)
	{
	    $_SESSION["sid"] = $sid;  
		 header ("Location:admin/home.php");
	}
	*/
	/*else
	{/*?>
	 <script type="text/javascript" >
                window.alert("Invalid User ID or Password...,");
                 window.location.href='login.php';
             </script>
		
           <?php
	}*/
?>
