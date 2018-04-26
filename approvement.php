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
</head>
<body id="page1">
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
          <li class="end" id="menu_active"><a href="approvement.php">Approvement</a></li>
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
        <article>
          <form id="form_1" action="#" method="post">
            <div class="pad1">
              <?php 
                mysql_connect("localhost","root","");
                mysql_select_db("e_rented_house");
                
                $query1=mysql_query("SELECT * FROM residential");

                echo "<p><br>
                <table border='10' text-align='center' width='100%'>
                <tr class='color2'>
                  <th><center><h3> Residential Type </center></th>
                  <th><center><h3> Residential Price </center></th>
                  <th><center><h3> Residential Year </center></th>
                  <th><center><h3> Residential Furnishing </center></th>
                  <th><center><h3> State </center></th>
                  <th><center><h3> Cities </center></th>
                </tr>
                </div></div>";

                while($query2=mysql_fetch_array($query1))
                {
                  echo "<form action='edit_event2.php' method='post'>";
                  echo "";
                  echo"<tr height='30px' class='color2'>";
                  echo "<td align='center' valign='top'>&nbsp;" . $query2['residential_type'] . "</td>";
                  echo "<td align='center' valign='top'>&nbsp;RM " . $query2['residential_price'] . "</td>";
                  echo "<td align='center' valign='top'>&nbsp;" . $query2['residential_year'] . "</td>";
                  echo "<td align='center' valign='top'>&nbsp;" . $query2['furnishing'] . "</td>";
                  echo "<td align='center' valign='top'>&nbsp;" . $query2['res_state'] . "</td>";
                  echo "<input type='hidden' name='event_id' value=" . $query2['residential_id'] . ">";
                  echo "<td align='center' valign='top'>&nbsp;" . $query2['res_cities'] . "</td>";
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