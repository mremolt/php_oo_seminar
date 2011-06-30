<?php

class KlasseA
{
    public function tueWas()
    {
        echo 'Methode in KlasseA<br />';
    }
}

class KlasseB extends KlasseA
{
    
}

class KlasseC extends KlasseA
{
    public function tueWas()
    {
        echo 'Methode in KlasseC<br />';
    }
}

$objektA = new KlasseA();
$objektB = new KlasseB();
$objektC = new KlasseC();

$objektA->tueWas();
$objektB->tueWas();
$objektC->tueWas();