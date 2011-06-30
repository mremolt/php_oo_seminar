<?php
/* 
 * Seit PHP 5.3 können anonyme Funktionen an viele direkt als Parameter übergeben werden.
 * Ein gutes Beispiel sind die array_-Funktionen, die ein Array durchlaufen und
 * auf jedes Element eine Funktion aufrufen.
 * Vorher musste man den Funktionsnamen als Parameter übergeben, jetzt kann direkt
 * eine Funktion verwendet werden.
 *
 * Beispiel:
 * Vorher: array_walk($array, 'funktions_name');
 * Jetzt: array_walk($array, function($element) { //tuwas mit $element });
 */

function verdopple($zahl) {
    echo '<p>' . $zahl * 2 . '</p>';
}

$zahlen = array(1, 2, 3, 4, 5, 6, 7);

// PHP 5.2
array_walk($zahlen, 'verdopple');

foreach ($zahlen as $zahl) {
    verdopple($zahl);
}

// PHP 5.3
array_walk($zahlen, function($zahl) {
    echo '<p>' . $zahl * 2 . '</p>';
});

// auch PHP 5.3
$gerade_zahlen = array_filter($zahlen, function($zahl) {
    return $zahl % 2 == 0;
});

var_dump($gerade_zahlen);