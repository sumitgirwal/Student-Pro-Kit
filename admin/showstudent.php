<?php
session_start();
if(!$_SESSION["sid"])
{

    header("login.php");
}

$sid=$_SESSION['sid'];      
$con=mysqli_connect("localhost","root","","titanpro");
$query="select * from student";
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
          <div class="alert alert-info" role="alert">
           <div class="table-responsive-lg">
           
             <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">UID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Password</th>
      <th scope="col">Email ID</th>
      <th scope="col">City</th>
      <th scope="col">Contact No.</th>
      <th scope="col">Status</th>
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
             
              <td><?php echo "".$sid=$row["sid"];?></td>
              <td><?php echo "".$fname=$row["fname"];?></td>
              <td><?php echo "".$lname=$row["lname"];?></td>
              <td><?php echo "".$password=$row["password"];?></td>
              <td><?php echo "".$email=$row["email"];?></td>
              <td><?php echo "".$city=$row["city"];?></td>
              <td><?php echo "".$contact=$row["cno"];?></td>
              <td>
          <?php 
             $uid=$sid;
           if($row['status']=='0')
           {$value="BLOCK";}
           else if($row['status']=='1')
           {$value="USER";}
          else  if($row['status']=='2')
           {$value="ADMIN";}
           
          echo "".$value;
        
        
          ?>
        </td>
<td>


<?php
 $a=$sid;

 
  echo "<a class=\"btn btn-info\" href=\"editstudent.php?uid=$a\" role=\"button\" >Edit</a>";

  ?>



</td>



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
