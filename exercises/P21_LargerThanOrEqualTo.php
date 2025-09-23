<?php

class P21_LargerThanOrEqualTo
{
    public function main(): void
    {
        // Write your code here
        // Prompt the user for input
            echo "Give the first number: ";
            
        // Get input from the user
        $numberA = trim(fgets(stream: $GLOBALS['STDIN'] ?? STDIN));

        // Prompt the user for input
            echo "Give the second number: ";
        // Get input from the user
        $numberB = trim(fgets(stream: $GLOBALS['STDIN'] ?? STDIN));

        // Check year value

        if((int)$numberA > $numberB) {
            echo "Greater number is: $numberA";
        }
        else if ((int)$numberB > $numberA) {
            echo "Greater number is: $numberB" ;
        }
        else {
            echo "The numbers are equal!";
        }
    }
}
