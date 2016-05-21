<?php
    namespace tests;

    use app\MathLibrary;
    use PHPUnit_Framework_TestCase;

class TestMathLibrary extends PHPUnit_Framework_TestCase
{
    public function testAdditionPass()
    {
        $numbersArray = [5, 4, 2, 1];
        $additionResult = MathLibrary::addition($numbersArray);
        $this->assertEquals(12, $additionResult);
    }

    public function testAdditonFail()
    {
        $numbersArray = [5, 4, 2, 1];
        $additionResult = MathLibrary::addition($numbersArray);
        $this->assertNotEquals(20, $additionResult);
    }

    public function testSubtractionPass()
    {
        $number1 = 10;
        $number2 = 50;
        $subtractionResult = MathLibrary::subtraction($number1, $number2);
        $this->assertEquals(-40, $subtractionResult);
    }

    public function testSubtractionFail()
    {
        $number1 = 10;
        $number2 = 50;
        $subtractionResult = MathLibrary::subtraction($number1, $number2);
        $this->assertNotEquals(40, $subtractionResult);
    }
}
