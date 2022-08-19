<?php 
session_start();

if (isset($_SESSION['supid']) && isset($_SESSION['username'])) {
?>


<?php include 'file.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Class</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
      <div id="sidebar" class="active">
          <div class="sidebar-wrapper active">
  <div class="sidebar-header">
      <div class="d-flex justify-content-between">
          <div class="logo">
            <p style="color:#435ebe">Project Class</p>
           </div>
          <div class="toggler">
              <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
          </div>
      </div>
  </div>
  <div class="sidebar-menu">
      <ul class="menu">
           

            <li class="sidebar-item">
              <a href="adminlogin.php">
               
                  <span style="color: red; font-size:25px"><?php echo $_SESSION['username']; ?> | Logout</span>
              </a>
          </li>


           <li class="sidebar-item active">
              <a href="table-datatable.php" class='sidebar-link'>
                  <i class="bi bi-cloud-arrow-up-fill"></i>
                  <span>Projects</span>
              </a>
          </li>

          <li class="sidebar-item">
              <a href="send.php" class='sidebar-link'>
                   <i class="bi bi-hexagon-fill"></i>
                  <span>General Message</span>
              </a>
          </li>

           <li class="sidebar-item">
              <a href="studentchat.php" class='sidebar-link'>
                   <i class="bi bi-chat-dots-fill"></i>
                  <span>Chat</span>
              </a>
          </li>

           <li class="sidebar-item">
              <a href="feedback.php" class='sidebar-link'>
                   <i class="bi bi-bar-chart-fill"></i>
                  <span>Feedback</span>
              </a>
          </li>


      </ul>
  </div>
  <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
      </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">

                            <p class="text-subtitle text-muted">Click to download project and send feedback</p>
                        </div>

                    </div>
                </div>
                <section class="section">
                    <div class="card">

                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <td hidden>ID</td>
                                        <th>Index Number</th>
                                        <th>Project Section</th>
                                        <th>Project Name</th>
                                         <th></th>
                                        <th>Download file</th>
                                        <th>Send Feedback</th>

                                    </tr>
                                </thead>
                                <tbody>
       <?php

                                                $conn = mysqli_connect("localhost", "root", "", "projectclass" );
                                                $sql = "select * FROM files where fileid = '" . $_SESSION['supid'] . "'";
                                                $result = $conn -> query($sql);
                                                ?>
                                                 
                                                
    

                                               
                                                 <?php
                                                 $i=0;
                                                 if ($result ->num_rows > 0)
                                                    {
                                                 while($row = mysqli_fetch_array($result)) {
                                                    if($i%2==0)
                                                 $classname="evenRow";
                                                 else
                                                 $classname="oddRow";
                                                    ?>
                                    <tr>

                                        <td hidden><?php echo $row['id']; ?></td>
                                        <td> <?php echo $row['inumber']; ?></td>
                                        <td> <?php echo $row['section']; ?></td>
                                        <td> <?php echo $row['comment']; ?></td>
                                        <td> <?php echo $row['name']; ?></td>
                                        

                                        <td><a href="uploads/<?php echo $row['name'] ?>" target="_blank"><u>Download</u></a></td>
                                        <td><a href="feedback.php"><u>Send feedback</u></a></td>

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
                                    
                                     

                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                          <p>4620218</p>
                    </div>
                    <div class="float-end">
                         <p>Adom Stuart</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>


    <script src="assets/js/main.js"></script>
</body>

</html>

<?php 
}else{
     header("Location: adminlogin.php");
     exit();
}
 ?>
