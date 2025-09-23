<?php

class P17_Orwell
{
    public function main(): void
    {
        // Prompt the user for input
        echo "Give a number: " . 1983;

        // Get input from the user
        $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        // Check if the input is exactly 1984
        if ($input == 1984) {
            echo "Orwell\n";
        }
        // Write your code here
       
    }
}
