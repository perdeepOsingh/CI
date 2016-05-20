<?php


    use app\MathLibrary;

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
    }