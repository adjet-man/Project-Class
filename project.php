<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
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

<link rel="stylesheet" href="assets/vendors/toastify/toastify.css">
<link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">

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
              <a href="loguser.php">
               
                  <span style="color: red; font-size:25px"><?php echo $_SESSION['username']; ?> | Logout</span>
              </a>
          </li>

            
           <li class="sidebar-item active">
              <a href="project.php" class='sidebar-link'>
                  <i class="bi bi-cloud-arrow-up-fill"></i>
                  <span>Project</span>
              </a>
          </li>

          <li class="sidebar-item">
              <a href="message.php" class='sidebar-link'>
                   <i class="bi bi-bar-chart-fill"></i>
                  <span>Progress</span>
              </a>
          </li>

          <li class="sidebar-item">
              <a href="annoucement.php" class='sidebar-link'>
                   <i class="bi bi-hexagon-fill"></i>
                  <span>Annoucement</span>
              </a>
          </li>

          <li class="sidebar-item">
              <a href="chat.php" class='sidebar-link'>
                   <i class="bi bi-chat-dots-fill"></i>
                  <span>Chat</span>
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

                <p class="text-subtitle text-muted">Upload the section based on your project.</p>
            </div>

        </div>
    </div>
    <section class="section">
        <div class="row">

          <div class="card-body">
              <form action="file.php" method="post" enctype="multipart/form-data" class="form form-horizontal" >
                  <div class="form-body">
                      <div class="row">

                        <input hidden type="text" name="fileid" value="<?php echo $_SESSION['id']; ?>">

                          <div class="col-md-8 form-group">
                              <input type="text"   class="form-control"
                                  name="inumber" placeholder="Index Number">
                          </div>

                          <div class="col-md-8 form-group">
                              <input type="text"   class="form-control"
                                  name="section" placeholder="Project Section">
                          </div>

                          <div class="col-md-8 form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                rows="3" name="comment" placeholder="Comment about project"></textarea>
                          </div>

                        <div class="col-md-8 form-group">
                         <input type="file" name="myfile" class="form-control"> 
                     </div>

                        </div>



            <div class="col-md-8">
                
                <div style="margin:0 auto;text-align:center">

                <!-- Div align in the middle -->
                 <div style="margin-left:auto;margin-right:auto;text-align:center">
                   <button type="submit" class="btn btn-outline-primary block" name="save" style="width:3cm">
                       Send
                   </button>
                </div>

                 </div>

            </div>
              </form>

          <!--<div class="col-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">With Validation</h5>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p class="card-text">Using the basic table up, upload here to see how
                                <code>.with-validation-filepond</code>-based basic file uploader look. You can use
                                <a href="https://pqina.nl/filepond/docs/patterns/plugins/file-validate-size/#properties" target="_blank">see here</a>
                                or <code>required (to make your input required), data-max-file-size (to limit your input file size),
                                data-max-files (to limit your uploaded files), etc (start with data-)</code> attribute too to implement validation.
                            </p>
                             File uploader with validation
                            <input type="file" class="with-validation-filepond" required multiple data-max-file-size="1MB" data-max-files="3">
                        </div>
                    </div>
                </div>
            </div> --->




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

<!-- filepond validation -->
<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>

<!-- image editor -->
<script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-filter/dist/filepond-plugin-image-filter.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js"></script>

<!-- toastify -->
<script src="assets/vendors/toastify/toastify.js"></script>

<!-- filepond -->
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
<script>
    // register desired plugins...
	FilePond.registerPlugin(
        // validates the size of the file...
        FilePondPluginFileValidateSize,
        // validates the file type...
        FilePondPluginFileValidateType,

        // calculates & dds cropping info based on the input image dimensions and the set crop ratio...
        FilePondPluginImageCrop,
        // preview the image file type...
        FilePondPluginImagePreview,
        // filter the image file
        FilePondPluginImageFilter,
        // corrects mobile image orientation...
        FilePondPluginImageExifOrientation,
        // calculates & adds resize information...
        FilePondPluginImageResize,
    );

    // Filepond: Basic
    FilePond.create( document.querySelector('.basic-filepond'), {
        allowImagePreview: false,
        allowMultiple: false,
        allowFileEncode: false,
        required: false
    });

    // Filepond: Multiple Files
    FilePond.create( document.querySelector('.multiple-files-filepond'), {
        allowImagePreview: false,
        allowMultiple: true,
        allowFileEncode: false,
        required: false
    });












</script>

    <script src="assets/js/main.js"></script>
</body>

</html>


<?php 
}else{
     header("Location: login-admin.php");
     exit();
}
 ?>

