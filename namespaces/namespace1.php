<?php

/*
 * Ein Namespace wird mit dem Schlüsselwort namespace definiert.
 * Der Name des Namespaces ist KEIN string.
 * Bis zum Ende der Datei oder bis ein neuer Namespace definiert wird, gilt
 * der aktuelle Namespace
 */
namespace Webmasters;

// voller Name Webmasters\Klasse1
class Klasse1
{

}

// voller Name Webmasters\eine_funktion
function eine_funktion()
{
    echo "<p>Webmasters\eine_funktion</p>";
}

namespace Anderer;

// voller Name Anderer\eine_funktion
// so lange ein anderer Namespace verwendet wird, können nun Namen doppelt vergeben werden.
function eine_funktion()
{
    echo "<p>Anderer\eine_funktion</p>";
}

// gibt "Anderer\eine_funktion" aus
eine_funktion();

