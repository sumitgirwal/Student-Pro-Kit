
<?php
  session_start();
?>
	
<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StudentProKit</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
	  <link href="assets/css/style.css" rel= "stylesheet">
    </head>
    <body>
    <?php include('includes/header.php');?>
       <div class="container">

         <h1 style="text-align: center; color:white;">Wel-Come</h1>
             
            
              <div class="b1">
               <button type="button" class="btn btn-outline-light btn-lg" onclick="window.location.href='http://localhost/zat/signup.php'">
                                 SignUp</button>
           
             
            
             </div>

         <div class="context">
           <div class="b2">
              <button type="button" class="btn btn-outline-light btn-lg" onclick="window.location.href='http://localhost/zat/login.php'">

                LogIn
              </button>
            </div>&ncsp;
         <div class="alert alert-primary" role="alert">
                <h4 class="alert-heading">Hey,</h4>
                  <p style="text-align: center;"> <b>"No one is perfect in this world and nothing is eternally best. But we can try to be better. I hope it will help you a lot."</b></p>
                <hr>
               <p class="mb-0">  Hi, I have  developed this site so that students may learn web developing easily.I'm committed to provide easy leraning  on various web technologies.more Coding Click to visite :<a href="http://procodersp.blogspot.com"> ProCoder</a></p> 
                   </div>

          </div> 
    

     </div>

    <?php include('includes/footer.php');?>
    <script src="js/bootstrap.js"></script>
	  <script src="js/jquery.js"></script>
  </body>
</html>
