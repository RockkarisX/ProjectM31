<?php
session_start();
require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>
  Customer Login Page.
</title>
<link rel="stylesheet" href="csslogin/styles.css">
</head>
<body style="background-color: #6495ed">

      <div id="main-wrapper">
        <center>
          <h2>Mteja Login Form</h2>
          <img src="Images/LoginLogo.png" class="avatar" />
        </center>

        <form class="myform" action="loginpage.php" method="post">
          <label><b>Username:<b></label><br>
          <input name = "fullname" type="text" class="inputvalues" placeholder="Type Your name" required/><br>
          <label><b>password:<b></label><br>
          <input name = "password" type="password" class="inputvalues" placeholder="Type Your password" required /><br>
          <input name = "login" type="submit" id="login_btn" value="Login"/>
		  <a href="register.php"><input name = "userRegister" type="button" id="register_btn" value="Register"/></a>
        </form>
        <?php
		 if(isset($_POST['login']))
		 {
			 
		    $fullname = $_POST['fullname'];
            $password = $_POST['password'];
			
			$query="select * from userlogin WHERE username='$fullname' AND password='$password'";
			
			$query_run = mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				//valid
				$SESSION['username']=$fullname;
				header('location:Portal.php');
			}
			else
			{
				//invalid
				echo '<script type="text/javascript"> alert("Invalid Credentials") </script>';
			}
		 }
			
/*
            if(isset($_POST['userlogin']))
            {
            $fullname = $_POST['fullname'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM dumylogin WHERE username = '$fullname' AND password = '$password'";
            $result = $con->query($sql);

            if(!$row = $result->fetch_assoc())
            {
              //echo "username or password invalid";
            }
            else
            {
              header("Location: Portal.php");
            }
            
            
            
          }*/
        ?>

         </div>
  

</body>
</html>