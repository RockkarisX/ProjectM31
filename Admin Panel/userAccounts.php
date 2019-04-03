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
                            		<li class="selected-item"><a href="admin.php">Home</a></li>
                           		    <li><a href="StaffRoles.php">Staff Roles</a></li>
                           		    <li><a href="userAccounts.php">User Accounts</a></li>
                            	
                        	</ul>
			</nav>

			
			
			</aside>
			<section id="content" class="column-right">
                		
	    <article>
				
			
			<h2>Consumer Accounts</h2>

				<h1>users</h1><br>
				
				
				
			    <h3>Add Users</h3>
				<form  action = "userAccounts.php" method = "post">
			    <table>
					<tr>
						<th>firstname</th>
						<th>lastname</th>
						<th>Region</th>
						
					</tr>
					<tr>
						<td><input name = "firstname" type = "text" required/></td>
						<td><input name = "lastname" type = "text" required/></td>
						<td><input name = "region" type = "text" required/></td>
						

					</tr>
					
	
				</table>
				<p><input type="submit" name="SUBMIT" class="formbutton" value="SUBMIT" /></p>
				</form>
				<?php
				    if(isset($_POST['SUBMIT']))
				    {
				    	$firstname = $_POST['firstname'];
				    	$lastname = $_POST['lastname'];
				    	$region = $_POST['region'];

				    	$sql = "INSERT INTO users (firstname, lastname, Region)
				    	VALUES ('$firstname', '$lastname', '$region')";
				    	mysqli_query($con, $sql);
				    }	
				?>

				<p></p>
				
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
