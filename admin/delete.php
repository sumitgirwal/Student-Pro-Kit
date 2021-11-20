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
    

    <title>Delete Account</title>
      <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel= "stylesheet">

	
    </head>

       <body>
     
       <?php include('includes/dashboardcode.php');?>
              <br><br><br>
             <div class="container">

                      <div class="alert alert-success" role="alert">
                        <form action="delete2.php" method="post">

                          <h4 class="alert-heading">Delete account :</h4><hr>


                          <div class="form-row">

    <div class="form-group col-md-6">
      <label><b>USER ID :</label>
      <label><?php echo $sid;?></b></label>
    </div>
   

  
  
  </div>
  <div class="form-row">

    <div class="form-group col-md-6">
      <label>Password</label>
      <input type="Password" name="password" class="form-control" required="">
    </div>
   
     <div class="form-group col-md-6">
      <label>Confirm Password</label>
      <input type="password" name="cpassword" class="form-control" required="" >
    </div>

  
  
  </div>

  <div class="form-row">

    

    <div class="form-group col-md-6">
      <label>Verification Code</label>
      <input type="text" maxlength="5" autocomplete="off"  name="vcode" class="form-control" required="">
    </div>
    <div class="form-group col-md-6">
      <label>Email Address</label>
      <input type="email" name="email" class="form-control"  required="">
    </div>
    <div class="form-group col-md-4">
      
      <label><img src="captcha.php"></label>
    </div>
   
  
  
  </div>
  <br>
      <button type="submit" class="btn btn-outline-success btn-lg" ">
        Delete
          </button>


</form>
                     </div>
             </div>
             <br>
 
      <?php include('includes/footer.php');?>

   
     <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
   
  </body>
</html>
