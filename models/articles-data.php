<?php
$article = 'Monture';
$prix = 15;
$devise = '$';

// // definition d'un tableau en php
// $fruits = ["pomme", "orange", "mangue", "banane", "raisin"];

// $cote = [7, 8, 5, 10, 9, 4];

// $moyennes = [
//     // clé => valeur
//     "Eric" => 4.5,
//     "John" => 7.2,
//     "Mike" => 8.2,
//     "Ruth" => 9.0,
//     "Julie" => 5.5
// ];

$articles_names =[
    "Bracelet",
    "Montre",
    "Cable USB",
    "Ecouters",
    "Carnets",
];

$articles_prix = [
    "Bracelet" => 5000,
    "Montre" => 13000,
    "Cable USB" => 7500,
    "Ecouters" => 25000,
    "Carnets" => 2500,
];

//somme de tous les articles
$total = 0;
foreach($articles_prix as $p){
    $total += $p;
}
