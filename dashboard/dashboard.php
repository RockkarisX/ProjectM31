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

        <form class="form-validation" method="post" action="insert.php" enctype="multipart/form-data">

            <div class="form-title-row">
                <h1>Complain Details</h1>
            </div>

            <div class="form-row form-input-title-row">

                <label>
                    <span>Account Number</span>
                    <input type="text" name="acc_no">
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
                    <select name="category" >
                        <option>complain Category</option>
                        <option>No water</option>
                        <option>Water Quality</option>
                        <option>Meter problems</option>
                        <option>Billing</option>
                    </select>
                </label>

            </div>

            <div class="form-row form-input-caption-row">

                <label>
                    <span>Location/Area</span>
                    <input type="text" name="location" value=" " placeholder="brief Description">
                </label>

                <span class="form-valid-data-sign"><i class="fa fa-check"></i></span> 
                <span class="form-invalid-data-sign"><i class="fa fa-close"></i></span>
                <span class="form-invalid-data-info"></span>


            <div class="form-row form-input-price-row">

                <label>
                    <span>Meassage</span>
                    <textarea name="message" id="description" cols="30" rows="10" style="margin: 0px; width: 221px; height: 268px;"></textarea>
                </label>

                <span class="form-valid-data-sign"><i class="fa fa-check"></i></span> 
                <span class="form-invalid-data-sign"><i class="fa fa-close"></i></span>
                <span class="form-invalid-data-info"></span>

            </div>



            <div class="form-row">

                <button type="submit" >SUBMIT</button>

            </div> 
        </form> 
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
