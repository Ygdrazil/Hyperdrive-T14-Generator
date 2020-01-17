<?php 

function checkFormulaireLien(){
  $ok = True;

    // Vérification de la partie statique :
  if($_POST["tailleTxt"] <= 0){ // Si la taille du texte est négative ou = 0
    $ok = False;
    echo "<p class='erreur'>Vous devez rensignez une taille de texte valide </p>";
  }
  if($_POST["bradius"] < 0){ // Si le border radius n'est pas valide
  $ok = False;
  echo "<p class='erreur'>Vous devez rensignez une rondeur de bordure valide </p>";
}

              // Vérification de la partie au survol :
if (isset($_POST["activerSurvol"])){
  if ($_POST["duree"] < 0) {
    $ok = False;
    echo "<p class='erreur'>Vous devez renseigner une durée d'animation valide</p>";
  }
  if($_POST["tailleTxtS"] <= 0){
    $ok = False;
    echo "<p class='erreur'>Vous devez rensignez une taille de texte valide </p>";
  }
  if($_POST["bradiusS"] < 0){
    $ok = False;
    echo "<p class='erreur'>Vous devez rensignez une rondeur de bordure valide </p>";
  } 
}

return $ok;

}


function genererCSSLien($ok){
  echo "\n\t.lienRendu{";
  if(isset($_POST) and !empty($_POST)){
    if($ok){
      if($_POST["police"] !== ""){
        echo "\n\t\tfont-family: ".$_POST["police"]." ;";
      }
      if(!empty($_POST["tailleTxt"])){
        echo "\n\t\tfont-size:".$_POST["tailleTxt"]."px;";
      }
      if(!empty($_POST["color"])){
        echo "\n\t\tcolor:".$_POST["color"].";";
      }
      if(!empty($_POST["bgcolor"])){
        echo "\n\t\tbackground-color:".$_POST["bgcolor"].";";
      }
      if(!empty($_POST["bradius"])){
        echo "\n\t\tborder-radius:".$_POST["bradius"].$_POST["units"].";";
      }
      if(isset($_POST["souligne"])){
        echo "\n\t\ttext-decoration: underline;";
      }
      else{
        echo "\n\t\ttext-decoration:none;";
      }
      if(isset($_POST["gras"])){
        echo "\n\t\tfont-weight: bold;";
      }
      if(isset($_POST["italique"])){
        echo "\n\t\tfont-style: italic;";
      }
      if(isset($_POST["pasPareilP"])){
        if(!empty($_POST["padding-top"])){
          echo "\n\t\tpadding-top:".$_POST["padding-top"]."px;";
        }
        if(!empty($_POST["padding-bottom"])){
          echo "\n\t\tpadding-bottom:".$_POST["padding-bottom"]."px;";
        }
        if(!empty($_POST["padding-right"])){
          echo "\n\t\tpadding-right:".$_POST["padding-right"]."px;";
        }
        if(!empty($_POST["padding-left"])){
          echo "\n\t\tpadding-left:".$_POST["padding-left"]."px;";
        }
      }
      else{
        if(!empty($_POST["padding"])){
          echo "\n\t\tpadding:".$_POST["padding"]."px;";
        }
      }
    }
  }
  echo "\n\t}\n\n\t.lienRendu:hover{";

  if(isset($_POST) and !empty($_POST))  {
    if($ok and isset($_POST["activerSurvol"])){
      if (!empty($_POST["duree"])) {
        echo "\n\t\ttransition-duration: ".$_POST["duree"]."s;";
      }
      if($_POST["policeS"] !== ""){
        echo "\n\t\tfont-family: ".$_POST["policeS"]." ;";
      }
      if(!empty($_POST["tailleTxtS"])){
        echo "\n\t\tfont-size:".$_POST["tailleTxtS"]."px;";
      }
      if(!empty($_POST["colorS"])){
        echo "\n\t\tcolor:".$_POST["colorS"].";";
      }
      if(!empty($_POST["bgcolorS"])){
        echo "\n\t\tbackground-color:".$_POST["bgcolorS"].";";
      }
      if(!empty($_POST["bradiusS"])){
        echo "\n\t\tborder-radius:".$_POST["bradiusS"].$_POST["unitsS"].";";
      }
      if(isset($_POST["souligneS"])){
        echo "\n\t\ttext-decoration: underline;";
      }
      else{
        echo "\n\t\ttext-decoration:none;";
      }
      if(isset($_POST["grasS"])){
        echo "\n\t\tfont-weight: bold;";
      }
      if(isset($_POST["italiqueS"])){
        echo "\n\t\tfont-style: italic;";
      }
      if(isset($_POST["pasPareilPS"])){
        if(!empty($_POST["padding-topS"])){
          echo "\n\t\tpadding-top:".$_POST["padding-topS"]."px;";
        }
        if(!empty($_POST["padding-bottomS"])){
          echo "\n\t\tpadding-bottom:".$_POST["padding-bottomS"]."px;";
        }
        if(!empty($_POST["padding-rightS"])){
          echo "\n\t\tpadding-right:".$_POST["padding-rightS"]."px;";
        }
        if(!empty($_POST["padding-leftS"])){
          echo "\n\t\tpadding-left:".$_POST["padding-leftS"]."px;";
        }
      }
      else{
        if(!empty($_POST["paddingS"])){
          echo "\n\t\tpadding:".$_POST["paddingS"]."px;";
        }
      }
    }
  }
  echo "\n\t}";
}



