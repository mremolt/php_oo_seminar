<?php
/* 
 * Ein Closure ist eine Lambda-Funktion, die den umgebenden Kontext, also Variablenwerte
 * mit in die Funktion übernehmen kann. Die Variablen, die übernommen werden sollen,
 * werden mit dem Schlüsselwort use festgelegt.
 *
 * Egal wann und wo die Funktion aufgerufen wird, alle mit use gebundenen
 * Variablen-Werte bleiben unverändert erhalten.
 */

$sinn = 42;

$gebe_sinn_aus = function($farbe) use ($sinn) {
    return '<p style="color: ' . $farbe . '">Der Sinn des Lebens ist ' . $sinn . '!</p>';
};

// $sinn ist beim Aufruf verfügbar
echo $gebe_sinn_aus('#ff0000');

// Der Original-Wert von $sinn ist beim Aufruf verfügbar
$sinn = 107;
echo $gebe_sinn_aus('#ff0000');


function rufe_auf($func) {
    echo $func('#00ff00');
}

// $sinn ist sogar in der Funktion rufe_auf() sichtbar.
rufe_auf($gebe_sinn_aus);

// $sinn ist sogar in der Funktion rufe_auf() sichtbar, wenn die Variable global gelöscht wurde.
unset($sinn);
rufe_auf($gebe_sinn_aus);
