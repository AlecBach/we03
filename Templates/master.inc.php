<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <div class="bump-for-nav"></div>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alec Bach <?php echo $title; ?></title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700|Open+Sans" rel="stylesheet">
  </head>
  <body>
    <div class="row top-nav-bar fullWidth">
      <!-- <div class="column-12 clearfix"> -->
        <div class="large-12 columns" id="nav-container">
          <a href="./"><div class="float-left nav-header" id="header-text">ALEC BACH</div></a>
          <div class="float-right burgerOuter">
            <div class="burger-cont">
              <div class="burger-line"></div>
              <div class="burger-line"></div>
              <div class="burger-line"></div>
            </div>
          </div>
          <div class="float-right nav hide-for-small-only nav-text">
              <?php if(!isset($_SESSION['user_email'])): ?><div class="nav-item float-right <?php if($page === "login" || $page === "register" ):?>active<?php endif; ?>"><a href="./?page=login">LOG IN</a></div><?php else: ?><div class="nav-item float-right"><a href="./?page=logout">LOG OUT</a></div><?php endif; ?>
              <?php if(isset($_SESSION['user_email'])): ?><div class="nav-item float-right <?php if($page === "account" && $_GET['id'] === $_SESSION['user_id']):?>active<?php endif; ?>"><a href="./?page=account&?id=<?=$_SESSION['user_id']?>">ACCOUNT</a></div><?php endif; ?>
              <div class="nav-item float-right <?php if($page === "contact"):?>active<?php endif; ?>"><a href="./?page=contact">CONTACT</a></div>
              <div class="nav-item float-right <?php if($page === "portfolio"):?>active<?php endif; ?>"><a href="./?page=portfolio">PORTFOLIO</a></div>
              <div class="nav-item float-right <?php if($page === "about"):?>active<?php endif; ?>"><a href="./?page=about">ABOUT</a></div>
              <div class="nav-item float-right <?php if($page === "blog"):?>active<?php endif; ?>"><a href="./?page=blog">BLOG</a></div>
              <div class="nav-item float-right <?php if($page === "home"):?>active<?php endif; ?>"><a href="./">HOME</a></div>
            </ul>
          </div>
          
          
        </div>
        <div style="display: none;" id="pageId"><?= $page ?></div>
      <!-- </div> -->
    </div>
    <div class="bump-for-nav"></div>
    <div class="burger-menu row fullWidth">
      <ul class="menu vertical">
        <li<?php if($page === "home"):?> class="active" <?php endif; ?>><a href="./">HOME</a></li>
        <li<?php if($page === "blog"):?> class="active" <?php endif; ?>><a href="./?page=blog">BLOG</a></li>
        <li<?php if($page === "about"):?> class="active" <?php endif; ?>><a href="./?page=about">ABOUT</a></li>
        <li<?php if($page === "portfolio"):?> class="active" <?php endif; ?>><a href="./?page=portfolio">PORTFOLIO</a></li>
        <li<?php if($page === "contact"):?> class="active" <?php endif; ?>><a href="./?page=contact">CONTACT</a></li>
        <?php if(isset($_SESSION['user_email'])): ?><li<?php if($page === "account" && $_GET['id'] === $_SESSION['user_id']):?> class="active" <?php endif; ?>><a href="./?page=account&?id=<?=$_SESSION['user_id']?>">ACCOUNT</a></li><?php endif; ?>
        <?php if(!isset($_SESSION['user_email'])): ?><li><a href="./?page=login">LOG IN</a></li><?php else: ?><li><a href="./?page=logout">LOG OUT</a></li><?php endif; ?>
      </ul>
    </div>

    
    <div id="content">
      <?php $this->content() ?>
    </div>

    <div class="row expanded" id="footer">
      <div class="columns medium-offset-1 medium-10 xl-padding">
        <div class="row expanded bump-large">
          <div class="columns medium-4 small-6"><span>CONTACT</span><hr>Contact me to arange a meeting where we will form an idea that will eventually grow in to a beautiful, fully functional website!<ul><li>Phone: <a href="tel:+64221964014">+6422 196 4014</a></li><li>Email: <a href="mailto:alec.bach97@gmail.com">alec.bach97@gmail.com</a></li></div>
          <div class="columns medium-4 small-6"><span>SOCIAL</span><hr><ul><li><a href="https://www.facebook.com/alec.bach97">Facebook</a></li><li><a href="https://www.instagram.com/alec.bach/">Instagram</a></li></ul></div>
          <div class="columns medium-4 hide-for-small-only"><span>WORLD CLASS, LOCALLY</span><hr>if u lookin for that good good sweet christmas design then u gotta hit me up my man im telling you o.O</div>
        </div>
      </div>
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
