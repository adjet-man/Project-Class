<?php include 'file.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

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


           <li class="sidebar-item active">
              <a href="ui-file-uploader.html" class='sidebar-link'>
                  <i class="bi bi-cloud-arrow-up-fill"></i>
                  <span>Projects</span>
              </a>
          </li>

          <li class="sidebar-item">
              <a href="table.html" class='sidebar-link'>
                   <i class="bi bi-chat-dots-fill"></i>
                  <span>Student Feedback</span>
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


                <!-- Basic Tables start -->
                <section class="section">
                    <div class="row" id="basic-table">
                        <div class="col-12 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Project</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">

                                        <!-- Table with outer spacing -->
                                        <div class="table-responsive">
                                            <table class="table table-lg">
                                                <thead>
                                                    <tr>
                                                        <th> </th>
                                                        <th> </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-bold-500" style="color:blue">Index Number</td>
                                                        <td>$15/hr</td>


                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold-500" style="color:blue">Project Section</td>
                                                        <td>$13/hr</td>


                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold-500" style="color:blue">Comment</td>
                                                        <td>$15/hr</td>


                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold-500" style="color:blue">Data</td>
                                                        <td>$15/hr</td>


                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>


                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </section>

                <section class="section">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Send Feedback</h4>
                                </div>
                                <div class="card-body">
                                     <textarea style="width:14cm; height:3cm"></textarea>
                                     <button type="button" class="btn btn-outline-primary block" style="width:14cm; background-color:#435ebe; color:white">
                                         Send
                                     </button>

                                </div>

                            </div>
                        </div>
                    </div>

                </section>
                <!-- Basic Tables end -->

                <!--  Inverse table start -->

            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="http://ahmadsaugi.com">A. Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/main.js"></script>


</body>

</html>
