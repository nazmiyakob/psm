<html lang="en">
<head>
<title>E-Rented House</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script src="js/jquery-1.6.js" ></script>
<script src="js/cufon-yui.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/Didact_Gothic_400.font.js"></script>
<script src="js/jquery.nivo.slider.pack.js"></script>
<script src="js/atooltip.jquery.js"></script>
<script src="js/jquery.jqtransform.js" ></script>
<script src="js/script.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<style type="text/css">.bg{behavior:url("js/PIE.htc");}</style>
<![endif]aaaaaaaaaaaaa-->

    <?php
      $ic_no = $_COOKIE['ic_no'];
      //$residential_id = $_COOKIE['residential_id'];
      
      

      session_start();
      include_once('connect.php');

      // $sqlSlc = "SELECT * from residential ";
      // $querySlc = mysqli_query($con,$sqlSlc) or die(mysqli_error($con));
      // $resultData = mysqli_fetch_assoc($querySlc);

      // echo $resultData['residential_id'];

    ?>


</head>
<body id="page1">
<div class="body1">
  <div class="main">
    <!-- header -->
    <header>
      <img src="images/logo_img.png" style="height: 40%">
      <nav>
        <ul id="menu">
          <li><a href="admin.php">Home</a></li>
          <li class="menu_active" id="menu_active"><a href="approvement.php">Approval</a></li>
          <li class="menu_active"><a href="report.php">Report</a></li>
          <li class="menu_active"><a href="register.php">Register</a></li>
          <li class="menu_active"><a href="profile.php">Profile</a></li>
          <li class="endr" ><a href="logout.php">LogOut</a></li>
        </ul>
      </nav>
    </header>
    <!-- / header -->
  </div>
</div>
<!-- content -->
<div class="body2" style="height: 100%;">
  <div class="main">
    <section id="content">
      <div class="wrapper" style="height: 100%;">
        <article>
          <form id="form_1" action="#" method="post" style="height: 90%;">
            <div class="pad1">
              <?php 
                mysql_connect("localhost","root","");
                mysql_select_db("e_rented_house");

                $sql = mysql_query("SELECT * FROM user WHERE ic_no='$ic_no'");

                $row=mysql_fetch_array($sql);

                $fullname = $row['fullname'];

                echo "<h1 align='right'>$fullname</h1>";

              ?>

               <h3><center> REASON FOR REJECT </center></h3>
                  <form method="post">
                    <div class="row"> Reason :<br>
                      <textarea  rows="10" cols="100" name="reject_because" required="required"></textarea>
                      <input class="button" type="submit" name="Submit" value="Submit">
                    </div>
                  </form>
            </div>
        </div>
          </form>
        </article>
      </div>
    </section>
  </div>
</div>

<script>Cufon.now();</script>
<script>
$(window).load(function () {
    $('#slider').nivoSlider({
        effect: 'sliceUpDown', //Specify sets like: 'fold,fade,sliceDown, sliceDownLeft, sliceUp, sliceUpLeft, sliceUpDown, sliceUpDownLeft'
        slices: 17,
        animSpeed: 500,
        pauseTime: 6000,
        startSlide: 0, //Set starting Slide (0 index)
        directionNav: false, //Next & Prev
        directionNavHide: false, //Only show on hover
        controlNav: true, //1,2,3...
        controlNavThumbs: false, //Use thumbnails for Control Nav
        controlNavThumbsFromRel: false, //Use image rel for thumbs
        controlNavThumbsSearch: '.jpg', //Replace this with...
        controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
        keyboardNav: true, //Use left & right arrows
        pauseOnHover: true, //Stop animation while hovering
        manualAdvance: false, //Force manual transitions
        captionOpacity: 1, //Universal caption opacity
        beforeChange: function () {
            $('.nivo-caption').animate({
                bottom: '-110'
            }, 400, 'easeInBack')
        },
        afterChange: function () {
            Cufon.refresh();
            $('.nivo-caption').animate({
                bottom: '-20'
            }, 400, 'easeOutBack')
        },
        slideshowEnd: function () {} //Triggers after all slides have been shown
    });
    Cufon.refresh();
});
</script>
</body>
</html>

<?php
$residential_id = $_GET["residential_id"];
$rejectBecause = $_POST['reject_because'];

if(isset($_POST['Submit']))
{

  $username = "root";
  $password = "";
  $hostname = "localhost";
  $database = "e_rented_house";

  global $residential_id, $rejectBecause;

  echo var_dump($residential_id);
  $con = mysqli_connect($hostname, $username, $password, $database) or die("Could not connect to database");

  $sql = "UPDATE residential SET reject_because = '".$rejectBecause."' WHERE residential_id = ".$residential_id;

  if (mysqli_query($con, $sql)) 
  {
   echo "<script type='text/javascript'
  alert('Reason Saved!');
  window.location.href='approvement.php';
  </script>";
  }
  
  else
  {
    echo "<script type='text/javascript'
  alert('Fuck!');
  window.location.href='approvement.php';
  </script>";
  } 

  echo "<script type='text/javascript'
  alert('Reason Saved!');
  window.location.href='approvement.php';
  </script>";
}

  

?>