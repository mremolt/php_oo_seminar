<?php

class KlasseA
{
    protected function tueWasProtected()
    {
        echo 'in protected<br />';
        $this->tueWasPrivate();
    }
    
    private function tueWasPrivate()
    {
        echo 'in private<br />';
    }
}

class KlasseB extends KlasseA
{
    public function tueWas1()
    {
        $this->tueWasProtected();
    }
    
    public function tueWas2()
    {
        $this->tueWasPrivate();
    }
}


$objektB = new KlasseB();

$objektB->tueWas1();
echo "<br />";
$objektB->tueWas2();