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
      <h1><img src="images/logo_img.png" style="height: 40%"></h1>
      <nav>
        <ul id="menu">
          <li><a href="index.php">Home</a></li>
          <li><a href="renting.php">Rent</a></li>
          <li><a href="selling.php">Buy</a></li>
          <li class="end"><a href="upload.php">Sell</a></li>
        </ul>
        <ul>
          <li align="right"><a href="account.php">Login</li>
          <li align="right">For Admin</a></li>
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
            <img src="images/img1.jpg" height="376" width="683" alt="" title="<strong>One storey house <a href='search.php'>See more</a></span>">
            <img src="images/img2.jpg" height="376" width="683" alt="" title="<strong>Two storey house <a href='search.php'>See more</a></span>">
            <img src="images/img3.jpg" height="376" width="683" alt="" title="<strong>Appartment <a href='search.php'>See more</a></span>">
          </div>

        </article>
        <article class="col2">
          <form id="form_1" action="search_renting.php" method="post">
             <div class="pad1">
              <h3>Find Your Property</h3>
              <div class="row_select"> Search By :   <p>
                <select name="searchtype" required="required" >
                  <option value="">Select Options</option>
                  <option value="type">Residential Type</option>
                  <option value="price">Residential Price</option>
                  <option value="state">Residential State</option>
                </select>
              </div>
              <div class="row_select"> <br>
                <input type="text" name="search_data" size="18"  required="required" />
              </div>
              
              <div class="row_select">
                <input class="button" type="submit" name="search" value="Search">
              </div> <br>
            </div>
          </form>
        </article>
      </div>
    </section>
  </div>
</div>

<div class="body3">
  <div class="main" style="height: 100%;">
    
      <?php
        error_reporting(0); 

        if(isset($_POST['search']))
        {
            $searchtype = $_POST['searchtype'];
            $searchdata = $_POST['search_data'];

            $username = "root";
            $password = "";
            $hostname = "localhost";

            $con = mysql_connect($hostname, $username, $password) or die("Could not connect to database");

            mysql_select_db("e_rented_house", $con); 

            if($searchtype == 'type')
            {
              $query = mysql_query("SELECT * FROM residential WHERE residential_type LIKE '%$searchdata%' and status='ACCEPT' AND sales='Renting'") or die(mysql_error());
              $checkrow = mysql_num_rows($query);
              if($checkrow > 0)
              {
                echo "<div class='wrapper pad_bot3'>
      
                      <table border='10' text-align='center' width='100%'>
                        <tr class='color2'>
                          <th><center><h3> Residential </center></th>
                          <th><center><h3> Price </center></th>
                          <th><center><h3> Furnishing </center></th>
                          <th><center><h3> Location </center></th>
                          <th><center><h3> Action </center></th>
                        </tr>
                        </div></div>";

              while($query2=mysql_fetch_array($query))
              {
                echo "<form action='booking.php' method='post'>";
                echo "";
                echo"<tr height='30px' class='color2'>";
                echo "<td align='center' valign='top'>&nbsp;" . $query2['residential_type'] . "</td>";
                echo "<td align='center' valign='top'>&nbsp;RM " . $query2['residential_price'] . "</td>";
                echo "<td align='center' valign='top'>&nbsp;" . $query2['furnishing'] . "</td>";
                echo "<td align='center' valign='top'>&nbsp;" . $query2['res_cities'] . ", " . $query2['res_state'] . "</td>";
                echo "<input type='hidden' name='residential_id' value=" . $query2['residential_id'] . ">";
                echo "<td align='center'>
                        <button type='submit' class='button' span='2' >RENT</button></form>";
                echo "</td>";
                echo "</td>";
                echo "</tr>";
              }

                
              }

              else if($checkrow < 1)
              {
                
              echo '<script language="javascript">alert("No residential type of '.$searchdata.'")</script>';

              
              }

            }
            
            else if($searchtype == 'price')
            {
              $query = mysql_query("SELECT * FROM residential WHERE residential_price LIKE '$searchdata' and status='ACCEPT' AND sales='Renting'") or die(mysql_error());
              $checkrow = mysql_num_rows($query);
              if($checkrow > 0)
              {
                echo "<div class='wrapper pad_bot3'>
      
                      <table border='10' text-align='center' width='100%'>
                        <tr class='color2'>
                          <th><center><h3> Residential </center></th>
                          <th><center><h3> Price </center></th>
                          <th><center><h3> Furnishing </center></th>
                          <th><center><h3> Location </center></th>
                          <th><center><h3> Action </center></th>
                        </tr>
                        </div></div>";

              while($query2=mysql_fetch_array($query))
              {
                echo "<form action='booking.php' method='post'>";
                echo "";
                echo"<tr height='30px' class='color2'>";
                echo "<td align='center' valign='top'>&nbsp;" . $query2['residential_type'] . "</td>";
                echo "<td align='center' valign='top'>&nbsp;RM " . $query2['residential_price'] . "</td>";
                echo "<td align='center' valign='top'>&nbsp;" . $query2['furnishing'] . "</td>";
                echo "<td align='center' valign='top'>&nbsp;" . $query2['res_cities'] . ", " . $query2['res_state'] . "</td>";
                echo "<input type='hidden' name='residential_id' value=" . $query2['residential_id'] . ">";
                echo "<td align='center'>
                        <button type='submit' class='button' span='2' >RENT</button></form>";
                echo "</td>";
                echo "</td>";
                echo "</tr>";
              }

                
              }

              else if($checkrow < 1)
              {
                
              echo '<script language="javascript">alert("No residential price in RM '.$searchdata.'")</script>';

              
              }

            }

            else if($searchtype == 'state')
            {
              $query = mysql_query("SELECT * FROM residential WHERE res_state LIKE '%$searchdata%' and status='ACCEPT' AND sales='Renting'") or die(mysql_error());
              $checkrow = mysql_num_rows($query);
              if($checkrow > 0)
              {
                echo "<div class='wrapper pad_bot3'>
      
                      <table border='10' text-align='center' width='100%'>
                        <tr class='color2'>
                          <th><center><h3> Residential </center></th>
                          <th><center><h3> Price </center></th>
                          <th><center><h3> Furnishing </center></th>
                          <th><center><h3> Location </center></th>
                          <th><center><h3> Action </center></th>
                        </tr>
                        </div></div>";

              while($query2=mysql_fetch_array($query))
              {
                echo "<form action='booking.php' method='post'>";
                echo "";
                echo"<tr height='30px' class='color2'>";
                echo "<td align='center' valign='top'>&nbsp;" . $query2['residential_type'] . "</td>";
                echo "<td align='center' valign='top'>&nbsp;RM " . $query2['residential_price'] . "</td>";
                echo "<td align='center' valign='top'>&nbsp;" . $query2['furnishing'] . "</td>";
                echo "<td align='center' valign='top'>&nbsp;" . $query2['res_cities'] . ", " . $query2['res_state'] . "</td>";
                echo "<input type='hidden' name='residential_id' value=" . $query2['residential_id'] . ">";
                echo "<td align='center'>
                        <button type='submit' class='button' span='2' >RENT</button></form>";
                echo "</td>";
                echo "</td>";
                echo "</tr>";
              }

                
              }

              else if($checkrow < 1)
              {
                
              echo '<script language="javascript">alert("No residential in the area '.$searchdata.'")</script>';

              
              }

            }

        }
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