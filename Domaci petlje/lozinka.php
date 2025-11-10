<?php


$lozinka = readline ("Unesi lozinku: ");
$duzina = strlen ($lozinka) >= 8;
$veliko = preg_match ('/[A-Z]/', $lozinka);
$broj = preg_match ('/[0-9]/', $lozinka);


if ($duzina && $veliko && $broj) {
    echo "Lozinka je jaka – ima najmanje 8 karaktera, veliko slovo i broj.";
} 

elseif ($duzina && ($veliko || $broj)) {
    echo "Lozinka je srednja – ispunjava neke uslove, ali ne sve.";
} 

else {
    echo "Lozinka je slaba – prekratka je ili nedostaju veliko slovo/broj.";
}


?>

