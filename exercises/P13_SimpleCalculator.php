<?php

class P13_SimpleCalculator {
    public function main(): void {
        // Define two numbers
        $numA = 8;
        $numB = 2;

        // Perform and output the calculations

        $sum = $numA + $numB;
        $sub = $numA - $numB;
        $mult = $numA * $numB;
        $div = $numA / $numB;

        // Write the program here
        
        echo "$numA + $numB = $sum\n";
        echo "$numA - $numB = $sub\n";
        echo "$numA * $numB = $mult\n";
        echo "$numA / $numB = $div.0\n";
    }
}
