<?php
namespace Webmasters;

// das funktioniert, da PHP im globalen Namensraum sucht, wenn es eine Funktion
// nicht im aktuellen Namespace findet.
echo ucfirst('Hallo');

function strtoupper($string) {
    return 'Ich bin die Funktion im Namespace!';
}

// wenn es eine Funktion mit dem Namen im aktuellen Namespace gibt, wird
// statt der globalen diese verwendet.
echo strtoupper('hallo Welt');

// es sei denn, wir stellen ein \ voran
echo \strtoupper('hallo Welt');

// das scheitert, da die Klasse nur im Namespace gesucht wird, hier muss ein \
// vorangestellt werden, also: $jetzt = new \DateTime('now');
$jetzt = new DateTime('now');