

 <?php 

 session_start();
if(!$_SESSION["sid"])
{

    header("login.php");
}
$con=mysqli_connect("localhost","root","","titanpro");
$sid=$_SESSION['sid'];	    
$query="select * from student where sid='$sid'";
$res = mysqli_query($con,$query);
$row =mysqli_fetch_assoc($res);
$_SESSION['password']=$row['password'];

?>


 <!DOCTYPE html>
     <html lang="en">	
     <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title>Admin_DashBoard</title>
      <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel= "stylesheet">

	
    </head>

       <body>
     
       <?php include('includes/dashboardcode.php');?>
      
          <div class="container">
                     <br><br><br>
              <div class="alert alert-light" role="alert">

             <div class="container">
             	 <div class="container">
             	 	
    

             	 	<form>
                    <table>
                  	<tr>
                  		<td>
                  			 <label><b style="font-family: comic sans ms;">User ID 	:</b></label> <label><?php echo "".$sid; ?>	</label><br><br>
                        </td>
                        <td></td>
                  	</tr>
                    
                  	<tr>
                  		<td>
                  			 <label>First Name :</label> <label><?php echo "".$fname=$row["fname"];?></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                  			 <label>Last Name :</label> <label><?php echo "".$lname=$row["lname"];?></label>
                        </td>
                  	</tr>

                  	<tr>
                  		<td>
                  			 <label>Email Address :</label> <label><?php echo "".$email=$row["email"];?></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                  			 <label>City :</label> <label><?php echo "".$city=$row["city"];?></label>
                        </td>
                  	</tr>

                      
                  	<tr>
                  		<td>
                  			 <label>Contact No:</label> <label><?php echo "".$cno=$row["cno"];?></label>
                        </td>
                        <td>
                  			 
                        </td>
                  	</tr>


                  </table>  
                  </form>     
         

          	 </div>
           </div>
          	</div>

          </div>
          
          <br>
          <br><br>
          <br>
       <?php include('includes/footer.php');?>

   
     <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
   
  </body>
</html>
