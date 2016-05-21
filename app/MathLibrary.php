<?php
    namespace app;

class MathLibrary
{
    public static function addition(array $numbers)
    {
        $result = array_sum($numbers);

        return $result;
    }
}
