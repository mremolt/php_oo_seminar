<?php
/* 
 * Funktionen (es sind hier NICHT! Rückgaben von Funktionsaufrufen gemeint) können
 * nur in Variablen abgelegt werden. Das bedeutet, sie können nun z.B. als Parameter
 * an andere Funktionen übergeben werden.
 *
 * Um das zu ermöglichen, kann man nun den Funktionsnamen beim Schlüsselwort function
 * weglassen und erhält dann eine anonyme (lambda) Funktion als Rückgabe. 
 */

$meine_funktion = function () {
    return 'Hallo Welt';
};

var_dump($meine_funktion);

echo $meine_funktion();