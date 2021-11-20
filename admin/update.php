
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

?>



 <!DOCTYPE html>
     <html lang="en">	
     <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title>Update</title>
      <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel= "stylesheet">

	
    </head>

       <body>
     
       <?php include('includes/dashboardcode.php');?>
       <br><br><br>
             <div class="container">
                      <div class="alert alert-success" role="alert">
                        <form action="update2.php" method="post">
                          <h4 class="alert-heading">Update :</h4><hr>

    <div class="form-group col-md-6">
      <label><b>USER ID :</label>
      <label><?php echo $_SESSION['sid']=$sid;?></b></label>
    </div>
  <div class="form-row">

    <div class="form-group col-md-6">
      <label>First Name</label>
      <input type="text" class="form-control" name="fname" placeholder="<?php echo $_SESSION['fname']=$fname=$row["fname"];?>">
    </div>
   
     <div class="form-group col-md-6">
      <label>Last Name</label>
      <input type="text" class="form-control" name="lname" placeholder="<?php echo $_SESSION['lname']=$lname=$row["lname"];?>">
    </div>

  
  
  </div>

  <div class="form-row">

    <div class="form-group col-md-6">
      <label>Email Address</label>
      <input type="email" class="form-control" name="email" placeholder="<?php echo $_SESSION['email']=$email=$row["email"];?>">
    </div>
   
     <div class="form-group col-md-6">
      <label>Contact No.</label>
      <input type="text" class="form-control"  name="cno" placeholder="<?php echo $_SESSION['cno']=$cno=$row["cno"];?>">
    </div>

  
  
  </div>


    <div class="form-row">
      <label>City</label>
      <input type="text" class="form-control" name="city"  placeholder="<?php echo $_SESSION['city']=$city=$row["city"];?>">
  </div>



  
        <br>
      <button type="submit" class="btn btn-outline-success btn-lg" ">
             SAVE
          </button>


</form>
                     </div>
             </div>
             <br>
             <br>
       <?php include('includes/footer.php');?>

   
     <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
   
  </body>
</html>