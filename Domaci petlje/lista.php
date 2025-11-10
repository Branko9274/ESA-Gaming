<?php

$proizvodi = [
    ["ime" => "Cokolada", "cena" => 500],
    ["ime" => "Posudje", "cena" => 1500],
    ["ime" => "Voce", "cena" => 800],
    ["ime" => "Povrce", "cena" => 1200],
];

foreach ($proizvodi as $proizvod) {
    if ($proizvod["cena"] >= 1000) {
        continue; 
    }
    echo $proizvod["ime"] . " - " . $proizvod["cena"] . " dinara";
}




