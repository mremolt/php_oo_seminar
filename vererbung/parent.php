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
    public function tueWas()
    {
        parent::tueWas();
        echo 'Methode in KlasseB<br />';
    }
}

$objektA = new KlasseA();
$objektB = new KlasseB();

$objektA->tueWas();
echo '<p>----------------------------</p>';
$objektB->tueWas();