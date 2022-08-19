<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'project');

 if(isset($_POST['submit']))
{   

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $stud = validate($_POST['stud']);

     
    $sql = "UPDATE `students` SET feedback='".$_POST['feedback']."' WHERE `students`.`fullname` = '$stud'";

    if (mysqli_query($conn, $sql)) {
         header("Location: table-datable.php");
     } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
     }
     mysqli_close($conn);
}

 ?>