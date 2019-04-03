<?php
require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>
  Registration Page.
</title>
<link rel="stylesheet" href="csslogin/styles.css">
</head>
<body style="background-color: #6495ed">

      <div id="main-wrapper">
        <center>
          <h2>Registration Form</h2>
          <img src="Images/LoginLogo.png" class="avatar" />
        </center>

        <form class="myform" action="register.php" method="post">
		   <label><b>First Name:<b></label><br>
          <input name = "firstname" type="text" class="inputvalues" placeholder="Type Your First name" required /><br>
		   <label><b>Last Name:<b></label><br>
          <input name = "lastname" type="text" class="inputvalues" placeholder="Type Your Last name" required /><br>
		   <label><b>Email:<b></label><br>
          <input name = "email" type="email" class="inputvalues" placeholder="Type Your Email" required /><br>
          <label><b>Meter Number:<b></label><br>
          <input name = "meterno" type="number" class="inputvalues" placeholder="Type Your Meter Number" required /><br>
		   <label><b>Username:<b></label><br>
          <input name = "fullname" type="text" class="inputvalues" placeholder="Type Your Username" required /><br>
          <label><b>password:<b></label><br>
          <input name = "password" type="password" class="inputvalues" placeholder="Your password" required /><br>
		  <label><b>Confirm password:<b></label><br>
          <input name = "cpassword" type="password" class="inputvalues" placeholder="Confirm password" required /><br>
          <input name = "userSignup" type="submit" id="signup_btn" value="Sign Up"/>
		  <a href="LoginPage.php"><input type="button" id="back_btn" value="Go to Login"/></a>
        </form>
        <?php
		
		if(isset($_POST['userSignup']))
		{
			//echo '<script type="text/javascript"> alert("sign Up button clicked") </script>';
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
            $email = $_POST['email'];
		    $meterno = $_POST['meterno'];
            $fullname = $_POST['fullname'];
			$password = $_POST['password'];
			$cpassword = $_POST['cpassword'];
			
			if($password==$cpassword)
			{
				$query= "select * from userlogin WHERE username='$fullname'";
				$query_run = mysqli_query($con,$query);
				
				if(mysqli_num_rows($query_run)>0)
				{
					//there is already a user with the same username
					echo '<script type="text/javascript"> alert("User already exists..try another username") </script>';
				}
				else
				{
					$query= "insert into userlogin values('$firstname','$lastname','$email','$meterno','$fullname','$password')";
					$query_run = mysqli_query($con,$query);
					
					if($query_run)
					{
						echo '<script type="text/javascript"> alert("User Registered..Go to login page") </script>';
					}
					else
					{
						//echo '<script type="text/javascript"> alert("Error!!") </script>';
					}
				}
			}
			else
			{
				echo '<script type="text/javascript"> alert("Password does not match!!!") </script>';
				
			}
		}

         
        ?>

         </div>
  

</body>
</html>