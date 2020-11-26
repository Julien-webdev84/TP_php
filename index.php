

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
<?php

 


//tableau contenant les deux articles//
    $array=[ 

      [ " La Chine a lancé le premier satellite 6G au monde",
        "Le 24 novembre 2020 à 08:10",
        " Stan Adkens"
],
[
    "Une augmentation de 18 % des dépenses des utilisateurs finals du cloud public dans le monde prévue en 2021 ",
    "Le 18 novembre 2020 à 10:32",
    "Sandra C"
    ] 
];
var_dump($_GET);
?>;
<h1>tableau<?=$_GET[""]?>

</h1>
<!--   Menu-deroulant NAV -->
  
<na1v>
<ul id="navigation">
  <li>
  <a href="5G.html" title="aller à la section 1">5G</a>
    <ul>
  <li><a href="5G.html/article2" title="aller à la section 2">Cybersécurité</a></li>
    </ul>
  </li>
  <ul>
  <li><a href="#Intelligence artificielle.html" title="aller à la section 3">Intelligence artificielle</a></li>
  <li><a href="#Mobilité.html" title="aller à la section 4">Mobilité</a></li>
  <li><a href="#High-Tech.html" title="aller à la section 5">High-Tech</a></li>
</ul>
</nav>

</body>
</html>




