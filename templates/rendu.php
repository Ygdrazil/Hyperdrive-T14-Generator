<?php
echo '<!-- Dans la prochaine section on gère le RENDU --> <section class="rendu"> <h3>Rendu :</h3> '; 
if (isset($ok)) {
  echo "\n\n<style type='text/css'>";
  genererCSS($ok, $_GET["id"]);
  echo "\n\n</style>";
}


if (isset($_GET["id"])){
  if($_GET["id"] == "menus"){
    echo '<ul class="menuRendu"> ';
    for ($i=1; $i <= 3 ; $i++) { 
      echo "<li class='liRendu'><a href='$i' class='lienRendu'>$i</a></li>";
    }
    echo '</ul>';
  }
  elseif($_GET["id"] == "liens"){
    echo '
    <a class="lienRendu" href="';
    if(!empty($_POST['lien'])){ echo htmlspecialchars($_POST['lien']); } 
  else { echo 'https://i.imgflip.com/1e2xyl.jpg'; } 

  echo '" text-align: center;" >';
  if(!empty($_POST["nom"])){ echo htmlspecialchars($_POST["nom"]) ;} 
  else{echo "Mon lien" ;}

  echo '</a>';
}
elseif($_GET["id"] == "boutons"){
 echo "<button class='lienRendu'>";
 if (!empty($_POST["nom"])){
  echo htmlspecialchars($_POST["nom"]);
}
else{
  echo "Mon bouton";
}
echo "</button>";
}
}
          // }



echo '<!-- Dans la prochaine section on gère l\'affichage du code -->

<section class="code">';

echo "<textarea cols='70' rows='30' readonly>";
if (isset($_GET["id"])){
  if($_GET["id"] == "liens"){
    echo "<a class=\"lienRendu\" href='";
    if(!empty($_POST['lien']))
      { echo htmlspecialchars($_POST['lien']); } 
    else 
      { echo 'https://i.imgflip.com/1e2xyl.jpg'; }
    echo "' >";

    if(!empty($_POST["nom"]))
      { echo htmlspecialchars($_POST["nom"]) ;} 

    else
      {echo "Mon lien" ;}

    echo "</a>";
  }
  elseif($_GET["id"] == "menus"){
   echo '<ul class="menuRendu"> ';
   for ($i=1; $i <= 3 ; $i++) { 
    echo "\n\t<li class='liRendu'>\n\t\t<a href='$i' class='lienRendu'>$i</a>\n\t</li>\n";
  }
  echo '</ul>';
}
elseif($_GET["id"] == "boutons"){
  echo "<button class='lienRendu'>";
  if (!empty($_POST["nom"])){
    echo htmlspecialchars($_POST["nom"]);
  }
  else{
    echo "Mon bouton";
  }
  echo "</button>";
}
}
if (isset($ok)) {
  echo "\n\n<style type='text/css'>";
  genererCSS($ok, $_GET["id"]);
  echo "\n\n</style>";
}


echo "\n</textarea> </section>";
?>

