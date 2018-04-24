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
          <li><a href="renting.php">Rent</a></li>
          <li id="menu_active"><a href="selling.php">Sell</a></li>
          <li class="menu_active"><a href="account.php">Account</a></li>
          <li id="end">
            
          </li>
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
          <div id="slider"> <img src="images/1sty.jpg" height="376" width="683" alt="" title="<strong>One storey house <a href=''>Read more</a></span>"> <img src="images/2sty.jpg" height="376" width="683" alt="" title="<strong>Two storey house <a href=''>Read more</a></span>"> <img src="images/appartment.jpg" height="376" width="683" alt="" title="<strong>Appartment <a href=''>Read more</a></span>"> </div>
        </article>
        <article class="col2">
          <form id="form_1" action="" method="post">
            <div class="pad1">
              <h3>Sell Your Property</h3>
              <div class="row_select">
                <div class="cols"> State : <br>
                  <select name="res_state" required>
                    <option value="">&nbsp;</option>
                    <option value="Melaka">Melaka</option>
                    <option value="Johor">Johor</option>
                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                    <option value="Selangor">Selangor</option>
                  </select>
                </div>
                <div class="cols pad_left1"> Cities : <br>
                  <select name="res_cities" required>
                    <option value="">&nbsp;</option>
                    <option value="Ayer Keroh">Ayer Keroh</option>
                    <option value="Durian Tunggal">Durian Tunggal</option>
                    <option value="Batu Berendam">Batu Berendam</option>
                    <option value="Jasin">Jasin</option>
                  </select>
                </div>
              </div>
              
              <div class="row_select">
                <div class="cols"> Residential Type <br>
                  <select name="residential_type" required>
                    <option value="">&nbsp;</option>
                    <option value="Apartment">Apartment</option>
                    <option value="Flat">Flat</option>
                    <option value="1-Sty Terrace">1-Sty Terrace</option>
                    <option value="2-Sty Terrace">2-Sty Terrace</option>
                    <option value="Town">Town House</option>
                  </select>
                </div>
                <div class="cols pad_left1"> Furnishing : <br>
                  <select name="furnishing" required>
                    <option value="">&nbsp;</option>
                    <option value="Fully Furnished">Fully Furnished</option>
                    <option value="Partially Furnished">Partially Furnished</option>
                    <option value="Not Furnished">Not Furnished</option>
                  </select>
                </div>

              <div class="row_select"> Year of Residential : <br>
                  <input type="number" name="residential_year" required>
              </div>

              <div class="row_select"> Price (RM) : <br>  
                <input type="number" name="residential_price" required>
              </div>

              <div class="row_select"> Residential Description : <br>  
                <textarea rows="4" cols="30" name="residential_description" required></textarea>
              </div>
              
              <div class="row_select">
                <div class="cols"> Bedroom(s):<br>
                  <!-- <select>
                    <option>&nbsp;</option>
                    <option name="bedroom_count" value="1">1</option>
                    <option name="bedroom_count" value="2">2</option>
                    <option name="bedroom_count" value="3">3</option>
                    <option name="bedroom_count" value="4">4</option>
                    <option name="bedroom_count" value="5">5</option>
                  </select> -->
                </div>

                <div class="cols pad_left1">
                  <input type="submit" name="btn_submit" value="Upload" class="button">
                </div>

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
        
        $query1=mysql_query("SELECT * FROM residential");

        echo "<p><br>
        <table border='10' text-align='center' width='100%'>
        <tr class='color2'>
          <th><center> Residential Type </center></th>
          <th><center> Residential Price </center></th>
          <th><center> Residential Year </center></th>
          <th><center> Residential Furnishing </center></th>
          <th><center> State </center></th>
          <th><center> Cities </center></th>
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
if(isset($_POST['btn_submit']))
{

  $username = "root";
  $password = "";
  $hostname = "localhost";


  $con = mysql_connect($hostname, $username, $password) or die("Could not connect to database");

  mysql_select_db("e_rented_house", $con); 

    $query=mysql_query("SELECT * FROM residential");
    $numrows=mysql_num_rows($query);

    $sql = "INSERT INTO residential (residential_id, res_state, res_cities, residential_type, furnishing, residential_year, residential_price, residential_description) VALUES('$residential_id', '$_POST[res_state]', '$_POST[res_cities]', '$_POST[residential_type]', '$_POST[furnishing]', '$_POST[residential_year]', '$_POST[residential_price]', '$_POST[residential_description]')";
      
      $result=mysql_query($sql);
      
      if($result)
      {
        echo '<script language = "JavaScript">alert("YOUR DATA HAS BEEN SAVED")</script>';
        print '<meta http-equiv="refresh" content="0;URL=selling.php">';
      }
      else
      {
        echo '<script language = "JavaScript">alert("DATA NOT SAVED")</script>';
        print '<meta http-equiv="refresh" content="0;URL=selling.php">';
      }  
}
?>