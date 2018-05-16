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
          <li id="menu_active"><a href="admin.php">Home</a></li>
          <li class="menu_active"><a href="approvement.php">Approval</a></li>
          <li class="menu_active"><a href="report.php">Report</a></li>
          <li class="menu_active"><a href="register.php">Register</a></li>
          <li class="endr" ><a href="logout.php">LogOut</a></li>
        </ul>
      </nav>
    </header>
    <!-- / header -->
  </div>
</div>
<!-- content -->
<div class="body2" style="height: 100%;">
  <div class="main" style="height: 100%;">
    <section id="content" style="height: 100%;">
      <div class="wrapper">
        <article>
          <form id="" action="#" method="post">
            <div class="pad1">
              <?php 
                mysql_connect("localhost","root","");
                mysql_select_db("e_rented_house");

                $sql = mysql_query("SELECT * FROM user WHERE ic_no='$ic_no'");

                $row=mysql_fetch_array($sql);

                $fullname = $row['fullname'];

                echo "<h1 align='right'>Welcome $fullname</h1>";

              ?>
              <?php
                mysql_connect("localhost","root","");
                mysql_select_db("e_rented_house");
                
                $query1=mysql_query("SELECT b.*, r.* FROM booking b, residential r where b.residential_id=r.residential_id");

                echo "<h2><center> BOOKING REQUEST </center></h2>
                <p><br>
                <table border='10' text-align='center' width='100%'> 
                <tr>
                  <th><center><h3> FULL NAME </center></th>
                  <th><center><h3> EMAIL </center></th>
                  <th><center><h3> CONTACT NUMBER </center></th>
                  <th><center><h3> RESIDENTIAL </center></th>
                  <th><center><h3> LOCATION</center></th>
                </tr>
                </div></div>";

                while($query2=mysql_fetch_array($query1))
                {
                  echo "";
                  echo"<tr height='30px'>";
                  echo "<td align='center' valign='top'>&nbsp;" . $query2['book_fullname'] . "</td>";
                  echo "<td align='center' valign='top'>&nbsp;" . $query2['book_email'] . "</td>";
                  echo "<td align='center' valign='top'>&nbsp;0" . $query2['book_phone_num'] . "</td>";
                  echo "<td align='center' valign='top'>&nbsp;" . $query2['residential_type'] . "</td>";
                  echo "<td align='center' valign='top'>&nbsp;" . $query2['res_cities'] . ", " . $query2['res_state'] . "</td>";
                  // echo "<td align='center'>&nbsp;" . "<form action='' method='POST'><button type='submit' class='button' span='2' formaction='user_delete.php?fullname=".$query2['fullname']."'>DELETE</button></form>";
                  echo "</td>";
                  echo "</tr>";
                }

              echo "</table>";

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