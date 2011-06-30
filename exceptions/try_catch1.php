<?php

try {
    echo 'noch ist alles Gut ...';
    
    throw new Exception('Fehler!');
    
} catch(Exception $e) {
    // wir reagieren gar nicht auf den Fehler
}

echo "<br />";

try {
    echo 'noch ist alles Gut ...';
    
    throw new Exception('Fehler!');
    
} catch(Exception $e) {
    echo 'Das ist was passiert!';
}

echo "<br />";

try {
    echo 'noch ist alles Gut ...';
    
    throw new Exception('Fehler!');
    
} catch(Exception $e) {
    echo $e->getMessage();
}

echo "<br />";

try {
    echo 'noch ist alles Gut ...';
    
    throw new Exception('Fehler!');
    
} catch(Exception $e) {
     echo 'Das ist was passiert!';
     throw $e;
}