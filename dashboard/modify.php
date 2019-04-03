<?php
 
 $mysqlconn = mysqli_connect("localhost","root","") or die("not connected");
 $dbselect = mysqli_select_db($mysqlconn, "jonka") or die ("database not found !!");
?>

<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Delete Property</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-login.css">

</head>


	<header>
        <h1><strong>Jonka Venture</strong>  Property Management <strong>Dashboard</strong></h1>
        <a href="#">Dashboard</a>
    </header>

    <ul>
        <li><a href="dashboard.php">Add Property</a></li>
        <li><a href="delete.php">Remove Property</a></li>
        <li><a href="modify.php">Modify Entries</a></li>  <br> <br>
    </ul>
<div>
    <div style = "text-align:center; float:left;">
 
       <!-- You only need this form and the form-login.css -->  

            <form class="form-login" method="get" action="#" enctype="multipart/form-data">

                      <?php 
                       echo ' 
                       <table id = "t01">
                         <style>
                            table#t01 {
                            width: 100%; 
                            background-color: #f1f1c1;
                            }
                            table#t01 tr:nth-child(even) {
                                    background-color: #eee;
                                }
                                table#t01 tr:nth-child(odd) {
                                    background-color: #fff;
                                }
                                table#t01 th {
                                    color: white;
                                    background-color: black;
                                }
                            th { color: white; background-color: black; padding: 15px; border-collapse: collapse text-align: left;}
                            td { padding: 15px; border-collapse: collapse; text-align: left;}
                         </style>
                       <tr> 
                           <th>ID</th>
                           <th>Image</th>
                           <th>Title</th>  
                           <th>Price </th>
                           <th>Category</th>
                           <th>Caption</th>
                           <th>Description</th>
                           <th>Action</th>
                       </tr>  ';
                      ?>

                        <?php
                            $sql = "SELECT *FROM property;";
                            $result = mysqli_query($mysqlconn,$sql);
                            $resultCheck = mysqli_num_rows($result);

                            if($resultCheck > 0) {
                                while($row = mysqli_fetch_assoc($result)){
                                    ?> 
                                    
                                        <?php 
                                            

                                       
                                        echo '<tr>'; 
                                       // echo '<td>'. $row['ID']. '</td>';
                                       echo '<td>'. $row['ID'].'</td>'; 
                                        
                                        echo '<td> <img src="../dashboard/'.$row['image'].'" alt="jonka Property" width="150" height="80" /> </td>';
                                        
                                        echo '<td> <input type="text" name="title" value=" '.$row['Title'].'"> </td>';
                                        //echo '<td>'.$row['Title']. '</td>';
                                        
                                        //echo '<td>'. $row['price']. '</td>';
                                        echo '<td> <input type="text" name="title" value=" '.$row['price'].'"> </td>'; 
                                       
                                        //echo '<td>'. $row['category'].'</td>';
                                        echo '<td> <input type="text" name="title" value=" '.$row['category'].'"> </td>'; 

                                        //echo '<td>'. $row['caption'].'</td>';
                                        echo '<td> <input type="text" name="title" value=" '.$row['caption'].'"> </td>';
                                        
                                        //echo '<td>'. $row['description'].'</td>';
                                        echo '<td> <textarea name=description style="margin: 0px; height: 82px; width: 168px; "text=" '.$row['description'].'"> </textarea></td>';
                                        
                                       echo '<td> ' ; 

                                    //    $sql = "UPDATE property SET lastname='Doe' WHERE id=2";
                                    //    if (mysqli_query($mysqlconn, $sql)) { 
                                    //     echo "Record updated successfully"; 
                                    //  } else { 
                                    //      echo "Error updating record: " . mysqli_error($conn); 
                                    //  }


                                       ?> <a href="del.php?id=<?php echo $row['ID']; ?>">Update</a> <?php
                                       echo '</td>';
                                         

                                       
                                       
  
                                        
                                        ?>
                                        
                                <?php
                            }
                        }
                        echo '</tr>';
                        echo '</table>';
                        ?>

                 
            </form> 
    </div>
    <br><br>
</div>

    


    
</body> 
</html>
