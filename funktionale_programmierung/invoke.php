<?php
/* 
 * Die magische Methode __invoke() ermöglicht es, ein Objekt wie eine Funktion
 * aufzurufen, also keine Methode angeben zu müssen.
 *
 * Beispiel:
 * $obj = new KlasseMitInvoke();
 * $obj();
 */

class FarbigesHallo
{
    private $farbe = '#000000';

    public function getFarbe() {
        return $this->farbe;
    }

    public function setFarbe($farbe) {
        $this->farbe = $farbe;
    }

    public function __invoke() {
        return '<p style="color: ' . $this->getFarbe() . '">Hallo Welt</p>';
    }
}

$hallo = new FarbigesHallo();
echo $hallo();

$hallo->setFarbe('#ff0000');
echo $hallo();

$hallo->setFarbe('#00ff00');
echo $hallo();

$hallo->setFarbe('#999999');
echo $hallo();