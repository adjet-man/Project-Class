 
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
   <?php

                                                $conn = mysqli_connect("localhost", "root", "", "projectclass" );
                                                $sql = "select * FROM files";
                                                $result = $conn -> query($sql);
                                                ?>
                                                 
                                                
    

                                               
                                                 <?php
                                                 $i=0;
                                                 if ($result ->num_rows > 0)
                                                    {
                                                 while($row = mysqli_fetch_array($result)) {
                                                    ?>
                                                  <tr class="tr-shadow">
                                                  <td hidden><?php echo $row["id"]; ?></td>
                                                  <td><?php echo $row["inumber"]; ?></td>
                                                  

                                                 <td><a href="connect.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
                                                 <td><a href="edit.php?student=<?php echo $row["student"]; ?>">Update</a></td>
                                                 </tr>
                                                 <?php
                                                 $i++;
                                                 }
                                                 ?>
                                                   
                                                     
                                                <?php 
                                                }

                                                else {
                                                    echo "No results";

                                                }
                                                $conn ->close();

                                                ?> 
                                                

	
	</body>
	</html>