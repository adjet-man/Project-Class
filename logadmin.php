 <?php 
session_start(); 
 


 $conn = mysqli_connect('localhost', 'root', '', 'projectclass');


if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['username']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: login.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM supervisor WHERE username='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['supid'] = $row['supid'];            	 
            	 
            	header("Location: table-datatable.php");
		        exit();
            }else{
				header("Location: adminlogin.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: adminlogin.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: logadmin.php");
	exit();
}