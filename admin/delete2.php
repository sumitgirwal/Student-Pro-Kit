<?php

session_start();

echo "<br>".$sid=$_SESSION['sid'];

echo "<br>".$password=$_POST['password'];

echo "<br>".$cpassword=$_POST['cpassword'];

echo "<br>".$vcode=$_POST['vcode'];

echo "<br>".$email=$_POST['email'];



if( !strcmp($password,$cpassword) )
  {
    if( !strcmp($vcode,$_SESSION['vercode']) )
     {


      $con=mysqli_connect('localhost','root','','TitanPro');
      $query="select * from student where sid='$sid'";
       $res = mysqli_query($con,$query);
      $row =mysqli_fetch_assoc($res);

     $sql = "delete from student where sid='$sid' ";  

          if( ( !strcmp($row['password'],$password)) && ( mysqli_query($con,$sql)  )
           {

          }else{

              echo "no be done!";

           }
        }
     else
      {

          echo "ver code are wrong!!!";
    }

 
}
else
{
    echo "pass wrong!!1"; 
}

?>
