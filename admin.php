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
          <li class="menu_active"><a href="profile.php">Profile</a></li>
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
                
              <h2><center> LIST OF RESIDENTIAL </center></h2>
              <p>

              <form action="admin.php" method="post">
                <div align="right">
                  <b>Search Residential : </b>
                <select name="searchtype" required="required" >
                  <option value="">Select Options</option>
                  <option value="apartment">Apartment</option>
                  <option value="flat">Flat</option>
                  <option value="1-sty terrace">1-Sty Terrace</option>
                  <option value="2-sty terrace">2-Sty Terrace</option>
                  <option value="town">Town</option>
                </div>
                </select>
                
                <input  class="button" type="submit" name="search" value="Search"/>
              </form>

              <?php
                
                error_reporting(0);
                $searchtype = $_POST['searchtype'];

                mysql_connect("localhost","root","");
                mysql_select_db("e_rented_house");
                
                if($searchtype == 'apartment')
                {
                  $query = mysql_query("SELECT * FROM residential WHERE residential_type LIKE 'Apartment'") or die(mysql_error());
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
                    echo "<input type='hidden' name='event_id' value=" . $query2['residential_id'] . ">";
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

                else if($searchtype == 'flat')
                {
                  $query = mysql_query("SELECT * FROM residential WHERE residential_type LIKE 'flat'") or die(mysql_error());
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
                    echo "<input type='hidden' name='event_id' value=" . $query2['residential_id'] . ">";
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

                else if($searchtype == '1-sty terrace')
                {
                  $query = mysql_query("SELECT * FROM residential WHERE residential_type LIKE '1-sty terrace'") or die(mysql_error());
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
                    echo "<input type='hidden' name='event_id' value=" . $query2['residential_id'] . ">";
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

                else if($searchtype == '2-sty terrace')
                {
                  $query = mysql_query("SELECT * FROM residential WHERE residential_type LIKE '2-sty terrace'") or die(mysql_error());
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
                    echo "<input type='hidden' name='event_id' value=" . $query2['residential_id'] . ">";
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

                else if($searchtype == 'town')
                {
                  $query = mysql_query("SELECT * FROM residential WHERE residential_type LIKE 'town'") or die(mysql_error());
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
                    echo "<input type='hidden' name='event_id' value=" . $query2['residential_id'] . ">";
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

                else
                {
                  
                  echo '<p><h4>Choose your Residential</h4>';

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