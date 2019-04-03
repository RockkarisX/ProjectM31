<?php
require 'session.php';
?>



<!DOCTYPE html>
<html>
<head>
<title>
  Staff Login Page.
</title>
<link rel="stylesheet" href="staffcss/styles.css">
</head>
<body style="background-color: #6495ed">

      <div id="main-wrapper">
        <center>
          <h2>Staff Login Form</h2>
          <img src="Images/LoginLogo.png" class="avatar" />
        </center>

        <form class="myform" action="StaffLogin.php" method="post">
          <label><b>Username:<b></label><br>
          <input name = "fullname" type="text" class="inputvalues" placeholder="type your name"><br>
          <label><b>User Pin:<b></label><br>
          <input name = "password" type="password" class="inputvalues" placeholder="input pin Number"><br>
          <input name = "submitstaff" type="submit" id="login_btn" value="Login">
        </form>
		<?php
		 if(isset($_POST['submitstaff']))
		 {
			 
		    $fullname = $_POST['fullname'];
        $password = $_POST['password'];
			
			  $query="select * from departments WHERE username='$fullname' AND password='$password'";
			
  			$query_run = mysqli_query($con,$query);
  			if(mysqli_num_rows($query_run)>0)
  			{
  				//valid
  				$_SESSION['username']=$fullname;
         // $SESSION['']=
  				header('location:FieldOfficer.php');
  			}
  			else
			{
				//invalid
				echo '<script type="text/javascript"> alert("Invalid Credentials") </script>';
			}
		 }
			
        ?>

         </div>
  

</body>
</html>