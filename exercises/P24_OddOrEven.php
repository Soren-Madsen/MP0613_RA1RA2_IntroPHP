<?php

class P24_OddOrEven
{
    public function main(): void
    {
        // Write your code here
        echo "Give a number: ";
      $input = trim(string: fgets($GLOBALS['STDIN'] ?? STDIN));
        $number = (int)$input;
        if ($number % 2 === 0) {
            echo "Number is even.";
        } else {
            echo "Number is odd.";
        }
    }
    }

