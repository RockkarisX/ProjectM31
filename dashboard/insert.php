<?php
 $mysqlconn = mysqli_connect("localhost","root","") or die("not connected");
 $dbselect = mysqli_select_db($mysqlconn, "complains") or die ("database not found !!");

 // $msqli_query;
 $upload_to_dir = 'images/';

 $imagename = $_FILES['file']['name']; //Filename picked from the form, make sure name = "file"
 $imagelocation = $upload_to_dir . $imagename;
 $type = $_FILES['file']['type'];//File type picked from the form, make sure name = "file"
 $folder = "images/";

 $acc_no = $_POST['acc_no'];
 $category = $_POST['category'];
 $message = $_POST['message'];
 $location = $_POST['location'];
 //image = $_POST["imagelocation"];


 

  if(move_uploaded_file($_FILES['file']['tmp_name'],$imagelocation)){
        echo "check the image in the images directory";
   }else{
        echo "image was not uploaded";
    }

 


  $sql = "INSERT INTO complains(acc_no, category, message, location) VALUES ('$acc_no','$category','$message','$location')";
  
  if(!mysqli_query($mysqlconn,$sql))
  {
      echo 'Not inserted !';
  }
 else {
     echo 'Data Inserted successfully !';
 }

header("refresh:2; url=dashboard.php" )
?>