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
<script src="js/Chart.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<style type="text/css">.bg{behavior:url("js/PIE.htc");}</style>
<![endif]aaaaaaaaaaaaa-->

    <?php
      $ic_no = $_COOKIE['ic_no'];
    ?>


</head>
<body id="page1">
<?php 
  $username = "root";
  $password = "";
  $hostname = "localhost";


  $con = mysql_connect($hostname, $username, $password) or die("Could not connect to database");

  mysql_select_db("e_rented_house", $con); 
?>
<div class="body1">
  <div class="main">
    <!-- header -->
    <header>
      <img src="images/logo_img.png" style="height: 40%">
      <nav>
        <ul id="menu">
          <li><a href="admin.php">Home</a></li>
          <li class="menu_active"><a href="approvement.php">Approval</a></li>
          <li class="menu_active" id="menu_active"><a href="report.php">Report</a></li>
          <li class="menu_active"><a href="register.php">Register</a></li>
          <li class="endr" ><a href="logout.php">LogOut</a></li>
        </ul>
      </nav>
    </header>
    <!-- / header -->
  </div>
</div>
<!-- content -->
<div class="body2">
  <div class="main">
    <section id="content">
      <div class="wrapper">
        
        <div class="pad1">
              <?php 
                mysql_connect("localhost","root","");
                mysql_select_db("e_rented_house");

                $sql = mysql_query("SELECT * FROM user WHERE ic_no='$ic_no'");

                $row=mysql_fetch_array($sql);

                $fullname = $row['fullname'];

                echo "<h1 align='right'>$fullname</h1>";

              ?>

              <center>
                <a href="rep_sell.php"><input type="button" name="Selling" value="Selling" class="button"></a>
                <a href="rep_rent.php"><input type="button" name="Renting" value="Renting" class="button"></a>
              </center>

            <center><h2>Selling</h2></center>
            <canvas id="chartSelling" width="700" height="300"></canvas>
            <?php 
              $sql101 = mysql_query("SELECT count(booking_id) from booking join residential on booking.residential_id = residential.residential_id where res_state ='Johor' and sales='Selling'");
              $query101=mysql_fetch_array($sql101);

              $sql102 = mysql_query("SELECT count(booking_id) from booking join residential on booking.residential_id = residential.residential_id where res_state ='Melaka' and sales='Selling'");
              $query102=mysql_fetch_array($sql102);

              $sql103 = mysql_query("SELECT count(booking_id) from booking join residential on booking.residential_id = residential.residential_id where res_state ='Negeri Sembilan' and sales='Selling'");
              $query103=mysql_fetch_array($sql103);
  
              $sql104 = mysql_query("SELECT count(booking_id) from booking join residential on booking.residential_id = residential.residential_id where res_state ='Selangor' and sales='Selling'");
              $query104=mysql_fetch_array($sql104);

              $sql105 = mysql_query("SELECT count(booking_id) from booking join residential on booking.residential_id = residential.residential_id where res_state ='Kuala Lumpur' and sales='Selling'");
              $query105=mysql_fetch_array($sql105);

              $sql106 = mysql_query("SELECT count(booking_id) from booking join residential on booking.residential_id = residential.residential_id where res_state ='Pahang' and sales='Selling'");
              $query106=mysql_fetch_array($sql106); 

              $sql107 = mysql_query("SELECT count(booking_id) from booking join residential on booking.residential_id = residential.residential_id where res_state ='Terengganu' and sales='Selling'");
              $query107=mysql_fetch_array($sql107);

              $sql108 = mysql_query("SELECT count(booking_id) from booking join residential on booking.residential_id = residential.residential_id where res_state ='Penang' and sales='Selling'");
              $query108=mysql_fetch_array($sql108);

              $sql109 = mysql_query("SELECT count(booking_id) from booking join residential on booking.residential_id = residential.residential_id where res_state ='Perak' and sales='Selling'");
              $query109=mysql_fetch_array($sql109);

              $sql110 = mysql_query("SELECT count(booking_id) from booking join residential on booking.residential_id = residential.residential_id where res_state ='Kedah' and sales='Selling'");
              $query110=mysql_fetch_array($sql110);

              $sql111 = mysql_query("SELECT count(booking_id) from booking join residential on booking.residential_id = residential.residential_id where res_state ='Kelantan' and sales='Selling'");
              $query111=mysql_fetch_array($sql111);

              $sql112 = mysql_query("SELECT count(booking_id) from booking join residential on booking.residential_id = residential.residential_id where res_state ='Perlis' and sales='Selling'");
              $query112=mysql_fetch_array($sql112);

              $sql113 = mysql_query("SELECT count(booking_id) from booking join residential on booking.residential_id = residential.residential_id where res_state ='Sabah' and sales='Selling'");
              $query113=mysql_fetch_array($sql113);

              $sql114 = mysql_query("SELECT count(booking_id) from booking join residential on booking.residential_id = residential.residential_id where res_state ='Sarawak' and sales='Selling'");
              $query114=mysql_fetch_array($sql114);
            ?>
          
        </div>
      </div>
    </section>
  </div>
</div>
      <script>
        var ctx = document.getElementById("chartSelling");
        var chartSelling = new Chart(ctx, {
          type: 'bar',
          data: {
            labels: ["Johor","Melaka","Negeri Sembilan","Selangor","Kuala Lumpur","Pahang","Terengganu","Penang","Perak","Kedah","Kelantan","Perlis","Sabah","Sarawak"],
            datasets: [{
              label: 'No of Booking',
              data: [<?php echo $query1[0];?>,<?php echo $query2[0];?>,<?php echo $query3[0];?>,<?php echo $query4[0];?>,<?php echo $query5[0];?>,
                    <?php echo $query6[0];?>,<?php echo $query7[0];?>,<?php echo $query8[0];?>,<?php echo $query9[0];?>,<?php echo $query10[0];?>,
                    <?php echo $query11[0];?>,<?php echo $query12[0];?>,<?php echo $query13[0];?>,<?php echo $query14[0];?>
                
                ],
              backgroundColor: [
                 "#00FFFF","#00FFFF","#00FFFF","#00FFFF","#00FFFF","#00FFFF","#00FFFF","#00FFFF","#00FFFF","#00FFFF","#00FFFF","#00FFFF","#00FFFF","#00FFFF",
                 
              ],
              borderWidth: 5
            }]
          },
          options: {
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero:true
                  
                }
              }]
            }
          }
        });
      </script>
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