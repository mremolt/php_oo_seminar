<?php
namespace Webmasters;

require_once 'lib/test.inc.php';

// verwendet Webmasters\Klasse1
$test = new Klasse1();

// gibt "Webmasters\eine_funktion" aus
eine_funktion();


// gibt "Anderer\eine_funktion" aus
\Anderer\eine_funktion();

// erzeugt Fehler, da PHP versucht Webmasters\Anderer\eine_funktion() aufzurufen
Anderer\eine_funktion();

echo strtolower('ERGRTHZTJTUJZUJK');
