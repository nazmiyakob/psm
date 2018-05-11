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
          <li><a href="renting.php">Renting</a></li>
          <li><a href="selling.php">Selling</a></li>
          <li><a href="upload.php">Upload</a></li>
          <li class="end" id="menu_active"><a href="account.php">Login</a></li>
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
        <article class="col2">
          <form id="form_1" action="#" method="post">
            <div class="pad1">
              <h3>Register</h3>
              <div class="row"> IC Number :<br>
                <input type="text" class="input" name="ic_no">
              </div>
              <div class="row"> Full Name :<br>
                <input type="text" class="input" name="fullname">
              </div>
              <div class="row"> Password :<br>
                <input type="password" class="input" name="password">
              </div>
              <div class="row"> Email :<br>
                <input type="text" class="input" name="email">
              </div>
              <div class="row"> Phone Number :<br>
                <input type="text" class="input" name="phone_number">
              </div>

              <div class="row_select">
                <div class="cols pad_left1">
                <input type="submit" name="btn_register" value="Register" class="button">
              </div>
              </div> <br>
            </div>
          </form>
        </article>
        <article class="col2">
          <form id="form_1" action="authenticate.php" method="post">
            <div class="pad1">
              <h3>Log In</h3>
              <div class="row"> IC Number :<br>
                <input type="text" class="input" name="ic_no">
              </div>
              <div class="row"> Password :<br>
                <input type="password" class="input" name="password">
              
              <div class="row_select">
                <div class="cols pad_left1"><input id="submit" class="button" type="submit" name="submit" value="Login"> </div>
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
if(isset($_POST['btn_register']))
{

  $username = "root";
  $password = "";
  $hostname = "localhost";


  $con = mysql_connect($hostname, $username, $password) or die("Could not connect to database");

  mysql_select_db("e_rented_house", $con); 

    $query=mysql_query("SELECT * FROM user");
    $numrows=mysql_num_rows($query);
    if($numrows==0)
    {
      $sql = "INSERT INTO user (ic_no, fullname, password, email, phone_number) VALUES('$_POST[ic_no]', '$_POST[fullname]', '$_POST[password]', '$_POST[email]', '$_POST[phone_number]')";
      
      $result=mysql_query($sql);
      
      if($result)
      {
        echo '<script language = "JavaScript">alert("YOUR DATA HAS BEEN SAVED")</script>';
        print '<meta http-equiv="refresh" content="0;URL=account.php">';
      }
      else
      {
        echo '<script language = "JavaScript">alert("DATA NOT SAVED")</script>';
        print '<meta http-equiv="refresh" content="0;URL=account.php">';
      }
    }
    else
    {
      echo '<script language = "JavaScript">alert("NO QUERY")</script>';
      print '<meta http-equiv="refresh" content="0;URL=account.php">';
    }
    
  
}
?>