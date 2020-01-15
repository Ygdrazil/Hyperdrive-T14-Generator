
<section class="generator">  <!-- C'est la section générale du générateur de liens -->

  <!-- On Commence par les options que l'on mettra sur le lien-->
  <section class="option">
    <?php
    if ($_GET["id"] == 'liens'){
      echo '<h2>Générateur T14 de liens</h2>';
    }
    if ($_GET["id"] == 'menus'){
      echo '<h2>Générateur T14 de menus</h2>';
    }
    if ($_GET["id"] == 'boutons'){
      echo '<h2>Générateur T14 de boutons</h2>';
    }
    ?>
    <h3>Options :</h3>
    <?php

    if(isset($_POST) and !empty($_POST)){
      echo "<br>";
      $ok = checkFormulaire($_GET["id"]);
    }
    ?>
    <form action="" method="post" class="no-smoothState">

     <?php 
     if (isset($_GET["id"]) and $_GET["id"] == "menus"){
      echo '
      <fieldset>
      <legend>
      Style du Menu
      </legend>
      <p>
      <!-- On prend la DISPOSITION DU MENU | MENU -->
      <label for="disposition">
      Disposition du menu
      </label>
      <select id="disposition" name="disposition">
      <option value="colone" ';
      
      if (isset($_POST["disposition"]) and $_POST["disposition"] == "colone") {
        echo "selected";
      }
      echo '>Colone</option>
      <option value="ligne" ';
      
      if (isset($_POST["disposition"]) and $_POST["disposition"] == "ligne") {
        echo "selected";
      }
      echo '>Ligne</option>
      </select>
      </p>
      <p>
      <label for="bgMenu">Couleur du background du menu</label>
      <input type="color" name="bgMenu" id="bgMenu" ';
      
      if(!isset($_POST["bgMenu"])){
        echo 'value="#ffffff"';
      }
      else{
        echo "value='".$_POST["bgMenu"]."'";
      }
      echo '>
      </p>
      <p>
      <label for="hauteur">Hauteur du menu</label>
      <input type="number" name="hauteur" id="hauteur" ';
      if(!empty($_POST["hauteur"])){ echo "value='".$_POST["hauteur"]."'"; }
      echo '>
      <select name="unitH" id="unitH">
      <option value="px" ';
      if(!empty($_POST["unitH"]) and $_POST["unitH"] == "px") { echo "selected"; }
      echo '>px</option>
      <option value="%" ';
      if(!empty($_POST["unitH"]) and $_POST["unitH"] == "%") { echo "selected"; } 
      echo '>%</option>
      </select>
      </p>
      <p>
      <label for="largeur">Largeur du menu</label>
      <input type="number" name="largeur" id="largeur" ';
      if(!empty($_POST["largeur"])){ echo "value='".$_POST["largeur"]."'"; }
      echo '> 
      <select name="unitL" id="unitL">
      <option value="px" ';
      if(!empty($_POST["unitL"]) and $_POST["unitL"] == "px") { echo "selected"; } 
      echo '>px</option>
      <option value="%" ';
      if(!empty($_POST["unitL"]) and $_POST["unitL"] == "%") { echo "selected"; } 
      echo '>%</option>
      </select>
      </p>
      <p>
      <input type="checkbox" name="centrage" id="centrage" ';
      
      if(isset($_POST["centrage"])){
        echo "checked";
      }
      echo '>
      <label for="centrage">Centrer les éléments</label>
      </p>
      </fieldset>';
    }

    ?>
    
    
    <fieldset>
      <!-- On commence par le comportement STATIQUE du lien -->
      <legend>Comportement statique :</legend>
      <?php
      if(isset($_GET["id"]) and $_GET["id"] != "menus" ){
        
        ?>
        <p>
          <label for="nom">Nom du <?php if ($_GET["id"] == 'liens'){
            echo "lien";
          }
          elseif($_GET["id"] == 'boutons') {
            echo "bouton";
          }
          ?></label>
          <input type="text" id="nom" name="nom"placeholder="Votre <?php if ($_GET["id"] == 'liens'){
            echo "lien";
          }
          else {
            echo "bouton";
          }
          ?>" 
          <?php 
          if(isset($_POST["nom"])){
            echo "value='".$_POST["nom"]."'";
          }
          ?>>
        </p>
        <?php if ($_GET["id"] == "liens"){?>
          <p>
            <label for="lien">Lien</label>
            <input type="text" id="lien" name="lien" placeholder="Votre lien" 
            <?php 
            if(isset($_POST["lien"])){
              echo "value='".$_POST["lien"]."'>";
            }
          }?>
        </p>
      <?php }?>
      <p>

        <!--------------------------- On choisis la POLICE | STATIQUE ----------------------->
        <label for='police'>
          Police du texte :
        </label>

        <select id="police" name="police">
          <option value="">-</option>
          <?php
          $fonts=array("Arial", "Helvetica", '"Liberation Sans"', "FreeSans", "sans-serif", '"Trebuchet MS"', '"Comic Sans MS"');
          foreach($fonts as $font){
            echo "\n\t<option value='$font' ";
            if (isset($_POST["police"]) and $font == $_POST["police"]){
              echo "selected";
            }
            echo ">$font</option>";
          }
          ?>
        </select>
      </p>
      <p> <!--------------------------- On choisis la TAILLE DU TEXTE | STATIQUE ----------------------->
        <label for="tailleTxt">Taille du texte</label>
        <input type="number" id="tailleTxt" name="tailleTxt" 
        <?php 
        if(!isset($_POST["tailleTxt"])){
          echo "value='20'";
        }
        else{
          echo "value='".$_POST["tailleTxt"]."'";
        }
        ?>>
      </p>
      <p>
        <!--------------------------- On choisis la COULEUR DU TEXTE | STATIQUE ----------------------->
        <label for="color">Couleur du texte</label>
        <input type="color" id="color" name="color" 
        <?php 
        if(!isset($_POST["color"])){
          echo 'value="#000000"';
        }
        else{
          echo "value='".$_POST["color"]."'";
        }
        ?>>
      </p>
      <p>
        <!--------------------------- On choisis la COULEUR DE FOND DU TEXTE | STATIQUE ----------------------->
        <label for="bgcolor">Couleur du fond</label>
        <input type="color" id="bgcolor" name="bgcolor" <?php 
        if(!isset($_POST["bgcolor"])){
          echo 'value="#ffffff"';
        }
        else{
          echo "value='".$_POST["bgcolor"]."'";
        }
        ?>>
      </p>
      <p>
        <!--------------------------- On choisis la RONDEUR DES BORDURES | STATIQUE ----------------------->
        <label for="bradius">Rondeur des bordures</label>
        <input type="number" id="bradius" name="bradius"
        <?php
        if(isset($_POST["bradius"]))
        {
          echo "value='".$_POST["bradius"]."'";
        }
        ?>>

        <!--------------------------- On choisis l'UNITE POUR CELLE CI | STATIQUE ----------------------->
        <select name="units" id="units">
          <option value="px"
          <?php
          if (isset($_POST["units"]) and $_POST["units"] === "px" ){
            echo "selected";
          }
          ?>>px</option>
          <option value="%"
          <?php
          if (isset($_POST["units"]) and $_POST["units"] === "%" ){
            echo "selected";
          }
          ?>>%</option>
        </select>
      </p>

      <p>
        <!--------------------------- On choisis le STYLE DU LIEN (gras/souligne/italique) | STATIQUE ----------------------->
        <input type="checkbox" name="gras" id="gras" 
        <?php 
        if(isset($_POST["gras"])){
          echo "checked";
        }
        ?>>
        <label for="gras">Gras</label>
        <input type="checkbox" name="italique" id="italique" 
        <?php 
        if(isset($_POST["italique"])){
          echo "checked";
        }
        ?>>
        <label for="italique" checked>Italique</label>
        <input type="checkbox" name="souligne" id="souligne" 
        <?php 
        if(isset($_POST["souligne"])){
          echo "checked";
        }
        ?>>
        <label for="souligne">Souligné</label>
      </p>
      <br>
      <p>
        <!--------------------------- On choisis les MARGES INTERNES | STATIQUE ----------------------->
        <h5>
          Les marges internes
        </h5>

        <p id="paddingBase">
          <label for="padding">Marges intérieures en px : </label>
          <input type="number" id="padding" name="padding" 
          <?php
          if(isset($_POST["padding"])){
            echo "value='".$_POST["padding"]."'";
          }
          ?>>

        </p>
        <p>
          <input type="checkbox" onclick="checkboxCtrl('#pasPareilP','#paddingBase', '#paddingAvance' )" id="pasPareilP" name="pasPareilP" 
          <?php
          if(isset($_POST["pasPareilP"])){
            echo "checked";
          }
          ?>>
          <label for="pasPareilP">Cotés différents</label>
        </p>

        <div id="paddingAvance" style="display:none">
        <p>
          <label for="padding-top">Marge intérieure en haut en px : </label>
          <input type="number" id="padding-top" name="padding-top" 
          <?php
          if(isset($_POST["padding-top"])){
            echo "value='".$_POST["padding-top"]."'";
          }
          ?>>

        </p>
        <p>
          <label for="padding-bottom">Marge intérieure en bas en px : </label>
          <input type="number" id="padding-bottom" name="padding-bottom" 
          <?php
          if(isset($_POST["padding-bottom"])){
            echo "value='".$_POST["padding-bottom"]."'";
          }
          ?>>

        </p>
        <p>
          <label for="padding-left">Marge intérieure à gauche en px : </label>
          <input type="number" id="padding-left" name="padding-left" 
          <?php
          if(isset($_POST["padding-left"])){
            echo "value='".$_POST["padding-left"]."'";
          }
          ?>>

        </p>
        <p>
          <label for="padding-right">Marge intérieure à droite en px : </label>
          <input type="number" id="padding-right" name="padding-right" 
          <?php
          if(isset($_POST["padding-right"])){
            echo "value='".$_POST["padding-right"]."'";
          }
          ?>>
        </p>
        <br><br>
        </div>

        <?php
        if (isset($_GET["id"]) and $_GET["id"] == "menus"){
          ?>

          <p>
					<!--------------------------- On choisis les MARGES EXTERNE | STATIQUE ----------------------->
					<h5>
						Les marges externes
					</h5>

					<p id="marginBase">
						<label for="margin">Marges externes en px : </label>
						<input type="number" id="margin" name="margin" 
						<?php
						if(isset($_POST["margin"])){
							echo "value='".$_POST["margin"]."'";
						}
						?>>

					</p>
          <p>
					<input type="checkbox" onclick="checkboxCtrl('#pasPareilM', '#marginBase', '#marginAvance')" id="pasPareilM" name="pasPareilM" 
					<?php
					if(isset($_POST["pasPareilM"])){
						echo "checked";
					}
					?>>
					<label for="pasPareilM">Cotés différents</label>
				</p>
        <div id="marginAvance">
				<p>
					<label for="margin-top">Marge externes en haut en px : </label>
					<input type="number" id="margin-top" name="margin-top" 
					<?php
					if(isset($_POST["margin-top"])){
						echo "value='".$_POST["margin-top"]."'";
					}
					?>>

				</p>
				<p>
					<label for="margin-bottom">Marge externes en bas en px : </label>
					<input type="number" id="margin-bottom" name="margin-bottom" 
					<?php
					if(isset($_POST["margin-bottom"])){
						echo "value='".$_POST["margin-bottom"]."'";
					}
					?>>

				</p>
				<p>
					<label for="margin-left">Marge externes à gauche en px : </label>
					<input type="number" id="margin-left" name="margin-left" 
					<?php
					if(isset($_POST["margin-left"])){
						echo "value='".$_POST["margin-left"]."'";
					}
					?>>

				</p>
				<p>
					<label for="margin-right">Marge externes à droite en px : </label>
					<input type="number" id="margin-right" name="margin-right" 
					<?php
					if(isset($_POST["margin-right"])){
						echo "value='".$_POST["margin-right"]."'";
					}
					?>>
				</p>
        </div>

          <?php

        }
        ?>
        
      </fieldset>

      <!--------------------------- On défini le comportement de notre lien au SURVOL ----------------------->
      <fieldset>
        <legend>Comportement au survol</legend>
        <p>

          <!--------------------------- On demande à l'utilisateur si il veut activer les changements au survol | SURVOL ----------------------->
          <input type="checkbox" name="activerSurvol" onclick="checkboxSurvol()" id="activerSurvol" 
          <?php 
          if(isset($_POST["activerSurvol"])){
            echo "checked";
          }
          ?>>
          <label for="activerSurvol">Activer les actions au survol</label>
        </p>

        <div id="survol">

        <p>
          <!-- On choisi le temps que prendra l'animation pour se dérouler -->
          <label for="duree">Durée d'animation</label>
          <input type="number" name="duree" id="duree" step="0.1"  
          <?php 
          if (isset($_POST["duree"])) {
            echo "value='".$_POST["duree"]."'";
          }
          else{
            echo "value='0'";
          }
          ?>>
        </p>

        <p>
          <!--------------------------- On choisis la POLICE | SURVOL ----------------------->
          <label for='policeS'>
            Police du texte :
          </label>

          <select id="policeS" name="policeS">
            <option value="">-</option>
            <?php
            $fonts=array("Arial", "Helvetica", '"Liberation Sans"', "FreeSans", "sans-serif", '"Trebuchet MS"', '"Comic Sans MS"');
            foreach($fonts as $font){
              echo "\n\t<option value='$font' ";
              if (isset($_POST["policeS"]) and $font == $_POST["policeS"]){
                echo "selected";
              }
              echo ">$font</option>";
            }
            ?>
          </select>
        </p>
        <p>
          <!--------------------------- On choisis la taille du texte | SURVOL ----------------------->
          <label for="tailleTxtS">Taille du texte</label>
          <input type="number" id="tailleTxtS" name="tailleTxtS" 
          <?php 
          if(!isset($_POST["tailleTxtS"])){
            echo "value='20'";
          }
          else{
            echo "value='".$_POST["tailleTxtS"]."'";
          }
          ?>>
        </p>

        <p>
          <!--------------------------- On choisis la COULEUR DU TEXTE | SURVOL ----------------------->
          <label for="colorS">Couleur du texte</label>
          <input type="color" id="colorS" name="colorS" 
          <?php 
          if(!isset($_POST["colorS"])){
            echo 'value="#000000"';
          }
          else{
            echo "value='".$_POST["colorS"]."'";
          }
          ?>>
        </p>
        <p>
          <!--------------------------- On choisis la COULEUR DE FOND DU TEXTE | SURVOL ----------------------->
          <label for="bgcolorS">Couleur du fond</label>
          <input type="color" id="bgcolorS" name="bgcolorS" <?php 
          if(!isset($_POST["bgcolorS"])){
            echo 'value="#ffffff"';
          }
          else{
            echo "value='".$_POST["bgcolorS"]."'";
          }
          ?>>
        </p>
        <p>
          <!--------------------------- On choisis la RONDEUR DES BORDURES | SURVOL ----------------------->
          <label for="bradiusS">Rondeur des bordures</label>
          <input type="number" id="bradiusS" name="bradiusS" 
          <?php
          if(isset($_POST["bradiusS"]))
          {
            echo "value='".$_POST["bradiusS"]."'";
          }
          ?>>
          <!--------------------------- On choisis l'UNITE DE CELLE CI | SURVOL ----------------------->
          <select name="unitsS" id="unitsS">
            <option value="px"
            <?php
            if (isset($_POST["unitsS"]) and $_POST["unitsS"] === "px" ){
              echo "selected";
            }
            ?>>px</option>
            <option value="%"
            <?php
            if (isset($_POST["unitsS"]) and $_POST["unitsS"] === "%" ){
              echo "selected";
            }
            ?>>%</option>
          </select>
        </p>
        <p>
          <!--------------------------- On choisis le STYLE DU LIEN (gras/souligne/italique) | SURVOL ----------------------->
          <input type="checkbox" name="grasS" id="grasS" 
          <?php 
          if(isset($_POST["grasS"])){
            echo "checked";
          }
          ?>>
          <label for="grasS">Gras</label>
          <input type="checkbox" name="italiqueS" id="italiqueS" 
          <?php 
          if(isset($_POST["italiqueS"])){
            echo "checked";
          }
          ?>>
          <label for="italiqueS" checked>Italique</label>
          <input type="checkbox" name="souligneS" id="souligneS" 
          <?php 
          if(isset($_POST["souligneS"])){
            echo "checked";
          }
          ?>>
          <label for="souligneS">Souligné</label>
        </p>
        <br>
        <p>
          <!--------------------------- On choisis les MARGES INTERNES | SURVOL ----------------------->
          <h5>
            Les marges internes
          </h5>

          <p id="paddingBaseS">
            <label for="paddingS">Marges intérieures en px : </label>
            <input type="number" id="paddingS" name="paddingS" 
            <?php
            if(isset($_POST["paddingS"])){
              echo "value='".$_POST["paddingS"]."'";
            }
            ?> >

          </p>
          <p>
            <input type="checkbox" onclick="checkboxCtrl('#pasPareilPS', '#paddingBaseS', '#paddingAvanceS')" id="pasPareilPS" name="pasPareilPS" 
            <?php
            if(isset($_POST["pasPareilPS"])){
              echo "checked";
            }
            ?>>
            <label for="pasPareilPS">Cotés différents</label>
          </p>
          <div id='paddingAvanceS'>
          <p>
            <label for="padding-topS">Marge intérieure en haut en px : </label>
            <input type="number" id="padding-topS" name="padding-topS" 
            <?php
            if(isset($_POST["padding-topS"])){
              echo "value='".$_POST["padding-topS"]."'";
            }
            ?>>

          </p>
          <p>
            <label for="padding-bottomS">Marge intérieure en bas en px : </label>
            <input type="number" id="padding-bottomS" name="padding-bottomS" 
            <?php
            if(isset($_POST["padding-bottomS"])){
              echo "value='".$_POST["padding-bottomS"]."'";
            }
            ?>>

          </p>
          <p>
            <label for="padding-leftS">Marge intérieure à gauche en px : </label>
            <input type="number" id="padding-leftS" name="padding-leftS" 
            <?php
            if(isset($_POST["padding-leftS"])){
              echo "value='".$_POST["padding-leftS"]."'";
            }
            ?>>

          </p>
          <p>
            <label for="padding-rightS">Marge intérieure à droite en px : </label>
            <input type="number" id="padding-rightS" name="padding-rightS" 
            <?php
            if(isset($_POST["padding-rightS"])){
              echo "value='".$_POST["padding-rightS"]."'";
            }
            ?>
            >

          </p>
          </div>

          <br><br>
          
          <?php
          if (isset($_GET["id"]) and $_GET["id"] == "menus"){
            ?>

            <p>
          <!--------------------------- On choisis les MARGES EXTERNE | SURVOL ----------------------->
          <h5>
            Les marges externes
          </h5>

          <p id="marginBaseS">
            <label for="marginS">Marges externes en px : </label>
            <input type="number" id="marginS" name="marginS" 
            <?php
            if(isset($_POST["marginS"])){
              echo "value='".$_POST["marginS"]."'";
            }
            ?>>

          </p>
          <input type="checkbox" onclick="checkboxCtrl('#pasPareilMS', '#marginBaseS', '#marginAvanceS')" id="pasPareilMS" name="pasPareilMS" 
          <?php
          if(isset($_POST["pasPareilMS"])){
            echo "checked";
          }
          ?>>
          <label for="pasPareilMS">Cotés différents</label>
        </p>
        <div id="marginAvanceS">
        <p>
          <label for="margin-topS">Marge externes en haut en px : </label>
          <input type="number" id="margin-topS" name="margin-topS" 
          <?php
          if(isset($_POST["margin-topS"])){
            echo "value='".$_POST["margin-topS"]."'";
          }
          ?>>

        </p>
        <p>
          <label for="margin-bottomS">Marge externes en bas en px : </label>
          <input type="number" id="margin-bottomS" name="margin-bottomS" 
          <?php
          if(isset($_POST["margin-bottomS"])){
            echo "value='".$_POST["margin-bottomS"]."'";
          }
          ?>>

        </p>
        <p>
          <label for="margin-leftS">Marge externes à gauche en px : </label>
          <input type="number" id="margin-leftS" name="margin-leftS" 
          <?php
          if(isset($_POST["margin-leftS"])){
            echo "value='".$_POST["margin-leftS"]."'";
          }
          ?>>

        </p>
        <p>
          <label for="margin-rightS">Marge externes à droite en px : </label>
          <input type="number" id="margin-rightS" name="margin-rightS" 
          <?php
          if(isset($_POST["margin-rightS"])){
            echo "value='".$_POST["margin-rightS"]."'";
          }
          ?>>
        </p>
        </div>
        

            <?php
          }
          ?>

          </div>

        </fieldset>
        <input id="btnRendu" type="submit" name="envoyer" value="Faire le rendu" class="validation">
      </form>
  </section>
