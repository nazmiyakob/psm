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
              
              <?php 
                mysql_connect("localhost","root","");
                mysql_select_db("e_rented_house");
                
                $query1=mysql_query("SELECT * FROM residential Where status='PENDING'");

                echo "<p><h4><center> PENDING REQUEST </center></h4>
                <p>
                <table border='10' text-align='center' width='100%'>
                <tr>
                  <th><center><h3> Residential </center></th>
                  <th><center><h3> Price </center></th>
                  <th><center><h3> Furnishing </center></th>
                  <th><center><h3> Location </center></th>
                  <th><center><h3> Status </center></th>
                </tr>
                </div></div>";

                while($query2=mysql_fetch_array($query1))
                {
                  echo "<form action='' method='post'>";
                  echo"<tr height='30px' class='color2'>";
                  echo "<td align='center' valign='top'>&nbsp;" . $query2['residential_type'] . "</td>";
                  echo "<td align='center' valign='top'>&nbsp;RM " . $query2['residential_price'] . "</td>";
                  echo "<td align='center' valign='top'>&nbsp;" . $query2['furnishing'] . "</td>";
                  echo "<td align='center' valign='top'>&nbsp;" . $query2['res_cities'] . ", " . $query2['res_state'] . "</td>";
                  echo "<td align='center'>&nbsp;" . "<button class='button' type='submit' span='2' name='btn_accept'>ACCEPT</button><button class='button' type='submit' span='2' name='btn_reject'>REJECT</button>" . "<input type='hidden' name='residential_id' value=".$query2['residential_id']. "></td>";
                  echo "</td>";
                  echo "</tr>";
                  echo "</form>";
                }
                
                echo "</table>";
              ?>

              <?php 
                mysql_connect("localhost","root","");
                mysql_select_db("e_rented_house");
                
                $query1=mysql_query("SELECT * FROM residential Where status='REJECT'");

                echo "<p><br><p><h4><center> REJECTED REQUEST </center></h4>
                <p>
                <table border='10' text-align='center' width='100%'>
                <tr>
                  <th><center><h3> Details </center></th>
                  <th><center><h3> Residential </center></th>
                  <th><center><h3> Price </center></th>
                  <th><center><h3> Furnishing </center></th>
                  <th><center><h3> Location </center></th>
                  <th><center><h3> Reason </center></th>
                </tr>
                </div></div>";

                while($query2=mysql_fetch_array($query1))
                {
                  echo "<form action='' method='post'>";
                  echo "";
                  echo"<tr height='30px' class='color2'>";
                  echo "<td align='center' valign='top'>&nbsp;<a href='details.php'>Details</a></td>";
                  echo "<td align='center' valign='top'>&nbsp;" . $query2['residential_type'] . "</td>";
                  echo "<td align='center' valign='top'>&nbsp;RM " . $query2['residential_price'] . "</td>";
                  echo "<td align='center' valign='top'>&nbsp;" . $query2['furnishing'] . "</td>";
                  echo "<td align='center' valign='top'>&nbsp;" . $query2['res_cities'] . ", " . $query2['res_state'] . "</td>";
                  echo "<td align='center' valign='top'>&nbsp;" . $query2['reject_because'] . "</td>";
                  echo "</form>";
                  echo "</td>";
                  echo "</tr>";
                }
                
                echo "</table>";
              ?>
            </div>

            <?php
              if(isset($_POST['btn_accept']))
              {
                $username = "root";
                $password = "";
                $hostname = "localhost";  
                $con = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
                mysql_select_db("e_rented_house", $con);
                
                $residential_id = $_POST['residential_id'];

                  $sql = "UPDATE residential SET status='Accept' WHERE residential_id='$residential_id'";
                  echo "<script> alert('ACCEPTED'); window.location.href='approvement.php?residential_id=".$residential_id."'; </script>";

                mysql_query($sql,$con);
                mysql_close($con);

              }
            ?>

            <?php
              if(isset($_POST['btn_reject']))
              {
                $username = "root";
                $password = "";
                $hostname = "localhost";  
                $con = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
                mysql_select_db("e_rented_house", $con);
                
                $residential_id = $_POST['residential_id'];

                  $sql = "UPDATE residential SET status='Reject' WHERE residential_id='$residential_id'";
                  echo "<script> alert('REJECTED!');  window.location.href='reason.php?residential_id=".$residential_id."'; </script>";
                  setcookie('residential_id',"$residential_id");
                  session_start();  
                  header("location:reason.php");

                mysql_query($sql,$con);
                mysql_close($con);

              }
            ?>


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