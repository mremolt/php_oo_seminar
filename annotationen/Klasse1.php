<?php
/**
 * @author Marc Remolt <m.remolt@webmasters.de>
 * @version 1.0
 */

namespace Webmasters;

/**
 * Diese Klasse soll das Konzept von Annotationen veranschaulichen.
 */
class Klasse1 
{
    /**
     * Tut etwas 
     * 
     * Diese Methode erhält zwei Parameter und tut nichts mit ihnen. 
     * Stattdessen gibt sie einen festen Text zurück.
     * 
     * @param int $erster
     * @param string $zweiter
     * @return string 
     */
    public function tueWas($erster, $zweiter)
    {
        return "Viel Text";
    }
    
    /**
     * Noch eine Methode
     * 
     * @param array $erster
     * @param int $zweiter
     * @return array 
     */
    protected function tueNochWas(array $erster, $zweiter = 12)
    {
        return array(1, 3, 4);
    }
    
    /**
     * Gibt ein DateTime-Objekt zurück
     * 
     * @return DateTime 
     */
    public function gibObjektZurueck()
    {
        return new DateTime('now');
    }
    
    
}

//$objekt = new Klasse1();
//$objekt->gibObjektZurueck()->format('d.m.Y');