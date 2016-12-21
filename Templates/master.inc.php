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
        <?php if(isset($_SESSION['email'])): ?><li<?php if($page === "account"):?> class="active" <?php endif; ?>><a href="./?page=account">ACCOUNT</a></li><?php endif; ?>
        <li><a href="./?page=login"><?php if(isset($_SESSION['email'])): ?>LOG OUT<?php else: ?>LOG IN<?php endif; ?></a></li>
      </ul>
    </div>

    <?php $this->content() ?>

    <div class="hero-image row fullWidth">
      <div class="columns small-offset-1 small-10 medium-offset-6 medium-5 home-hero-cont">
        <div class="row home-hero-text xl-padding-right">
          Welcome to my site. Feel free to explore my blog posts, check out my portfolio, learn about me, contact me or create an account!
        </div>
      </div>
    </div>
    <div class="row expanded main bump-medium">
      <div class="columns medium-offset-1 medium-10 xl-padding">
        <span>Hiya!</span><hr>I am a web specialist based in the capital of New Zealand, Wellington. I can provide front end design and server side programming. On this site I have many sites that I have already completed,  my blog where I post irregularly about my opinions &amp; random stuff and a small page dedicated to information on me. Please dive in and enjoy the works you see!
        <div class="row expanded bump-small">
          <div class="columns small-12 medium-4">To read more about me and my journey through life, explore <a href="">here!</a></div><div class="columns small-12 medium-4">To see what I've been up to lately, take a look at my blog <a href="">here!</a></div><div class="columns small-12 medium-4">If you're bored of me already, You can check out my sites <a href="">here!</a></div>
        </div>
      </div>
    </div>

    <div class="row expanded" id="footer">
      <div class="columns medium-offset-1 medium-10 xl-padding">
        <div class="row expanded bump-large">
          <div class="columns medium-4 small-6"><span>CONTACT</span><hr>hey man hit me up for all the latest wellington clubbing hotspots, 0800-30-40-50</div>
          <div class="columns medium-4 small-6"><span>SOCIAL</span><hr><ul><li><a href="">Facebukk</a></li><li><a href="">Instagramz</a></li><li><a href="">Snapchit</a></li></ul></div>
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
