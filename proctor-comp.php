<?php
  session_start();
  if($_SESSION['status']!="Active")
  {
      header("location:index.html");
  } 
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<title>Parikshya | English Exam</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    
</head>

<body>

    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="proctordash.php" style="font-family: Poppins;font-size:20px;">Parikshya</a>
      <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">-->
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="proctordash.php">
                  <span data-feather="home"></span>
                  Profile <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="proctor-calendar.php">
                  <span data-feather="calendar"></span>
                  Calendar 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Exams
                </a>
              </li>

              
            </ul>
          </div>
        </nav>
      </div>
    </div>

     <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><br>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <br><br>
          <h1 class="h2">Welcome, <b><?php echo $_SESSION['User']; ?></b> </h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>
          <br><br>

          <div class="row">
           <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12">
             <center><img src="icons/test-passed.png" height="auto" width="60%">
             <!-- <f style="font-family: Roboto; letter-spacing: 1px; font-size: 2vw;"><b>English</b></f><br><br> 
              <button type="button" class="btn btn-info">View Details</button></center> -->
              <br><f style="font-family: Roboto; letter-spacing: 1px; font-size: 20px;"><b>Computer</b></f><br>
              </center> 
            
          </div>
          <div class="col-lg-7 col-md-4 col-sm-12 col-xs-12">
            <br><h3 style="font-family:Poppins;border-left: 4px solid lightgrey;">&nbsp;Exam Details</h3>
            <p style="letter-spacing: 1px;">Date: Jan 1st,2022</p>
            <p style="letter-spacing:1px">Time: 2pm</p><br>
            <button type="button" class="btn btn-info" onClick="parent.location='https://parikshya-41797.web.app/'" ><span data-feather="phone-outgoing"></span>&nbsp;&nbsp;Start Exam</button>
            </div>
        </div><br><br>
         
        
        <center>
        <!--<button type="button" class="btn btn-info" onClick="toggleFullscreen();document.getElementById('demo').style.display='block'">View Questions </button><br>

        <p id ="demo" style="display: none;">
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSc4ioz2G22t68eXADNCESrSMjt27Bg1REPsu2dfax--bwzXiQ/viewform?embedded=true" width="640" height="986" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
        </p>-->
        </center>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

       
    
   







          <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

</body>
</html>
