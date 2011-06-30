<?php

class MeinDateTime extends DateTime
{
    /**
     * Gibt ein deutsches Datum zurück.
     * 
     * @return string 
     */
    public function germanDate()
    {
        return $this->format('d.m.Y');
    }
    
    /**
     * Gibt eine deutsche Uhrzeit zurück.
     * 
     * @return string
     */
    public function germanTime()
    {
        return $this->format('H:i');
    }
}