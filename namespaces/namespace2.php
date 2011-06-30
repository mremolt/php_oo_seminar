<?php
require_once 'lib/test.inc.php';

$test = new Webmasters\Klasse1();

// gibt "Webmasters\eine_funktion" aus
Webmasters\eine_funktion();

// gibt "Anderer\eine_funktion" aus
Anderer\eine_funktion();

// erzeugt Fehler, da es keine globale Funktion mit diesem Namen gibt
eine_funktion();
