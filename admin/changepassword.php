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
    

    <title>Change Password</title>
      <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel= "stylesheet">

	
    </head>

       <body>
     
       <?php include('includes/dashboardcode.php');?>
              <br><br><br>
             <div class="container">

                      <div class="alert alert-info" role="alert">
                        <form>

                          <h4 class="alert-heading">Change  Password :</h4><hr>


                          <div class="form-row">

    <div class="form-group col-md-6">
      <label><b>USER ID :</label>
      <label><?php echo $sid;?></b></label>
    </div>
   

  
  
  </div>
  <div class="form-row">

    <div class="form-group col-md-6">
      <label>Current Password</label>
      <input type="Password" class="form-control" required="">
    </div>
   
     <div class="form-group col-md-6">
      <label>Confirm Password</label>
      <input type="password" class="form-control" required="" >
    </div>

  
  
  </div>

    <div class="form-row">

    <div class="form-group col-md-6">
      <label>New Password</label>
      <input type="Password" class="form-control" required="">
    </div>
   
     <div class="form-group col-md-6">
      <label>Re-Enter Password</label>
      <input type="password" class="form-control" required="" >
    </div>

  
  
  </div>

  <div class="form-row">

    

    <div class="form-group col-md-6">
      <label>Verification Code</label>
      <input type="text" class="form-control" required="">
    </div>
    <div class="form-group col-md-6">
      <label></label>
      
    </div>
    <div class="form-group col-md-4">
      
      <label><img src="captcha.php"></label>
    </div>
   
  
  
  </div>


 



 
        <br>
      <button type="submit" class="btn btn-outline-success btn-lg" onclick="window.location.href='http://localhost/zat/changepassword2.php'">
      CHANGE
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
