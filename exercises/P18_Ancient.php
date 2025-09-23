<?php

class P18_Ancient
{
    public function main(): void
    {
        // Prompt the user for input
        
        echo "Give a year: " . 1996;

        // Get input from the user
        $year = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        // Check year value
     
         if ((int)$year < 2015) {
            echo "Ancient history!\n";
        }
    }
}
