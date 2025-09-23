<?php

class P25_Password
{
    public function main(): void
    {
        // Write your code here
        echo "Password? ";
        $input = trim(string: fgets($GLOBALS['STDIN'] ?? STDIN));
        if (strcmp($input, "Caput Draconis") === 0) {
            echo "Welcome!";
        } else {
            echo "Off with you!";
        }
    }
}
