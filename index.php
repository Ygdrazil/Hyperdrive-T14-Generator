<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>T-14 Hyperdrive Generator</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/styleEffacement.css">
    <link rel="icon" type="image/png" href="img/dark_logo.png" />
  </head>
  <body>
    <header>
      <a href="index.php" id="homeBtn">
        <h1 id="websiteTitle">
          T-14 Hyperdrive Generator
        </h1>
      </a> 
      <nav>
        <ul>
          <a href="index.php?id=tuto" data-target="0">
            <li <?php if(!empty($_GET)){ if($_GET["id"] == "tuto") echo "class='btnMenuActive'"; } ?>>
              Tutoriels
            </li>
          </a>
          <a href="index.php?id=liens" data-target="1">
            <li <?php if(!empty($_GET)){ if($_GET["id"] == "liens") echo "class='btnMenuActive'"; } ?>>
              Liens
            </li>
          </a>
          <a href="index.php?id=boutons" data-target="2">
            <li <?php if(!empty($_GET)){ if($_GET["id"] == "boutons") echo "class='btnMenuActive'"; } ?>>
              Boutons
            </li>
          </a>
          <a href="index.php?id=menus" data-target="3">
            <li <?php if(!empty($_GET)){ if($_GET["id"] == "menus") echo "class='btnMenuActive'"; } ?>>
              Menus
            </li>
          </a>
          <a href="index.php?id=about" data-target="4">
            <li <?php if(!empty($_GET)){ if($_GET["id"] == "about") echo "class='btnMenuActive'"; } ?>>
              À Propos
            </li>
          </a>
        </ul>
      </nav>
    </header>
    <main>
      <section class="wrapper" id="main">
        <?php
          
          if(empty($_GET)){
            include("templates/home.html");
          }

          else{

            $renduPrisEnCharge=array("menus", "boutons", "liens");
            if(in_array($_GET["id"], $renduPrisEnCharge)){
              include("templates/page.php");
            }
            elseif($_GET["id"] == "about"){
              include("templates/about.php");
            }
            elseif ($_GET["id"] == "tuto") {
              include("templates/tuto.html");
            }
          }
         ?>
      </section>
    </main>
    <footer>
      &copy IUT Annecy 2020
    </footer>
    <script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.smoothState.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>