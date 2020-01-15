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
      <a href="index.php" id="homeBtn" data-target="0">
        <h1 id="websiteTitle">
          T-14 Hyperdrive Generator
        </h1>
      </a> 
    </header>
    <div id="main">
      <nav>
        <ul class="nav">
          <a href="index.php?id=tuto" data-target="-1">
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
      <div class="sceneElement"       
      <?php 
      if(!empty($_GET)) {
        switch ($_GET["id"]) {
          case 'tuto':
            echo " data-viewport='-1'";
            break;
          case 'liens':
            echo " data-viewport='1'";
            break;
          case 'boutons':
            echo " data-viewport='2'";
            break;
          case 'menus':
            echo " data-viewport='3'";
            break;
          case 'about':
            echo " data-viewport='4'";
            break;
        }
      }
    ?>>
        <main id="main">
          <section class="wrapper">
            <?php
              
              if(empty($_GET)){
                include("templates/home.html");
              }
              else{

                $renduPrisEnCharge=array("menus", "boutons", "liens");
                if(in_array($_GET["id"], $renduPrisEnCharge)){
                  include("templates/page.php");
                }
                else if($_GET["id"] == "about"){
                  include("templates/about.php");
                }
                else if($_GET["id"] == "tuto"){
                  include("templates/tuto.html");
                }
              }
             ?>
          </section>
        </main>
      </div>
    </div>

    

    <footer>
      &copy IUT Annecy 2020
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
    <script src="js/jquery.smoothState.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
      checkboxCtrl('#pasPareilP','#paddingBase', '#paddingAvance' );
      checkboxCtrl('#pasPareilPS', '#paddingBaseS', '#paddingAvanceS');

    <?php 
      if (!empty($_GET) and $_GET["id"] == "menu") {
    ?>
      checkboxCtrl('#pasPareilM', '#marginBase', '#marginAvance');
      checkboxCtrl('#pasPareilMS', '#marginBaseS', '#marginAvanceS');
    <?php
      }
     ?>
     checkboxSurvol();
    </script>
  </body>
</html>