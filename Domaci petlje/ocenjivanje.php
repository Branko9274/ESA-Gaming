<?php

$poeni = (int)readline("Unesite broj poena (0-100): ");

if ($poeni >= 90 && $poeni <= 100) 
    {
    $ocena = "Odličan";
    } 
elseif ($poeni >= 75 && $poeni <= 89)
    {
    $ocena = "Vrlo dobar";
    } 
elseif ($poeni >= 60 && $poeni <= 74) 
    {
    $ocena = "Dobar";
    } 
elseif ($poeni >= 50 && $poeni <= 59) 
    {
    $ocena = "Dovoljan";
    }
elseif ($poeni >= 0 && $poeni < 50)
    {
    $ocena = "Nedovoljan";
    }
else {
    $ocena = "Nevažeći unos";
    }

echo "Ocena: $ocena";
?>
