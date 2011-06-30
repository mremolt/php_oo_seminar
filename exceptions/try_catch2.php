<?php

try {
    echo 'noch ist alles Gut ...';
    
    throw new UnexpectedValueException('Fehler!');
    
} catch (UnexpectedValueException $e) {
    echo 'gefangen';
}

echo "<br />";

try {
    echo 'noch ist alles Gut ...';
    
    throw new UnexpectedValueException('Fehler!');
    
} catch (Exception $e) {
    echo 'fängt alles';
}

echo "<br />";

try {
    echo 'noch ist alles Gut ...';
    
    throw new InvalidArgumentException('Fehler!');
    
} catch (UnexpectedValueException $e) {
    echo 'nicht gefangen';
}