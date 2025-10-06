<?php

class P29_GiftTax
{
    private function calculateGiftTax($input)
    {
        if ($input < 5000) {
            return 0;
        } elseif ($input <= 25000) {
            return 100 + ($input - 5000) * 0.08;
        } elseif ($input <= 55000) {
            return 1700 + ($input - 25000) * 0.10;
        } elseif ($input <= 200000) {
            return 4700 + ($input - 55000) * 0.12;
        } elseif ($input <= 1000000) {
            return 22100 + ($input - 200000) * 0.15;
        } else {
            return 142100 + ($input - 1000000) * 0.17;
        }
    }

    public function main(): void
    {
        $input = trim(string: fgets($GLOBALS['STDIN'] ?? STDIN));
        $input = (int)$input;
        // Write your code here
        echo "Value of the gift? ";
        
        $tax = $this->calculateGiftTax($input);
        
        if ($tax == 0) {
            echo "No tax!\n";
        } else {
            echo "Tax: " . $tax . "\n";
        }
    }
}
