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
      <img src="../images/logo_img.png">
      <div class="wrapper">
        <ul id="icons">
          <li><a href="#" class="normaltip"><img src="images/icon1.jpg" alt=""></a></li>
          <li><a href="#" class="normaltip"><img src="images/icon2.jpg" alt=""></a></li>
          <li><a href="#" class="normaltip"><img src="images/icon3.jpg" alt=""></a></li>
        </ul>
      </div>
      <nav>
        <ul id="menu">
          <li id="menu_active"><a href="index.php">Home</a></li>
          <li><a href="renting.php">Rent</a></li>
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
          <div id="slider"> <img src="images/1sty.jpg" height="376" width="683" alt="" title="<strong>One storey house <a href=''>Read more</a></span>"> <img src="images/2sty.jpg" height="376" width="683" alt="" title="<strong>Two storey house <a href=''>Read more</a></span>"> <img src="images/appartment.jpg" height="376" width="683" alt="" title="<strong>Appartment <a href=''>Read more</a></span>"> </div>
        </article>
        <article class="col2">
          <form id="form_1" action="#" method="post">
            <div class="pad1">
              <h3>Find Your Property</h3>
              <div class="row"> Search :<br>
                <input type="text" class="input">
              </div>
              <div class="row_select"> State : <br>
                <select>
                  <option>&nbsp;</option>
                  <option>Melaka</option>
                  <option>Johor</option>
                  <option>Negeri Sembilan</option>
                  <option>Selangor</option>
                </select>
              </div>
              <div class="row_select"> Cities : <br>
                <select>
                  <option>&nbsp;</option>
                  <option>...</option>
                  <option>...</option>
                  <option>...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="row_select"> Residential Type : <br>
                <select>
                  <option>&nbsp;</option>
                  <option>Apartment</option>
                  <option>Flat</option>
                  <option>1-Sty Terrace</option>
                  <option>2-Sty Terrace</option>
                  <option>Town House</option>
                </select>
              </div>
              <div class="row_select">
                <div class="cols"> Min Price : <br>
                  <select>
                    <option>&nbsp;</option>
                    <option>200</option>
                    <option>400</option>
                    <option>600</option>
                    <option>800</option>
                    <option>1000</option>
                    <option>1200</option>
                  </select>
                </div>
                <div class="cols pad_left1"> Max Price : <br>
                  <select>
                    <option>&nbsp;</option>
                    <option>200</option>
                    <option>400</option>
                    <option>600</option>
                    <option>800</option>
                    <option>1000</option>
                    <option>1200</option>
                  </select>
                </div>
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
                <div class="cols pad_left1"> <a href="#" class="button">Search</a> </div>
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
