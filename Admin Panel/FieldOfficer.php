<?php
 include 'dbconfig/config.php';
 require_once ('session.php');
 $userid = $_SESSION['username'];
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Staff Dashboard</title>
<link rel="stylesheet" href="styles.css" type="text/css" />

<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
</head>

<body style="background-color: #004080">

		<section id="body" class="width">
			<aside id="sidebar" class="column-left">

			<header>
				<h1><a href="#">Staff</a></h1>

				<h2>Dashboard</h2>
				
			</header>

			<nav id="mainnav">
  			   <ul>           	
                 <li><a href="#">Tasks Assigned>></a></li>           	
                </ul>
                <ul>           	
                 <li><a href="logout.php">Logout</a></li>           	
                </ul>
			</nav>

			
			
			</aside>
			<section id="content" class="column-right">
                		
	    <article>
				
			
			<h2>Tasks Bar</h2>

				<h1>Updated</h1><br>
				
				
			    <h3>Table</h3>
			    <table>
					<tr>
					
						<th>Account Number</th>
						<th>Category</th>
						<th>Region</th>
						<th>Message</th>
					
				
					</tr>
				<?php

				

				  echo 'User: '; 
				  echo $userid;

                  $user = $userid;
				  $sql0 = "SELECT department FROM departments WHERE username = '$user'";
				  $result0 = $con->query($sql0);
				  $row0 = $result0->fetch_assoc();


				  echo 'the category is';
				  echo 
				  //echo $SESSION;


				  // :=====================================:

				  // check officer id from compalints:

				  // :======================================:





				  $category =$row0['department'];

				  $sql= "SELECT acc_pin, category, region, message FROM complains WHERE category='$category'";
				  $result = $con->query($sql);
				
				  if (mysqli_num_rows($result) > 0)
				{   
			        //echo "<table><tr><th>Meter Number</th><th>category</th><th>region</th><th>message</th></tr>";
			          
			        while($row = $result->fetch_assoc())
					{
						 
						//printf ("%s (%s)\n",$row[0],$row[1]);
						echo "<tr><td>".$row['acc_pin']."</td><td>".$row['category'].'</td><td>'.$row['region']."</td><td>".$row['message']."</td></tr>";
					}
					mysqli_free_result($result);
					echo "</table>";
				}
				else
				{
					echo "0 result";
				}
				
				?>
					
					<tr>
						
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td><input type="submit" name="done" class="formbutton" value="Done" /></td>
				

					</tr>
					
					<tr>
						
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				
					
	
				</table>
			
				

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
