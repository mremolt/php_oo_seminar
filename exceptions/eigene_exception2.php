<?php

class MeineException extends Exception
{
    protected $message = 'Die Standardnachricht!';
}

try {
    echo 'noch ist alles Gut ...';
    
    throw new MeineException();
    
} catch(MeineException $e) {
    echo $e->getMessage();
}

echo 'Der Code wird weiter normal ausgeführt';

