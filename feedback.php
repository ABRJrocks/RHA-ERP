<?php
session_start();
error_reporting(0);
if($_SESSION["fname"]) { 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
<?php include ('header.php'); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Feedback</h1>
                    <div class="text-center">
                      <h2>Get in touch</h2>
                      <p class="lead">Questions? Do not hesitate to contact us.</p>
                    </div>
                    <div class="row justify-content-center my-5">
                      <div class="col-lg-6">
                        <form action="">
                          <label for="email" class="form-label">Email:</label>
                          <input
                            type="email"
                            id="email"
                            placeholder="my@email.com"
                            class="form-control"
                          />
                          <div class="form-floating my-5">
                            <input
                              type="name"
                              id="name"
                              placeholder="e.g. Dawid"
                              class="form-control"
                            />
                            <label for="name" class="form-label">Name:</label>
                          </div>
                          <label for="subject" class="form=label">Subject</label>
                          <select name="subject" id="subject" class="form-select">
                            <option value="pricing">Registring Problem</option>
                            <option value="technical" selected>Technical question</option>
                            <option value="other">Other</option>
                          </select>
              
                          <div class="form-floating my-5">
                            <textarea
                              name="query"
                              id="query"
                              style="height: 150px"
                              class="form-control"
                              placeholder="Write a message"
                            ></textarea>
              
                            <label for="query">Write a message</label>
                          </div>
              
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">Send!</button>
                          </div>
                        </form>
                      </div>
                    </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; RHA Solutions 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <?php 
}
else {
        include ('login.php');
}
 ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
</body>

</html>