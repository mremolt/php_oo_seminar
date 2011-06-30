<?php

class KlasseA
{
    final public function tueWas()
    {
        echo 'Ich bin final!';
    }
}

class KlasseB extends KlasseA
{
    public function tueWas()
    {
        echo 'Das geht nicht!';
    }
}