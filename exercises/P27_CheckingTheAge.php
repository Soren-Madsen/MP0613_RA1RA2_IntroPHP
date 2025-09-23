<?php

class P27_CheckingTheAge
{
    public function main(): void
    {
        echo "How old are you?:";

        $input = trim(string: fgets($GLOBALS['STDIN'] ?? STDIN));

        if (is_numeric($input) && $input >= 0 && $input <=120) {
            echo "Ok";
        } else {    
            echo "Impossible!";
        }
    }
}
