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
      <img src="images/logo_img.png" style="height: 40%">
      <nav>
        <ul id="menu">
          <li><a href="index.php">Home</a></li>
          <li><a href="renting.php">Rent</a></li>
          <li><a href="selling.php">Buy</a></li>
          <li><a href="upload.php">Sell</a></li>
          <li class="end"><a href="account.php">Login</a></li>
        </ul>
      </nav>
    </header>
    <!-- / header -->
  </div>
</div>
<!-- content -->
<div class="body2">

      <?php
        $residential_id = $_POST['residential_id'];
        echo "<h1>$residential_id</h1>";
      ?>

  <div class="main">
    <section id="content">
      <div class="wrapper" style="height: 100%;">
        <article class="col2">
          <form id="form_1" action="" method="post">
            <div class="pad1">
              <h3>Booking</h3>
              <div class="row"> Full Name :<br>
                <input type="text" class="input" name="book_fullname">
              </div>
              <div class="row"> IC Number :<br>
                <input type="text" class="input" name="book_ic_no">
              </div>
              <div class="row"> Email :<br>
                <input type="text" class="input" name="book_email">
              </div>
              <div class="row"> Phone Number :<br>
                <input type="text" class="input" name="book_phone_num">
              </div>
              <div class="row"> Booking Date :<br>
                <input type="date" class="input" name="book_date">
              </div>

              <input type="hidden" class="input" name="residential_id" value="<?php echo $residential_id; ?>">

              <div class="row_select">
                <div class="cols pad_left1">
                <input type="submit" name="btn_book" value="Booking" class="button">
              </div>
              </div> <br>
            </div>
          </form>
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
        
if(isset($_POST['btn_book']))
{

  $username = "root";
  $password = "";
  $hostname = "localhost";
  $residential_id = $_POST['residential_id'];


  $con = mysql_connect($hostname, $username, $password) or die("Could not connect to database");

  mysql_select_db("e_rented_house", $con); 

    //$query=mysql_query("SELECT * FROM residential WHERE residential_id='".$residential_id."'");
    //$numrows=mysql_num_rows($query);
    // if($numrows==0)
    // {
      $sql = "INSERT INTO booking (residential_id, book_fullname, book_ic_no, book_email, book_phone_num, book_date) VALUES('$residential_id','$_POST[book_fullname]', '$_POST[book_ic_no]', '$_POST[book_email]', '$_POST[book_phone_num]', '$_POST[book_date]')";
      
      $result=mysql_query($sql);
      
        if($result)
        {
          echo '<script language = "JavaScript">alert("YOUR REQUEST WILL BE PROCESS.")</script>';
          // print '<meta http-equiv="refresh" content="0;URL=index.php">';
        }
        else
        {
          echo '<script language = "JavaScript">alert("ERROR")</script>';
          // print '<meta http-equiv="refresh" content="0;URL=index.php">';
        }
    // }

    // else
    // {
    //   echo '<script language = "JavaScript">alert("NO QUERY")</script>';
    //   print '<meta http-equiv="refresh" content="0;URL=index.php">';
    // }
    
  
}
?>