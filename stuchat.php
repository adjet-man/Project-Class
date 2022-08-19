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
         $chatid= $_POST['chatid'];
         $name= $_POST['name'];
        $data = addslashes($_POST['data']);
      

        $query ="insert into chat(chatid,name,data) values( '$chatid','$name','$data')" ;

        $run = mysqli_query($conn,$query) or die(mysqli_error($conn));

        if ($run){
              header('Location: chat.php');
        }
        else{
            header("Location: chat.php?error=Error");
        exit();;
        }
    }
    else{
        header("Location: chat.php?error=Fields required");
        exit();
    }
 }

  

?>