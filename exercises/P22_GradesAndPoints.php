<?php

class P22_GradesAndPoints
{
    public function main(): void
    {
        // Write your code here
        echo "Give points[0-100]:";
        $input = trim(string: fgets($GLOBALS['STDIN'] ?? STDIN));

        $points = (int)$input;

        $grade = match (true) {
            $points < 0  => 'impossible!',
            $points >= 0 && $points <= 49   => 'failed',
            $points >= 50 && $points <= 59  => '1',
            $points >= 60 && $points <= 69  => '2',
            $points >= 70 && $points <= 79  => '3',
            $points >= 80 && $points <= 89  => '4',
            $points >= 90 && $points <= 100  => '5',
            $points > 100 => 'incredible!'
        };

        echo "Grade: $grade";
    }
}
