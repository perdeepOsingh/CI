<?php
    namespace app;

    class MathLibrary
    {
        public static function addition(array $numbers)
        {
            $result = array_sum($numbers);

            return $result;
        }

        public static function subtraction($number1, $number2)
        {
            $result = $number1-$number2;
            return $result;
        }
    }
