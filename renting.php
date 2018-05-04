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
<![endif]-->
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
          <li><a href="index.php">Home</a></li>
          <li id="menu_active"><a href="renting.php">Rent</a></li>
          <li><a href="selling.php">Sell</a></li>
          <li class="end"><a href="account.php">Account</a></li>
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
        <article class="col1">

          <div id="slider">
            <img src="images/img1.jpg" height="376" width="683" alt="" title="<strong>One storey house <a href=''>Read more</a></span>">
            <img src="images/img2.jpg" height="376" width="683" alt="" title="<strong>Two storey house <a href=''>Read more</a></span>">
            <img src="images/img3.jpg" height="376" width="683" alt="" title="<strong>Appartment <a href=''>Read more</a></span>">
          </div>
          
        </article>
        <article class="col2">
          <form id="form_1" action="search.php" method="post">
            <div class="pad1">
              <h3>Find Your Property</h3>
              <div class="row"> Search :<br>
                <input type="text" class="input" name="seacrhdata">
              </div>
              <div class="row_select"> State : <br>
                <select name="res_state">
                    <option>&nbsp;</option>
                    <option value="Melaka">Melaka</option>
                    <option value="Johor">Johor</option>
                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                    <option value="Selangor">Selangor</option>
                  </select>
              </div>
              <div class="row_select"> Cities : <br>
                  <select name="res_cities">
                    <option>&nbsp;</option>
                    <option value="Ayer Keroh">Ayer Keroh</option>
                    <option value="Durian Tunggal">Durian Tunggal</option>
                    <option value="Batu Berendam">Batu Berendam</option>
                    <option value="Jasin">Jasin</option>
                  </select>
              </div>
              <div class="row_select"> Residential Type : <br>
               <select name="residential_type">
                    <option>&nbsp;</option>
                    <option value="Apartment">Apartment</option>
                    <option value="Flat">Flat</option>
                    <option value="1-Sty Terrace">1-Sty Terrace</option>
                    <option value="2-Sty Terrace">2-Sty Terrace</option>
                    <option value="Town">Town House</option>
                  </select>
              </div>
              <div class="row_select"> Furnishing : <br>
                  <select name="furnishing">
                    <option>&nbsp;</option>
                    <option value="Fully Furnished">Fully Furnished</option>
                    <option value="Partially Furnished">Partially Furnished</option>
                    <option value="Not Furnished">Not Furnished</option>
                  </select>
                </div>
              <div class="row_select"> Price (below than): <br>
                  <select>
                    <option>&nbsp;</option>
                    <option value="200">RM 200</option>
                    <option value="200">RM 400</option>
                    <option value="200">RM 600</option>
                    <option value="200">RM 800</option>
                    <option value="200">RM 1000</option>
                    <option value="200">RM 1200</option>
                  </select>
              </div>
              <div class="row_select">
                <div class="cols"> Bedroom(s):<br>
                  <select>
                    <option>&nbsp;</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="cols pad_left1"> <input class="button" type="submit" name="search" value="Search"/></td> </div>
              </div> <br>
            </div>
          </form>
        </article>
      </div>
    </section>
  </div>
</div>

<div class="body3">
  <div class="main">
    <h2>Remodeling Rooms</h2>

    <div class="wrapper pad_bot3">
      <?php 
        mysql_connect("localhost","root","");
        mysql_select_db("e_rented_house");
        
        $query1=mysql_query("SELECT * FROM residential WHERE status='ACCEPT'");

        echo "<table border='10' text-align='center' width='100%'>
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
          echo "<form>";
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
