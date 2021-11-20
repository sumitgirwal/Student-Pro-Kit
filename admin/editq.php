
<?php
 session_start();
if(!$_SESSION["sid"])
{

    header("login.php");
}

$qid=$_GET['qid'];

$con=mysqli_connect("localhost","root","","titanpro");
$sid=$_SESSION['sid'];      
$query="select * from question where qid='$qid'";


$res = mysqli_query($con,$query);
$row =mysqli_fetch_assoc($res);
?>



 <!DOCTYPE html>
     <html lang="en"> 
     <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title>Edit Question</title>
      <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel= "stylesheet">

  
    </head>

       <body>
     
       <?php include('includes/dashboardcode.php');?>
       <br><br><br>
             <div class="container">
                      <div class="alert alert-primary" role="alert">
                        <form>
                          <h4 class="alert-heading">Edit Question :</h4><hr>

 <div class="form-row">

    <div class="form-group col-md-6">
      <label>QID</label>
      <input type="text" class="form-control"  placeholder="<?php echo $qid ?>"  readonly>
    </div>
  
  
  </div>  


  <div class="form-row">

    <div class="form-group col-md-12">
      <label>Question </label>
      <textarea type="text" class="form-control"   placeholder="<?php echo " ".$row["question"];?>"></textarea>
    </div> 
   
  

  
  
  </div>

  <div class="form-row">

    <div class="form-group col-md-6">
      <label>1.</label>
      <input type="email" class="form-control"   placeholder="<?php echo $row["op1"];?>" >
    </div>
   
     <div class="form-group col-md-6">
      <label>2.</label>
      <input type="text" class="form-control"  placeholder="<?php echo $row["op2"];?>" >
    </div>

  
  
  </div>
  <div class="form-row">

    <div class="form-group col-md-6">
      <label>3.</label>
      <input type="email" class="form-control"  placeholder="<?php echo $row["op3"];?>" >
    </div>
   
     <div class="form-group col-md-6">
      <label>4.</label>
      <input type="text" class="form-control"  placeholder="<?php echo $row["op4"];?>" >
    </div>

  
  
  </div>


  <div class="form-row">

    <div class="form-group col-md-6">
      <label>Answer</label>
      <input type="text" class="form-control"  placeholder="<?php echo " ".$ans=$_SESSION['ans']=$row["ans"];?>" >
    </div>
     
     <div class="form-group col-md-6">
      <div class="form-group">
    <label for="exampleFormControlSelect1">Course Name</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option value="null">

        <?php
      
          
           if(strcmp($row['course'],'C') ||  strcmp($row['course'],'c'))
           {
            $value2="C++";
            $value3="JAVA";
          
          }
           else  if(strcmp($row['course'],'C++') ||  strcmp($row['course'],'c++'))
           {
            $value2="C++";
            $value3="JAVA";
          }
          else  if(strcmp($row['course'],'JAVA') ||  strcmp($row['course'],'java'))
           {
            $value2="C";
            $value3="C++";
          }
           
           echo "".$value1=$row['course'];;
         
      
      
      ?>

      </option>
      <option><?php echo "".$value2?></option>
      <option><?php echo "".$value3?></option>
    </select>
  </div>
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
      <button type="submit" class="btn btn-outline-primary btn-lg" onclick="window.location.href='http://localhost/zat/update2.php'">
             Back
          </button>&nbsp;
           <button type="submit" class="btn btn-outline-primary btn-lg" onclick="window.location.href='http://localhost/zat/update2.php'">
             DELETE
          </button> &nbsp;<button type="submit" class="btn btn-outline-primary btn-lg" onclick="window.location.href='http://localhost/zat/update2.php'">
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