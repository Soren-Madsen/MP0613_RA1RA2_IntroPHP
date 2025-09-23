<?php

class P20_Adulthood
{
    public function main(): void
    {
        // Write your code here
        echo "How old are you? ";
        // Prompt the user for input
        $age = trim(fgets(stream: $GLOBALS['STDIN'] ?? STDIN));
        // Get input from the user
        
        // Check year value
       if ((int)$age >= 18) {
           echo "You are an adult.";
       } else {
           echo "You are not an adult.";
       }
    }
}
