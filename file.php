<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'projectclass');

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file

    $filename = $_FILES["myfile"]["name"];
    $fileid = $_POST['fileid']; 
    $inumber = $_POST['inumber'];  
    $section = $_POST['section']; 
    $comment = $_POST['comment'];    

   
     

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "Your file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] >  1000000000) { 
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (name,size,fileid,inumber, section,comment) VALUES ('$filename', $size,'$fileid','$inumber' , '$section' , '$comment')";
            if (mysqli_query($conn, $sql)) {

                 header('Location: project.php');
                

            }
        } else {
            echo "Failed to upload file.";
        }
    }
}

?>