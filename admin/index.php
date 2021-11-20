 <?php 

  session_start();
  $sid=$_SESSION['sid'];      
  $con=mysqli_connect('localhost','root','','titanpro');
  $query="select * from student where sid='$sid'";
  $res = mysqli_query($con,$query);
  $row =mysqli_fetch_assoc($res);
  $fname=$row['fname'];

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
         <div class="hey">Hey Admin,<span style="font-family:Calibri;padding-left:5px; font-size:25px;color:#fcfcfc;";>
          <?php echo "".$fname;?></span>
         </div>
       <div class="container">
          
         
          

      </div>

      

      <?php include('includes/footer.php');?>

   
     <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
   
  </body>
</html>
