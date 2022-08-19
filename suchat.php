 <?php

 $server = "localhost";
 $username = "root";
 $password = "";
 $dbname = "projectclass" ;

 $conn = mysqli_connect($server , $username , $password , $dbname);

 if (isset($_POST['submit']))
 {
    if(!empty($_POST['name']) && !empty($_POST['data'])  )
    {
        //$chattid = $_POST['chattid'];
        $name = $_POST['name'];
        $data = $_POST['data'];
      

        $query ="insert into chat2(name,data) values('$name','$data')" ;

        $run = mysqli_query($conn,$query) or die(mysqli_error($conn));

        if ($run){
              header('Location: studentchat.php');
        }
        else{
            header("Location: studentchat.php?error=Error");
        exit();;
        }
    }
    else{
        header("Location: studentchat.php?error=Fields required");
        exit();
    }
 }

  

?>