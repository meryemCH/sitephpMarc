<?php


if(session_id() == '' || !isset($_SESSION)){session_start();}

if (isset($_SESSION["username"])) {header ("location:about.php");}


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inscription || MSBeauty</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="about.php">MSBeauty</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
        <li><a href="about.php">Accueil</a></li>
          <li><a href="products.php">Produits</a></li>
          <li><a href="cart.php">Panier</a></li>
          <li><a href="orders.php">Commandes</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">Mon Compte</a></li>';
            echo '<li><a href="logout.php">Déconnexion</a></li>';
          }
          else{
            echo '<li><a href="login.php">Connexion</a></li>';
            echo '<li class="active"><a href="register.php">Inscription</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>





    <form method="POST" action="insert.php" style="margin-top:30px;">
      <div class="row">
        <div class="small-8">

          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">First Name</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Nayan" name="fname">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Last Name</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Seth" name="lname">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">E-Mail</label>
            </div>
            <div class="small-8 columns">
              <input type="email" id="right-label" placeholder="nayantronix@gmail.com" name="email">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Password</label>
            </div>
            <div class="small-8 columns">
              <input type="password" id="right-label" name="pwd">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">

            </div>
            <div class="small-8 columns">
              <input type="submit" id="right-label" value="S'inscrire" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
              <input type="reset" id="right-label" value="Réinitialiser" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
            </div>
          </div>
        </div>
      </div>
    </form>


    <div class="row" style="margin-top:10px;">
      <div class="small-12">

        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; MSBeauty. Tous les droits sont réservés.</p>
        </footer>

      </div>
    </div>




    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
