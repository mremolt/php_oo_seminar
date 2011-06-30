<?php

class KlasseA
{
    protected $attribut1 = 'Das Attribut1';
    private $attribut2 = 'Das Attribut2';
    
    public function tueWas()
    {
        echo $this->attribut1;
    }
}

class KlasseB extends KlasseA
{
    public function tueWas1()
    {
        echo $this->attribut1;
    }
    
    public function tueWas2()
    {
        echo $this->attribut2;
    }
}



$objektA = new KlasseA();
$objektB = new KlasseB();

$objektA->tueWas();
echo "<br />";
$objektB->tueWas1();
echo "<br />";
$objektB->tueWas2();