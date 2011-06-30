<?php

class MeinDateTime extends DateTime
{
    public function germanDate()
    {
        return $this->format('d.m.Y');
    }
    
    public function germanTime()
    {
        return $this->format('H:i');
    }
}

$jetzt = new MeinDateTime();

echo $jetzt->germanDate() . ' ' . $jetzt->germanTime();