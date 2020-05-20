<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="dist/style/main.css">
  <title>FAQ - Privacy & Terms</title>
</head>
<body>

  <?php 
  include_once __DIR__ . '/src/partials/data.php';
  ?>

  <div class="app">

    <!-- Header -->
    <header class="header">
      <div class="header__logo">
        <img class="google-logo" src="dist/img/google.png" alt="GOOGLE">
        <h4>Privacy & Terms</h4>
      </div>
      <nav class="header__nav">
        <div class="nav__left">
          <ul class="nav__list">
            <li class="list__item">Overview</li>
            <li class="list__item">Privacy Policy</li>
            <li class="list__item">Terms of Service</li>
            <li class="list__item">Techonlogies</li>
            <li class="list__item list__item--active">FAQ</li>
          </ul>
        </div>
        <div class="nav__right">
          <h5>Google Account</h5>
        </div>
      </nav>
    </header>

    <!-- Main -->
    <main class="main">
      <div class="main__wrapper">
        <?php for( $i = 0; $i < count($content); $i++){ ?>
        <section class="main__section--<?php echo $i ?>">
          <h3><?php echo $content[$i]['question']?></h3>
          <p><?php echo $content[$i]['answare']?></p>
        </section>
        <?php }?>  
      </div>
    </main>
    
    <!-- Footer -->
    <footer class="footer">
      <div class="footer__wrapper">
        <div class="footer__left">
            <ul class="footer__list">
              <li class="list__item">Google -</li>
              <li class="list__item">About Google -</li>
              <li class="list__item">Privacy -</li>
              <li class="list__item">Terms</li>
            </ul>
        </div>
        <div class="footer__right">
          <img src="dist/img/world.png" alt="">
          <select class="footer_selection">
            <option value="English">English (United Kingdom)</option>
            <option value="Italian">Italian</option>
            <option value="Japanase">Japanase</option>
            <option value="Spanish">Spanish</option>
          </select>
        </div>
      </div>
    </footer>
  </div>
  
  <!-- My Js -->
  <script src="dist/script/main.js"></script>
</body>
</html>