 <?php

 $server = "localhost";
 $username = "root";
 $password = "";
 $dbname = "projectclass" ;

 $conn = mysqli_connect($server , $username , $password , $dbname);

 if (isset($_POST['submit']))
 {
    if(!empty($_POST['data']) )
    {
        $messid = $_POST['messid'];
        $data = $_POST['data'];
      

        $query ="insert into message(messid,data) values('$messid','$data')" ;

        $run = mysqli_query($conn,$query) or die(mysqli_error());

        if ($run){
              header('Location: send.php');
        }
        else{
            header("Location: send.php?error=Error");
        exit();;
        }
    }
    else{
        header("Location: send.php?error=Fields required");
        exit();
    }
 }

  

?>