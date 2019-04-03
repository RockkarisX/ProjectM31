<?php
require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Launch complain</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-validation.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

</head>


	<header>
		<h1><strong>MajiVoice</strong>  Complain Section </h1>
    
    </header>
    
   

    <div class="main-content">

        <!-- You only need this form and the form-validation.css -->

        <form class="form-validation" method="post" action="dashboard.php" >

            <div class="form-title-row">
                <h1>Complain Details</h1>
            </div>

            <div class="form-row form-input-title-row">

                <label>
                    <span>Meter Number</span>
                    <input type="number" name="acc_no">
                </label>

                <!--
                    Add these three elements to every form row. They will be shown by the
                    .form-valid-data and .form-invalid-data classes (see the JS for an example).
                -->

                <span class="form-valid-data-sign"><i class="fa fa-check"></i></span> 
                <span class="form-invalid-data-sign"><i class="fa fa-close"></i></span>
                <span class="form-invalid-data-info"></span>

            </div>

            

            <div class="form-row form-select-category">

                <label>
                    <span>Category</span>
                    <select name="category" value="select Issue">
                       <option>
                        <?php 
                            // $sql1 = "SELECT *FROM issues ";
                            // $query_run = mysqli_query($con, $sql1);
                            // $issue = $row[1];
                            
                            // echo $issue;

                            $sql1 = "SELECT id, type FROM issues";
                            $result = $con->query($sql1);
                            
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
            
             <!--            <option>complain Category</option>
                        <option>No water</option>
                        <option>Water Quality</option>
                        <option>Meter problems</option>
                        <option>Billing</option>
						<option>Vandalism</option> -->
                    </select>
                </label>

            </div>

            <div class="form-row form-input-caption-row">

                <label>
                    <span>Region</span>
					 <select name="location" >
                        <option>location</option>
                        <option>Skuta</option>
                        <option>Ruringu</option>
                        <option>Kamakwa</option>
                        <option>Mweiga</option>
						<option>Kimathi</option>
                    </select>
                </label>

                <span class="form-valid-data-sign"><i class="fa fa-check"></i></span> 
                <span class="form-invalid-data-sign"><i class="fa fa-close"></i></span>
                <span class="form-invalid-data-info"></span><br>


            <div class="form-row form-input-price-row"><br>

                <label>
                    <span>Message</span>
					
                    <textarea name="message" id="description" cols="30" rows="10" style="margin: 0px; width: 221px; height: -268px;"></textarea>
					
                </label><br>

                <span class="form-valid-data-sign"><i class="fa fa-check"></i></span> 
                <span class="form-invalid-data-sign"><i class="fa fa-close"></i></span>
                <span class="form-invalid-data-info"></span><br>

            </div>



            <div class="form-row">

                <input name = "SUBMIT" type="submit" value = "SUBMIT" />
				<input name = "RESET" type="reset" value = "CANCEL" />
				<a href = "portal.php"><input name = "BACK" type="back" value = "BACK" style = "background-color: grey; width: 484px; margin: 0px; color: white; text-align: center;" /></a>
                

            </div> 
        </form> 
        <?php

          if(isset($_POST['SUBMIT']))
                {       
                        $category = $_POST['category'];
                        //$pin = '20';

                         // ======================================================
                         //                GET PIN AUOMATICALLY
                         // ======================================================
                         //$sq = "SELECT TOP 1 pin FROM departments WHERE department = $category AND status = 0";
                         $sq = "SELECT pin FROM departments WHERE department = '$category' AND status = 0 LIMIT 1";
                         //$rn = mysqli_query($con, $sq);
                            $rest = mysqli_query($con, $sq);
                            if (!$rest) {
                            printf("Error: %s\n", mysqli_error($con));
                            exit();
                        }

                        // $pin = mysqli_fetch_array($rest);
                        $pin = mysqli_fetch_array($rest);
                        $pin = $pin["pin"];
                     


                        $acc_no = $_POST['acc_no'];
                        $location = $_POST['location'];
                        $message = $_POST['message'];
                        

                        // select officer ID from  depertments table where department = $category && status = 0

                       


                        $sql = "INSERT INTO complains (acc_pin, category, region, message,issue_id,officer)
                        VALUES ('$acc_no', '$category', '$location', '$message',2,'$pin')";
                        $query_run = mysqli_query($con, $sql);

                          //   if (!$query_run) {
                          //   printf("Error: %s\n", mysqli_error($con));
                          //   exit();
                          // }


                        $sql3 = "UPDATE departments SET status=1 WHERE pin = '$pin'";
                        $ruun = mysqli_query($con, $sql3);
                         // if (!$ruun) {
                         //    printf("Error: %s\n", mysqli_error($con));
                         //    exit();
                         //  }

						
                        if($query_run)
					        {
						echo '<script type="text/javascript"> alert("Complain launched Successfully...go back to portal ") </script>';
					        }
					    else
					        {
						echo '<script type="text/javascript"> alert("Error!!") </script>';
					        }
                    
				}
				else
				{
					echo '<script type="text/javascript"> alert("") </script>';
				}	


        ?>

    </div> 

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
 
        // Here is how to show an error message next to a form field 
        var errorField = $('.form-input-name-row');  
        errorField.addClass('form-invalid-data');
        errorField.find('.form-invalid-data-info').text('Please enter your name'); 
        var successField = $('.form-input-email-row');

        successField.addClass('form-valid-data');
    });

</script>

</body>

</html>
