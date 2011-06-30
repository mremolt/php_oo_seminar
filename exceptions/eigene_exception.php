<?php

class MeineException extends Exception
{
    protected $message = 'Die Standardnachricht!';
}


throw new MeineException();