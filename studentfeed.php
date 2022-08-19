<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Class</title>

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


           <li class="sidebar-item">
              <a href="ui-file-uploader.html" class='sidebar-link'>
                  <i class="bi bi-cloud-arrow-up-fill"></i>
                  <span>Project</span>
              </a>
          </li>

          <li class="sidebar-item active ">
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
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                             <p class="text-subtitle text-muted">View messages and feedback from students. Messages can be sent to students.</p>
                        </div>

                    </div>
                </div>

                <section id="basic-modals">
                    <div class="row">

                     <div class="col-md-6 col-12">
                       <h4>Send Message</h4>

                          <div class="col-md-8 form-group">
                            <fieldset class="form-group">
                                <select class="form-select" id="basicSelect">
                                    <option>Select student</option>
                                    <option>Stuart Marliyn - 46000000</option>
                                    <option>Blade Runner</option>
                                    <option>Thor Ragnarok</option>
                                </select>
                            </fieldset>
                          </div>



                          <div class="col-md-8 form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                rows="3" placeholder="Send Message"></textarea>
                          </div>

                            <button type="button" class="btn btn-outline-primary block">
                                Send
                            </button>


                      </div>





                        <div class="col-md-6 col-12">
                            <h4>View message</h4>
                            <div class="card">

                                <div class="card-content">
                                    <div class="card-body">





                                        <!-- button trigger for  Vertically Centered modal -->
                                        <button type="button" class="btn btn-outline-primary block"
                                            data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                            Check Messages
                                        </button>
                                        <!-- Vertically Centered modal Modal -->
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Vertically
                                                            Centered
                                                        </h5>
                                                        <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>
                                                            Croissant jelly-o halvah chocolate sesame snaps. Brownie
                                                            caramels candy
                                                            canes chocolate cake
                                                            marshmallow icing lollipop I love. Gummies macaroon donut
                                                            caramels
                                                            biscuit topping danish.
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Close</span>
                                                        </button>
                                                        <button type="button" class="btn btn-primary ml-1"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Accept</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

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
