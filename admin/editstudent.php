
<?php
 session_start();
if(!$_SESSION["sid"])
{

    header("login.php");
}

$uid=$_GET['uid'];

$con=mysqli_connect("localhost","root","","titanpro");
$sid=$_SESSION['sid'];      
$query="select * from student where sid='$uid'";


$res = mysqli_query($con,$query);
$row =mysqli_fetch_assoc($res);
?>



 <!DOCTYPE html>
     <html lang="en"> 
     <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title>Edit Student</title>
      <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel= "stylesheet">

  
    </head>

       <body>
     
       <?php include('includes/dashboardcode.php');?>
       <br><br><br>
             <div class="container">
                      <div class="alert alert-info" role="alert">
                        <form>
                          <h4 class="alert-heading">Edit Student Info :</h4><hr>

 <div class="form-row">

    <div class="form-group col-md-6">
      <label>USER ID</label>
      <input type="text" class="form-control"  placeholder="<?php echo $uid ?>"  readonly>
    </div>
   
     <div class="form-group col-md-6">
      <div class="form-group">
    <label for="exampleFormControlSelect1">Course Name</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option value="null">

        <?php
      
           if($row['status']=='0')
           {
            $value1="BLOCK";
            $value2="USER";
            $value3="ADMIN";
          
          }
           else if($row['status']=='1')
           {
             $value3="BLOCK";
            $value1="USER";
            $value2="ADMIN";
          }
          else  if($row['status']=='2')
           {
             $value2="BLOCK";
            $value3="USER";
            $value1="ADMIN";
          }
           
           echo "".$value1;
         
      
      
      ?>

      </option>
      <option><?php echo "".$value2?></option>
      <option><?php echo "".$value3?></option>
    </select>
  </div>
    </div>

  
  
  </div>  <div class="form-row">

    <div class="form-group col-md-6">
      <label>First Name</label>
      <input type="text" class="form-control"  placeholder="<?php echo $row["fname"];?>">
    </div>
   
     <div class="form-group col-md-6">
      <label>Last Name</label>
      <input type="text" class="form-control"  placeholder="<?php echo $row["lname"];?>">
    </div>

  
  
  </div>

  <div class="form-row">

    <div class="form-group col-md-6">
      <label>Password</label>
      <input type="text" class="form-control"  placeholder="<?php echo $row["password"];?>">
    </div>
   
     <div class="form-group col-md-6">
      <label>Email Address</label>
      <input type="text" class="form-control"  placeholder="<?php echo $row["email"];?>">
    </div>

  
  
  </div>

   

    <div class="form-row">

    <div class="form-group col-md-6">
      <label>City</label>
      <input type="text" class="form-control"  placeholder="<?php echo $row["city"];?>">
    </div>
   
     <div class="form-group col-md-6">
      <label>Contact NO.</label>
      <input type="text" class="form-control"  placeholder="<?php echo $row["cno"];?>">
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
      <button type="submit" class="btn btn-outline-info btn-lg" onclick="window.location.href='http://localhost/zat/update2.php'">
             Back
          </button>&nbsp;
           <button type="submit" class="btn btn-outline-info btn-lg" onclick="window.location.href='http://localhost/zat/update2.php'">
             DELETE
          </button> &nbsp;<button type="submit" class="btn btn-outline-info btn-lg" onclick="window.location.href='http://localhost/zat/update2.php'">
             UPDATE
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