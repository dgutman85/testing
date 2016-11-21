<?php

namespace App;

class FizzBazz
{
    public function getNumber($number)
    {
        switch ($number) {
            case (($number%3) == 0) && (($number%5) == 0):
                return "fizzbazz";

            case (($number%3) == 0):
                return "fizz";

            case (($number%5) == 0):
                return "bazz";

            default:
                return $number;
        }
    }
}
