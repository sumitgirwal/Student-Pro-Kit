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
    <?php include('includes/header.php'); ?>
  
  <div class="container">

  <div class="form">
 
        <div id="signup">   
          <h1><u>Sign_Up</u></h1>
          
          <form action="confirm.php" method="post">
      
      <div class="tab-content">
          
          <div class="field-wrap">
            <label>
              First Name<span class="req">*</span>
            </label>
            <input type="text" name="fname" id="name" placeholder="First name" autocomplete="off" required />
          </div>

          <div class="field-wrap">
            <label>
              Last Name<span class="req">*</span>
            </label>
             <input type="text" name="lname" id="name" placeholder="Last name" autocomplete="off" required />
          </div>

         
          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" id="name" placeholder="Email Address" autocomplete="off" required />
          </div> 

           <div class="field-wrap">
            <label>
              City<span class="req">*</span>
            </label>
            <input type="text" name="city" id="name" placeholder="City" autocomplete="off" required />
          </div> 

            <div class="field-wrap">
              <label>
              Contact No.<span class="req">*</span>
              </label>
               <input type="text" name="number" maxlength="10" id="name" placeholder="Contact No." autocomplete="off" required />
            </div> 
          
        

          <button type="button" class="btn btn-outline-light btn-lg " onclick="window.location.href='http://localhost/zat/index.php'">
             Back
          </button>

          <button type="submit" class="btn btn-outline-light btn-lg" onclick="window.location.href='http://localhost/zat/Confirm.php'">
             Confirm
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
