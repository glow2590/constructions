<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="view port" content="width =device-width,initial-scale=1">
	<title></title>
	 <!--bootstrap.css-->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!--font awesome css-->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!--designer final touches-->
    <link rel="stylesheet" href="css/SiteStyleSheets.css" />
       <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>

  

  <a href="#top" class="scroll-top">
  <i class="fas fa-angle-double-up fa-2x"></i>
</a>

<div class="top-header">

  <div class="info font-weight-bold ">
<i class="fas fa-clock ">07:00-16:00
</i>
<i class="fas fa-phone">720-434-8905 & 786-661-0977</i>
       <?php
          if (isset($_SESSION['userId'])) {
    echo '';
    }
    else{
      echo '<div class=" float-right">
<i class="fa fa-user"></i><a href="login.php#top-login">Login</a>/<a href="login.php#top-login">Register</a>
</div>
';
    }
      ?>
    
</div>
</div>

   <div class="warpper">
     <header>
       <nav>
         <div class="menu-icon">
          <i class="fa fa-bars fa-2x"></i>
        </div>
        <div class="logo">
logo
        </div>
        <div class="menu">
          <ul>

            <li> <a href="index.php">Home</a></li>
          <li> <a href="services.php#services">Services</a></li>
            <li> <a href="contact.php#contact-form">Contact us</a></li>
            <?php
            if (isset($_SESSION['userId'])) {
              echo '
           
            <li> <form action="includes/logout.inc.php" method="post">
                            <button type="submit" class="btn gray" name="logout-submit"  >Logout</button>


               </form></li> ';}?>
          </ul>

        </div>
      </nav>

     </header>
