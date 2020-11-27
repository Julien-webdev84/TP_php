
<?php

var_dump($_GET);

if(isset($_GET["page"])) {

  switch($_GET["page"]) {
      case "page1" : $pageAInclure = "page1.php"; 
      break;
      case "page2" : $pageAInclure = "page2.php"; 
      break;
      case "page3" : $pageAInclure = "page3.php"; 
      break;
      case "vuearticle" : $pageAInclure = "page3.php"; 
      break;
      default : $pageAInclure = "page1.php"; 
  }
// Sinon :
} else {
  $pageAInclure = "page1.php";
}



?>



<!--   Menu-deroulant NAV -->
  
<<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>naviguation en php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <body>
      <nav>
      <ul class="navigation">
        <li> <a href="index.php?page=page1">Accueil</a>
        <li><a href="index.php?page=page2"> /5G></li>
          <li><a href="index.php?page=page3" >Mobilités</a></li>
       
      </ul>
      </nav>
      <div class = "content">
        

<!-- ici HTML spécifique à chaque page -->
<?php  require "php/$pageAInclure" ?>
      </div>
</body>
</html>