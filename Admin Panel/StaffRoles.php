<?php
require 'dbconfig/config.php';
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Users Admin Page</title>
<link rel="stylesheet" href="styles.css" type="text/css" />

<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
</head>

<body style="background-color: #004080">

		<section id="body" class="width">
			<aside id="sidebar" class="column-left">

			<header>
				<h1><a href="#">Users</a></h1>

				<h2>Administrator</h2>
				
			</header>

			<nav id="mainnav">
  				<ul>
	                            		<li class="selected-item"><a href="admin.html">Home</a></li>
	                           		    <li><a href="StaffRoles.php">Staff Roles</a></li>
	                           		    <li><a href="userAccounts.php">User Accounts</a></li>
                            		
                        	</ul>
			</nav>

			
			
			</aside>
			<section id="content" class="column-right">
                		
	    <article>
				
			
			<h2>Staff Roles</h2>

				<h1>Departments</h1><br>
				
				
			    <h3>Employee Form</h3>
			    <form  class = "staffForm" action = "StaffRoles.php" method = "post">
			    
				
		
				
						<input name = "firstname" type = "text" class = "inputform" placeholder = "employee firstname" required/><br>
						<input name = "lastname" type = "text" class = "inputform" placeholder = "employee lastname" required/><br>
						<!-- <input name = "department" type = "text" class = "inputform" placeholder = "add employee department" required/> -->
 						Select Department : 
					  <select name="department" value="select Issue">
	                       <option>
	                        <?php 
	                            $sql2 = "SELECT id, type FROM issues";
	                            $result = $con->query($sql2);
	                            
	                            if ($result->num_rows > 0) {
	                                // output data of each row
	                                while($row = $result->fetch_assoc()) {
	                                    ?> 
	                                    <option> <?php echo $row["type"]; ?> </option>

	                                    <?php
	                                }
	                            } else {
	                                echo "0 results";
	                            }
	                        ?>
	                       </option> 
                       </select>

						<br>
						<br><input name = "username" type = "text" class = "inputform" placeholder = "employee username" required/><br>
						<input name = "password" type = "text" class = "inputform" placeholder = "employee pin" required/><br>
					
						

				
					
	
				
				<p><input type="submit" name="SUBMIT" class="formbutton" value="SUBMIT" /></p>
				</form>
				<?php
				    if(isset($_POST['SUBMIT']))
				    {
				    	$firstname = $_POST['firstname'];
				    	$lastname = $_POST['lastname'];
				    	$department = $_POST['department'];
						$username = $_POST['username'];
						$password = $_POST['password'];

				    	$sql = "INSERT INTO departments (firstname, lastname, department, username, password)
				    	VALUES ('$firstname', '$lastname', '$department', '$username', '$password')";
				    	mysqli_query($con, $sql);
						
				  if(mysqli_query($con, $sql))
				   {
					echo '<script type="text/javascript"> alert("New Staff Member Successfully Added") </script>';
				   }
				  else
				   {
					echo '<script type="text/javascript"> alert("New Staff Member not Added") </script>';
			       }
				    }
					else
					{
						echo '<script type="text/javascript"> alert("") </script>';
					}	
					
				?>
				
				<h3>Form</h3>
				<fieldset>

					<legend>Form legend</legend>
					<form action="#" method="get">
						<p><label for="name">Name:</label>
						<input type="text" name="name" id="name" value="" /><br /></p>		
						<p><label for="email">Email:</label>
						<input type="text" name="email" id="email" value="" /><br /></p>
						<p><label for="message">Message:</label>	
						<textarea cols="60" rows="11" name="message" id="message"></textarea><br /></p>
						<p><input type="submit" name="send" class="formbutton" value="Send" /></p>
					</form>
	
				</fieldset>
		</article>

			
			<footer class="clear">
				<p>&copy; 2018 Majivoice2.0.</a> by Rockkaris</p>
			</footer>

		</section>

		<div class="clear"></div>

	</section>
	

</body>
</html>
