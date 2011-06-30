<?php

abstract class KlasseA
{
    abstract public function tueWas();
}

class KlasseB extends KlasseA
{
    public function tueWas()
    {
        echo 'ich tue was!';
    }
}