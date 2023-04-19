
<?php

$admin_email = "stylish@fashion.com";
$nume = $_POST['nume'];
$email = $_POST['email'];
$mesaj = $_POST['mesaj'];

?>


<!DOCTYPE html>
<html>
  <head>
    <title>Contact</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/uikit.css" />
    <script src="js/uikit.js"></script>
    <script src="js/uikit-icons.js"></script>
  </head>
  <body>
    <!-- NAV -->
    <div class="top-wrap uk-position-relative uk-background-secondary">
    <div
      class="nav"
      data-uk-sticky="cls-active: uk-background-secondary uk-box-shadow-medium; top: 100vh; animation: uk-animation-slide-top"
    >
      <div class="uk-container">
        <nav
          class="uk-navbar uk-navbar-container uk-navbar-transparent"
          data-uk-navbar
        >
          <div class="uk-navbar-left">
            <div class="uk-navbar-item uk-padding-remove-horizontal">
              <a class="uk-logo" title="Logo" href=""
                ><img src="img/logo.png" alt="Logo"
              /></a>
            </div>
          </div>
          <div class="uk-navbar-right">
            <ul class="uk-navbar-nav uk-visible@s">
              <li class="uk-visible@m">
                <a href="index.html"> Acasa </a>
              </li>
              <li>
                <a href="#" data-uk-icon="chevron-down">Lumea Modei</a>
                <div class="uk-navbar-dropdown">
                  <ul class="uk-nav uk-navbar-dropdown-nav">
                    <li>
                      <a href="istoria.html" class="uk-text-secondary"
                        >Istoria Modei</a
                      >
                    </li>
                    <li>
                      <a href="simboluri.html" class="uk-text-secondary"
                        >Simbolurile Fashionului</a
                      >
                    </li>
                    <li>
                      <a href="topBranduri.html" class="uk-text-secondary"
                        >Top Branduri</a
                      >
                    </li>
                    <li>
                      <a href="industria.html" class="uk-text-secondary"
                        >Industria Fashion</a
                      >
                    </li>
                  </ul>
                </div>
              </li>
              <li class="uk-active"><a href="contact.html">Contact</a></li>
            </ul>
            <a
              class="uk-navbar-toggle uk-navbar-item uk-hidden@s"
              data-uk-toggle
              data-uk-navbar-toggle-icon
              href="#offcanvas-nav"
            ></a>
          </div>
        </nav>
      </div>
    </div>
  </div>
    <!-- /NAV -->
    <!-- MAIN -->
  
    <section class="uk-background-cover uk-background-center uk-padding-large" style="background-image: url(img/contact.png);">
      <div class="uk-conatiner uk-padding-large uk-padding-remove-top">
        <h1 class="uk-text-bold uk-margin-large-bottom">Contactați-ne</h1>
        <div class="uk-child-width-expand@m" uk-grid>
          <div class="uk-flex uk-flex-column uk-align-center">

          <?php	
                      if (!$nume ||!$email||!$mesaj) die ("<div class='uk-alert-danger' uk-alert>Vă rugăm să completați toate câmpurile!</div>");

                    else {

              

                    echo "<div class='uk-alert-warning uk-width-large' uk-alert> ".$nume.",<br>Mesajul dumnevoastră: &quot;".$mesaj."&quot; a fost trimis cu succes la adresa ".$admin_email.".<br>Vom reveni cu un răspuns cat mai curând. Vă mulțumim!</div>";

                    }

                    //send mail
                      mail($admin_email, "Formular contact", $mesaj, "De la".$email);

            ?>
            </div>     
        <div class="uk-width-large uk-align-center uk-align-left@s uk-padding-remove">
          <div class="uk-width-large uk-section-secondary uk-align-center uk-align-right@m uk-margin-remove uk-padding-large">
            <p> <span uk-icon="mail"></span>   <span class="uk-padding-small"> stylish@fashion.com </span></p>
            <p> <span uk-icon="receiver"></span>   <span class="uk-padding-small"> 0764.657.456 / 0234.546.432 </span> </p>
            <p> <span uk-icon="location"></span> <span class="uk-padding-small"> Strada Rozelor nr. 15 </span> <br> <span class="uk-padding"> Timișoara, Timiș, România </span>  </p>
            <p> <span uk-icon="clock"></span>  <span class="uk-padding-small"> 09:00 - 18:00 </span></p>
          </div>
        </div>
      </div>
      </div>
    </section>

    <!-- /MAIN -->
    <!-- FOOTER -->
    <footer class="uk-section uk-section-secondary uk-padding-remove-bottom">
      <div class="uk-container">
        
        <div class="uk-grid uk-grid-large" data-uk-grid>
          <div class="uk-width-1-5@m">
            <a class="uk-logo" title="Logo" href=""
              ><img src="img/logoWtxt.png" alt="Logo"
            /></a>
        </div >
          
          <div class="uk-width-3-5@m uk-text-center">
            <h5>LUMEA MODEI</h5>
            <ul class="uk-list">
              <li>
                <a href="istoria.html" class="uk-text-muted">Istoria Modei</a>
              </li>
              <li>
                <a href="simboluri.html" class="uk-text-muted">Simbolurile Fashionului</a>
              </li>
              <li>
                <a href="topBranduri.html" class="uk-text-muted">Top Branduri</a>
              </li>
              <li>
                <a href="industria.html" class="uk-text-muted">Industria Fashion</a>
              </li>
            </ul>
          </div>
          <div class="uk-width-1-5@m uk-flex uk-flex-column uk-flex-between">
            <a class="uk-margin-medium uk-icon-button" href="#" uk-totop></a>
            <div class="uk-margin-medium">
              <a
                href=""
                class="uk-icon-button uk-margin-small-right"
                data-uk-icon="twitter"
              ></a>
              <a
                href=""
                class="uk-icon-button uk-margin-small-right"
                data-uk-icon="facebook"
              ></a>
              <a
                href=""
                class="uk-icon-button uk-margin-small-right"
                data-uk-icon="instagram"
              ></a>
            </div>
          </div>
      </div>
    </div>
      <div class="uk-text-center uk-padding uk-padding-remove-horizontal">
        <span class="uk-text-small uk-text-muted"
          >© 2022
          <a href="#">Stylish</a>
          | Toate drepturile rezervate.
        </span>
      </div>
    </footer>
    <!-- /FOOTER -->
    <!-- OFFCANVAS -->
    <div id="offcanvas-nav" data-uk-offcanvas="flip: true; overlay: false">
      <div
        class="uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-slide"
      >
        <button
          class="uk-offcanvas-close uk-close uk-icon"
          type="button"
          data-uk-close
        ></button>
        <ul class="uk-nav uk-nav-default">
          <li><a href="#">Acasa</a></li>
          <li class="uk-parent">
            <a href="#">Istoria Modei</a>
            <ul class="uk-nav-sub">
              <li>
                <a href="istoria.html" class="uk-text-muted">Istoria Modei</a>
              </li>
              <li>
                <a href="simboluri.html" class="uk-text-muted"
                  >Simbolurile Fashionului</a
                >
              </li>
              <li>
                <a href="topBranduri.html" class="uk-text-muted"
                  >Top Branduri</a
                >
              </li>
              <li>
                <a href="industria.html" class="uk-text-muted"
                  >Industria Fashion</a
                >
              </li>
            </ul>
          </li>
          <li class="uk-active"><a href="contact.html">Contact</a></li>
      </div>
    </div>
    <!-- /OFFCANVAS -->
  </body>
</html>
