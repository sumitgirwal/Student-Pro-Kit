 <!---

 <!DOCTYPE html>
     <html lang="en">
     <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title>LogIn | StudentProKit</title>

     <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
	
    </head>

       <body>

      <--?php include('includes/header.php'); ?>

       <div class="form">

        <div id="signup">   
          <h1><u>User Login</u></h1>
          
          <form action="checkwho.php" method="post">
      
      <div class="tab-content">
          <div class="field-wrap">
            <label>
              User ID
        <span class="req">*</span>
            </label>
            <input type="text" name="sid" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
       
          </div>
      
      
     <a  href="#" >Forgot Password</a> &nbsp;| &nbsp;<a  href="#">Sign In</a>
      
      </div><br>
          
          <button type="submit" class="button button-block"/>login</button>
     
 </form>
         </div>
        
      </div>
      
</div>  

   
 
       <--?php include('includes/footer.php');?>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
	<script src="js/jquery.js"></script>
  </body>
</html>
-->
<?php
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
 <link rel="stylesheet" href="assets/css/magic.css"> 
 <link rel="stylesheet" href="assets/css/style.css"> 
 <link rel="stylesheet" href="assets/css/bootstrap.css"> 
 
</head>

<body>
  <div>

    <?php include('includes/header.php'); ?>
  </div>
  <div class="container">

  <div class="form">
 
        <div id="signup">   
          <h1><u>User Login</u></h1>
          
          <form action="checkwho.php" method="post">
      
      <div class="tab-content">
          <div class="field-wrap">
            <label> User ID
        <span class="req">*</span>
            </label>
            <input type="text" name="sid" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
       
          </div>
      
      
     <a  href="http://localhost/zat/mynote.php" >Forgot Password</a> &nbsp;| &nbsp;<a  href="http://localhost/zat/signup.php">Sign In</a>
      
      </div><br>
          
          
          <button type="submit" class="btn btn-outline-light btn-lg" onclick="window.location.href='http://localhost/zat/login.php'">
             LogIn
          </button>
     
 </form>
         </div>
        
      </div>
      
</div>
</div>
 <?php include('includes/footer.php'); ?>
<script src='assets/js/jquery.js'></script>
<script  src="assets/js/index.js"></script>

</body>
</html>