function genererCSSMenus($ok){
  echo "\n\t.menuRendu{";
  echo "\n\t\tlist-style-type: none;";
  if (isset($_POST) and !empty($_POST)) {
    
    if (!empty($_POST["bgMenu"])){
      echo "\n\t\tbackground-color:".$_POST["bgMenu"].";";
    }
    if (!empty($_POST["hauteur"])){
      echo "\n\t\theight:".$_POST["hauteur"].$_POST["unitH"].";";
    }
    if (!empty($_POST["largeur"])){
      echo "\n\t\twidth:".$_POST["largeur"].$_POST["unitL"].";";
    }
    if (isset($_POST["centrage"])){
      echo"\n\t\tdisplay:flex;\n\t\tjustify-content: center;";
    }
    if(isset($_POST["pasPareilP"])){

      if(!empty($_POST["padding-top"])){
        echo "\n\t\tpadding-top:".$_POST["padding-top"]."px;";
      }
      if(!empty($_POST["padding-bottom"])){
        echo "\n\t\tpadding-bottom:".$_POST["padding-bottom"]."px;";
      }
      if(!empty($_POST["padding-right"])){
        echo "\n\t\tpadding-right:".$_POST["padding-right"]."px;";
      }
      if(!empty($_POST["padding-left"])){
        echo "\n\tpadding-left:".$_POST["padding-left"]."px;";
      }
    }
    else{
      if(!empty($_POST["padding"])){
        echo "\n\tpadding:".$_POST["padding"]."px;";
      }
    }
  }

  echo "\n}";

  echo "\n\t.liRendu{";

  if(isset($_POST) and !empty($_POST)){
    if ($ok){
     if($_POST["disposition"] == "ligne"){
      echo"\n\t\tdisplay: inline-block;";
    }
  }
}


echo "\n}\n\t.lienRendu{";
if(isset($_POST) and !empty($_POST)){
  if($ok){
   
    if($_POST["police"] !== ""){
      echo "\n\t\tfont-family: ".$_POST["police"]." ;";
    }
    if(!empty($_POST["tailleTxt"])){
      echo "\n\t\tfont-size:".$_POST["tailleTxt"]."px;";
    }
    if(!empty($_POST["color"])){
      echo "\n\t\tcolor:".$_POST["color"].";";
    }
    if(!empty($_POST["bgcolor"])){
      echo "\n\t\tbackground-color:".$_POST["bgcolor"].";";
    }
    if(!empty($_POST["bradius"])){
      echo "\n\t\tborder-radius:".$_POST["bradius"].$_POST["units"].";";
    }
    if(isset($_POST["souligne"])){
      echo "\n\t\ttext-decoration: underline;";
    }
    else{
      echo "\n\t\ttext-decoration:none;";
    }
    if(isset($_POST["gras"])){
      echo "\n\t\tfont-weight: bold;";
    }
    if(isset($_POST["italique"])){
      echo "\n\t\tfont-style: italic;";
    }
    if(isset($_POST["pasPareilP"])){
      if(!empty($_POST["padding-top"])){
        echo "\n\t\tpadding-top:".$_POST["padding-top"]."px;";
      }
      if(!empty($_POST["padding-bottom"])){
        echo "\n\t\tpadding-bottom:".$_POST["padding-bottom"]."px;";
      }
      if(!empty($_POST["padding-right"])){
        echo "\n\t\tpadding-right:".$_POST["padding-right"]."px;";
      }
      if(!empty($_POST["padding-left"])){
        echo "\n\tpadding-left:".$_POST["padding-left"]."px;";
      }
    }
    else{
      if(!empty($_POST["padding"])){
        echo "\n\tpadding:".$_POST["padding"]."px;";
      }
    }
    if(isset($_POST["pasPareilM"])){

      if(!empty($_POST["margin-top"])){
        echo "\n\t\tmargin-top:".$_POST["margin-top"]."px;";
      }
      if(!empty($_POST["margin-bottom"])){
        echo "\n\t\tmargin-bottom:".$_POST["margin-bottom"]."px;";
      }
      if(!empty($_POST["margin-right"])){
        echo "\n\t\tmargin-right:".$_POST["margin-right"]."px;";
      }
      if(!empty($_POST["margin-left"])){
        echo "\n\tmargin-left:".$_POST["margin-left"]."px;";
      }
    }
    else{
      if(!empty($_POST["margin"])){
        echo "\n\tmargin:".$_POST["margin"]."px;";
      }
    }
  }
}
echo "\n\t}\n\n\t.lienRendu:hover{";

if(isset($_POST) and !empty($_POST))  {
  if($ok and isset($_POST["activerSurvol"])){
    if (!empty($_POST["duree"])) {
      echo "\n\t\ttransition-duration: ".$_POST["duree"]."s;";
    }
    if($_POST["policeS"] !== ""){
      echo "\n\t\tfont-family: ".$_POST["policeS"]." ;";
    }
    if(!empty($_POST["tailleTxtS"])){
      echo "\n\t\tfont-size:".$_POST["tailleTxtS"]."px;";
    }
    if(!empty($_POST["colorS"])){
      echo "\n\t\tcolor:".$_POST["colorS"].";";
    }
    if(!empty($_POST["bgcolorS"])){
      echo "\n\t\tbackground-color:".$_POST["bgcolorS"].";";
    }
    if(!empty($_POST["bradiusS"])){
      echo "\n\t\tborder-radius:".$_POST["bradiusS"].$_POST["unitsS"].";";
    }
    if(isset($_POST["souligneS"])){
      echo "\n\t\ttext-decoration: underline;";
    }
    else{
      echo "\n\t\ttext-decoration:none;";
    }
    if(isset($_POST["grasS"])){
      echo "\n\t\tfont-weight: bold;";
    }
    if(isset($_POST["italiqueS"])){
      echo "\n\t\tfont-style: italic;";
    }
    if(isset($_POST["pasPareilPS"])){

      if(!empty($_POST["padding-topS"])){
        echo "\n\t\tpadding-top:".$_POST["padding-topS"]."px;";
      }
      if(!empty($_POST["padding-bottomS"])){
        echo "\n\t\tpadding-bottom:".$_POST["padding-bottomS"]."px;";
      }
      if(!empty($_POST["padding-rightS"])){
        echo "\n\t\tpadding-right:".$_POST["padding-rightS"]."px;";
      }
      if(!empty($_POST["padding-leftS"])){
        echo "\n\t\tpadding-left:".$_POST["padding-leftS"]."px;";
      }
    }
    else{
      if(!empty($_POST["paddingS"])){
        echo "\n\t\tpadding:".$_POST["paddingS"]."px;";
      }
    }

    if(isset($_POST["pasPareilMS"])){

      if(!empty($_POST["margin-top"])){
        echo "\n\t\tmargin-top:".$_POST["margin-topS"]."px;";
      }
      if(!empty($_POST["margin-bottomS"])){
        echo "\n\t\tmargin-bottom:".$_POST["margin-bottomS"]."px;";
      }
      if(!empty($_POST["margin-rightS"])){
        echo "\n\t\tmargin-right:".$_POST["margin-rightS"]."px;";
      }
      if(!empty($_POST["margin-leftS"])){
        echo "\n\tmargin-left:".$_POST["margin-leftS"]."px;";
      }
    }
    else{
      if(!empty($_POST["marginS"])){
        echo "\n\tmargin:".$_POST["marginS"]."px;";
      }
    }
  }
}
echo "\n\t}";
}

function checkFormulaireMenu(){
  $ok=checkFormulaireLien();
  if(!empty($_POST["hauteur"]) and $_POST["hauteur"] <= 0){
    $ok = False;
    echo "<p class='erreur'>Renseignez une hauteur de Menu valide</p>";
  }
  if(!empty($_POST["largeur"]) and $_POST["largeur"] <= 0){
    $ok = False;
    echo "<p class='erreur'>Renseignez une largeur de Menu valide</p>";
  }
  return $ok;
}

function genererCSS($ok, $element){
  if($element == "liens"){
    genererCSSLien($ok);
  }
  elseif($element == "menus"){
    genererCSSMenus($ok);
  }
  elseif($element == "boutons"){
    genererCSSLien($ok);
  }
}

function checkFormulaire($element){
  if ($element == "liens"){
    return checkFormulaireLien();
  }
  elseif($element == "menus"){
    return checkFormulaireMenu();
  }
  elseif($element == "boutons"){
    return checkFormulaireLien();
  }
}


?>