<?php
require_once 'lib/test.inc.php';

use Webmasters\Klasse1, Anderer\Klasse2 as NeuerName;

// erzeugt Webmasters\Klasse1
$test = new Klasse1();
var_dump($test);

// erzeugt Anderer\Klasse2
$test2 = new NeuerName();
var_dump($test2);

// erzeugt Anderer\Klasse2
$test3 = new Anderer\Klasse2();
var_dump($test2);

// erzeugt Fehler, da Klasse2 global nicht definiert ist
$test4 = new Klasse2();
