<?php
include 'connection.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Time Table</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">RHA Solutions</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="login.html">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Home</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Serivces</div>
                        <a class="nav-link collapsed" href="timetable.html">
                            Time Table
                        </a>
                        <a class="nav-link collapsed" href="datesheet.html">
                            Datesheet
                        </a>
                        <a class="nav-link collapsed" href="database.html">
                            Find Record
                        </a>
                        <div class="sb-sidenav-menu-heading">Contact</div>
                        <a class="nav-link" href="feedback.html">
                            <div class="sb-nav-link-icon"><i class="feedback-menu"></i></div>
                            Feedback
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Admin
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Time Table</h1>
                    <!-- / College Timetable -->
<div class='tab'>
    <table border='0' cellpadding='0' cellspacing='0'>
      <tr class='days'>
        <th></th>
        <th>Monday</th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thursday</th>
        <th>Friday</th>
      </tr>
      <tr>
        <td class='time'>9.00</td>
        <td class='cs335 blue' data-tooltip='Software Engineering &amp; Software Process'>CS335 [JH1]</td>
        <td class='cs426 purple' data-tooltip='Computer Graphics'>CS426 [CS1]</td>
        <td></td>
        <td></td>
        <td>-</td>
      </tr>
      <tr>
        <td class='time'>10.00</td>
        <td></td>
        <td class='cs335 blue lab' data-tooltip='Software Engineering &amp; Software Process'>CS335 [Lab]</td>
        <td class='md352 green' data-tooltip='Multimedia Production &amp; Management'>MD352 [Kairos]</td>
        <td></td>
        <td>-</td>
      </tr>
      <tr>
        <td class='time'>11.00</td>
        <td></td>
        <td class='cs335 blue lab' data-tooltip='Software Engineering &amp; Software Process'>CS335 [Lab]</td>
        <td class='md352 green' data-tooltip='Multimedia Production &amp; Management'>MD352 [Kairos]</td>
        <td class='cs240 orange' data-tooltip='Operating Systems'>CS240 [CH]</td>
        <td>-</td>
      </tr>
      <tr>
        <td class='time'>12.00</td>
        <td></td>
        <td class='md303 navy' data-tooltip='Media &amp; Globalisation'>MD303 [CS2]</td>
        <td class='md313 red' data-tooltip='Special Topic: Multiculturalism &amp; Nationalism'>MD313 [Iontas]</td>
        <td></td>
        <td>-</td>
      </tr>
      <tr>
        <td class='time'>13.00</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>-</td>
      </tr>
      <tr>
        <td class='time'>14.00</td>
        <td></td>
        <td></td>
        <td class='cs426 purple' data-tooltip='Computer Graphics'>CS426 [CS2]</td>
        <td class='cs240 orange' data-tooltip='Operating Systems'>CS240 [TH1]</td>
        <td>-</td>
      </tr>
      <tr>
        <td class='time'>15.00</td>
        <td></td>
        <td></td>
        <td></td>
        <td class='cs240 orange lab' data-tooltip='Operating Systems'>CS240 [Lab]</td>
        <td>-</td>
      </tr>
      <tr>
        <td class='time'>16.00</td>
        <td></td>
        <td></td>
        <td></td>
        <td class='cs240 orange lab' data-tooltip='Operating Systems'>CS240 [Lab]</td>
        <td>-</td>
      </tr>
      <tr>
        <td class='time'>17.00</td>
        <td class='cs335 blue' data-tooltip='Software Engineering &amp; Software Process'>CS335 [TH1]</td>
        <td></td>
        <td></td>
        <td></td>
        <td>-</td>
      </tr>
    </table>
  </div>
=
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>