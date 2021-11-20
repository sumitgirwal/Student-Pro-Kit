
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
    

    <title>Add Question</title>
      <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel= "stylesheet">

	
    </head>

       <body>
     
       <?php include('includes/dashboardcode.php');?>
       <br><br><br>
             <div class="container">
                      <div class="alert alert-primary" role="alert">
                        <form>
                          <h4 class="alert-heading">Add Question :</h4><hr>
                          
    
  <div class="form-row">

    <div class="form-group col-md-12">
      <label>Question </label>
      <textarea type="text" class="form-control"  placeholder="" required=""></textarea>
    </div> 
   
  

  
  
  </div>

  <div class="form-row">

    <div class="form-group col-md-6">
      <label>1.</label>
      <input type="email" class="form-control"  placeholder="" required="">
    </div>
   
     <div class="form-group col-md-6">
      <label>2.</label>
      <input type="text" class="form-control"  placeholder="" required="">
    </div>

  
  
  </div>
  <div class="form-row">

    <div class="form-group col-md-6">
      <label>3.</label>
      <input type="email" class="form-control"  placeholder="" required="">
    </div>
   
     <div class="form-group col-md-6">
      <label>4.</label>
      <input type="text" class="form-control"  placeholder="" required="">
    </div>

  
  
  </div>

   <div class="form-row">

    <div class="form-group col-md-6">
      <label>Answer</label>
      <input type="text" class="form-control"  placeholder="" required="">
    </div>
   
     <div class="form-group col-md-6">
      <div class="form-group">
    <label for="exampleFormControlSelect1">Course Name</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>html</option>
      <option>css</option>
      <option>php</option>
      <option>java</option> 
    </select>
  </div>
    </div>

  
  
  </div>






  
        <br>
      <button type="submit" class="btn btn-outline-primary btn-lg" onclick="window.location.href='http://localhost/zat/addq2.php'">
             ADD
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