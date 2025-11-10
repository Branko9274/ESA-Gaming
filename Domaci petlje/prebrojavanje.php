<?php

$korisnici = [
    ['ime' => 'Marko', 'status' => 'aktivan'],
    ['ime' => 'Ana', 'status' => 'neaktivan'],
    ['ime' => 'Ivan', 'status' => 'aktivan'],
    ['ime' => 'Petra', 'status' => 'neaktivan'],
    ['ime' => 'Pera', 'status' => 'neaktivan'],
    ['ime' => 'VUK', 'status' => 'aktivan'],
    ['ime' => 'Milica', 'status' => 'neaktivan'],
    ['ime' => 'Jovan', 'status' => 'neaktivan'],
    ['ime' => 'Darko', 'status' => 'aktivan'],
    ['ime' => 'Iva', 'status' => 'neaktivan'],
    ['ime' => 'Dina', 'status' => 'aktivan'],
    ['ime' => 'Despot', 'status' => 'aktivan'],
    ['ime' => 'Ana', 'status' => 'aktivan'],
];

$aktivni = 0;
$neaktivni = 0;

foreach ($korisnici as $korisnik) {
    if ($korisnik['status'] === 'aktivan') {
        $aktivni++;
    } else {
        $neaktivni++;
    }
}

echo "Aktivni: $aktivni";
echo "Neaktivni: $neaktivni";













