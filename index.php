<?php

// Compléter le code ci dessous pour afficher la longueur de la chaine de caracteres
$chaine = ("google");
echo  strlen($chaine);

echo"<br><br>"; //Decommentez les <br> pour tester l'affichage lorsque vous aurez plusieurs instructions

// Compléter le code ci-dessous pour inverser la chaine de caractere
$chaine2 = ("anticonstitutionellement");
echo  strrev($chaine2);
echo"<br><br>";
// Et si vous testiez également avec votre prénom ?

$prenom = ("Vanessa");
echo  strrev($prenom);

echo"<br><br>";

// Compléter le code ci dessous pour remplacer le mot ok par non
$oldtxt = "Ok Google!";
$newtxt = str_replace ("Ok", "non", "Ok Google");

echo $newtxt;