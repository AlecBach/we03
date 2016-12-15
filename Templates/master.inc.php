<!doctype html>
<html class="no-js" lang="en" dir="ltr">
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
              <div class="nav-item float-right"><a href="./?page=login"><?php if(isset($_SESSION['email'])): ?>LOG OUT<?php else: ?>LOG IN<?php endif; ?></a></div>
              <?php if(isset($_SESSION['email'])): ?><div class="nav-item float-right <?php if($page === "account"):?>active<?php endif; ?>"><a href="./?page=account">ACCOUNT</a></div><?php endif; ?>
              <div class="nav-item float-right <?php if($page === "contact"):?>active<?php endif; ?>"><a href="./?page=contact">CONTACT</a></div>
              <div class="nav-item float-right <?php if($page === "portfolio"):?>active<?php endif; ?>"><a href="./?page=portfolio">PORTFOLIO</a></div>
              <div class="nav-item float-right <?php if($page === "about"):?>active<?php endif; ?>"><a href="./?page=about">ABOUT</a></div>
              <div class="nav-item float-right <?php if($page === "blog"):?>active<?php endif; ?>"><a href="./?page=blog">BLOG</a></div>
              <div class="nav-item float-right <?php if($page === "home"):?>active<?php endif; ?>"><a href="./">HOME</a></div>
            </ul>
          </div>
          
          
        </div>
        <div class="large-12 burger-menu columns fullWidth">
          <ul class="menu vertical">
            <li<?php if($page === "home"):?> class="active" <?php endif; ?>><a href="./">HOME</a></li>
            <li<?php if($page === "blog"):?> class="active" <?php endif; ?>><a href="./?page=blog">BLOG</a></li>
            <li<?php if($page === "about"):?> class="active" <?php endif; ?>><a href="./?page=about">ABOUT</a></li>
            <li<?php if($page === "portfolio"):?> class="active" <?php endif; ?>><a href="./?page=portfolio">PORTFOLIO</a></li>
            <li<?php if($page === "contact"):?> class="active" <?php endif; ?>><a href="./?page=contact">CONTACT</a></li>
            <?php if(isset($_SESSION['email'])): ?><li<?php if($page === "account"):?> class="active" <?php endif; ?>><a href="./?page=account">ACCOUNT</a></li><?php endif; ?>
            <li><a href="./?page=login"><?php if(isset($_SESSION['email'])): ?>LOG OUT<?php else: ?>LOG IN<?php endif; ?></a></li>
          </ul>
        </div>
      <!-- </div> -->
    </div>
    <?php $this->content() ?>

    <div class="hero-image row fullWidth">
      <div class="columns small-offset-1 small-10 medium-offset-5 medium-5 home-hero-text">
        Welcome to my site. Feel free to explore my blog posts, check out my portfolio, learn about me, contact me or create an account!
      </div>
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
