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
          <li id="menu_active"><a href="upload.php">Sell</a></li>
          <li class="end"><a href="account.php">Login</a></li>
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
      <div class="wrapper">
        <article class="col2">
          <form id="form_1" action="" method="post">
            <div class="pad1">
              <h3>Sell Your Property</h3>
              <div class="row_select">
                <div class="cols"> State : <br>
                  <select name="res_state">
                    <option>&nbsp;</option>
                    <option value="Melaka">Melaka</option>
                    <option value="Johor">Johor</option>
                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                    <option value="Selangor">Selangor</option>
                    <option value="Kuala Lumpur">Kuala Lumpur</option>
                    <option value="Pahang">Pahang</option>
                    <option value="Terengganu">Terengganu</option>
                    <option value="Penang">Penang</option>
                    <option value="Perak">Perak</option>
                    <option value="Kedah">Kedah</option>
                    <option value="Kelantan">Kelantan</option>
                    <option value="Perlis">Perlis</option>
                    <option value="Sabah">Sabah</option>
                    <option value="Sarawak">Sarawak</option>
                  </select>
                </div>
                <div class="cols pad_left1"> Residential Type <br>
                  <select name="residential_type" required>
                    <option value="">&nbsp;</option>
                    <option value="Apartment">Apartment</option>
                    <option value="Flat">Flat</option>
                    <option value="1-Sty Terrace">1-Sty Terrace</option>
                    <option value="2-Sty Terrace">2-Sty Terrace</option>
                    <option value="Town">Town House</option>
                  </select>
                </div>
              </div>
              
                <div class="row_select"> Cities : <br>
                  <input type="text" name="res_cities" required>
                  
                </div>

              <div class="row_select">
                <div class="cols"> Furnishing : <br>
                  <select name="furnishing" required>
                    <option value="">&nbsp;</option>
                    <option value="Fully Furnished">Fully Furnished</option>
                    <option value="Partially Furnished">Partially Furnished</option>
                    <option value="Not Furnished">Not Furnished</option>
                  </select>
                </div>

                <div class="cols pad_left1"> Sales Type : <br>
                  <select name="sales" required>
                    <option value="">&nbsp;</option>
                    <option value="Renting">Renting</option>
                    <option value="Selling">Selling</option>
                  </select>
                </div>
              </div>

              <div class="row_select"> Year of Residential : <br>
                  <input type="number" name="residential_year" min="1990" max="2018" required>
              </div>

              <div class="row_select"> Price (RM) : <br>  
                <input type="number" name="residential_price" required>
              </div>

              <div class="row_select"> Residential Description : <br>  
                <textarea rows="4" cols="28" name="residential_description" required></textarea>
              </div>
              
              <div class="row_select">
                <div class="cols"><!-- Bedroom(s):<br>
                   <select>
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

    $sql = "INSERT INTO residential (residential_id, res_state, res_cities, residential_type, furnishing, sales, residential_year, residential_price, residential_description) VALUES('$residential_id', '$_POST[res_state]', '$_POST[res_cities]', '$_POST[residential_type]', '$_POST[furnishing]', '$_POST[sales]', '$_POST[residential_year]', '$_POST[residential_price]', '$_POST[residential_description]')";
      
      $result=mysql_query($sql);
      
      if($result)
      {
        echo '<script language = "JavaScript">alert("YOUR DATA HAS BEEN SAVED")</script>';
        print '<meta http-equiv="refresh" content="0;URL=upload.php">';
      }
      else
      {
        echo '<script language = "JavaScript">alert("DATA NOT SAVED")</script>';
        print '<meta http-equiv="refresh" content="0;URL=upload.php">';
      }  
}
?>