<?php
  session_start();
$con=mysqli_connect("localhost","root","","titanpro");
$sid=$_SESSION['sid'];      
$query="select * from student where sid='$sid'";
$res = mysqli_query($con,$query);
$row =mysqli_fetch_assoc($res);
$fname=$row['fname'];

$sid=$_SESSION['sid'];      
$con=mysqli_connect("localhost","root","","titanpro");
$query="select * from question";
$retval=mysqli_query($con, $query);  
$n=0;


?>


 <!DOCTYPE html>
     <html lang="en">
     <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title>Show Question</title>
      <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel= "stylesheet">

	
    </head>

       <body>
     
       <?php include('includes/dashboardcode.php');?>
         
         <div class="container">
          <br><br>>
          <div class="alert alert-primary" role="alert">
           <div class="table-responsive-lg">
           
             <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">QID</th>
      <th scope="col">Question</th>
      <th scope="col">Opation 1</th>
      <th scope="col">Opation 2</th>
      <th scope="col">Opation 3</th>
      <th scope="col">Opation 4</th>
      <th scope="col">Answer</th>
      <th scope="col">Course</th>
      <th scope="col">Edit</th>
      
      
    </tr>
  </thead>
  <tbody>
    <?php
               if(mysqli_num_rows($retval) > 0){  
            while($row = mysqli_fetch_assoc($retval)){$n++;            
          ?>

    <tr>

      <th scope="row"><?php echo "".$n;?></th>
              <td><?php echo "".$row["qid"];?></td>
              <td><?php echo "".$row["question"];?></td>
              <td><?php echo "".$row["op1"];?></td>
              <td><?php echo "".$row["op2"];?></td>
              <td><?php echo "".$row["op3"];?></td>
              <td><?php echo "".$row["op4"];?></td>
              <td><?php echo "".$row["ans"];?></td>
              <td><?php echo "".$row["course"];?></td>
              <td><?php echo "".$row["aid"];?></td>
        <td><?php
 $a=$row["qid"];
  echo "<a class=\"btn btn-primary\" href=\"editq.php?qid=$a\" role=\"button\" >Edit</a>";
  ?></td>



           </tr>

<?php }
               }
          ?>

  </tbody>
</table>                   
 

             </table>
         </div>
         
          

          </div>
             </div>
      <?php include('includes/footer.php');?>

   
     <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
   
  </body>
</html>
