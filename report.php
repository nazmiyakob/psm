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
      <h1><a href="index.php" id="logo"></a></h1>
      <div class="wrapper">
        <ul id="icons">
          <li><a href="#" class="normaltip"><img src="images/icon1.jpg" alt=""></a></li>
          <li><a href="#" class="normaltip"><img src="images/icon2.jpg" alt=""></a></li>
          <li><a href="#" class="normaltip"><img src="images/icon3.jpg" alt=""></a></li>
        </ul>
      </div>
      <nav>
        <ul id="menu">
          <li><a href="admin.php">Home</a></li>
          <li class="menu_active"><a href="approvement.php">Approvement</a></li>
          <li class="menu_active" id="menu_active"><a href="report.php">Report</a></li>
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
        
          
            <div class="pad1" >
              <canvas id="myChart" width="700" height="300"></canvas>
              <?php 
              $sql1 = mysql_query("SELECT count(booking_id) from booking join residential on booking.residential_id = residential.residential_id where res_state ='Melaka'");
              $query1=mysql_fetch_array($sql1);

              $sql2 = mysql_query("SELECT count(booking_id) from booking join residential on booking.residential_id = residential.residential_id where res_state ='Johor'");
              $query2=mysql_fetch_array($sql2);

              $sql3 = mysql_query("SELECT count(booking_id) from booking join residential on booking.residential_id = residential.residential_id where res_state ='Negeri Sembilan'");
              $query3=mysql_fetch_array($sql3);
  

              ?>
              
            </div>
          
        
      </div>
    </section>
  </div>
</div>
<script>
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
            labels: ["Melaka","Johor","Negeri Sembilan","MN","MB","M","NC","PS","PT","PR","RAM","SC","SW","SR"],
            datasets: [{
              label: 'No of Booking',
              data: [<?php echo $query1[0];?>,<?php echo $query2[0];?>,<?php echo $query3[0];?>
                
                ],
              backgroundColor: [
                 "#00FFFF","#FFE4C4","#e74c3c","#e74c3c","#e74c3c","#e74c3c","#e74c3c","#e74c3c","#e74c3c","#e74c3c","#e74c3c","#e74c3c","#e74c3c","#e74c3c",
                 
              ],
              borderWidth: 2
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