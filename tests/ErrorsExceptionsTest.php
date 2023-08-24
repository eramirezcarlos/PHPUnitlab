<?php
use PHPUnit\Framework\TestCase;

class ErrorsExceptionsTest extends TestCase {

    /**
     * @covers ErrorsExceptionsTest::testErrorCanBeExpected
     * @expectError
     * @expectErrorMessage 'foo'
     */      
   public function testErrorCanBeExpected(): void
    {
        // Trigger the error (e.g., by calling a function that generates an error)
        \trigger_error('foo', \E_USER_ERROR);        
        //$file = fopen("test.txt", "r");
        //just to avoid the error
        $this->assertTrue(true);
    }

    /**
     * @covers ErrorsExceptionsTest::testException
     */   
    public function testException()
    {
        $this->expectException(WrongBmiDataException::class);

        $BMICalculator = new BMICalculator;
        $BMICalculator->mass = 0; // kg
        $BMICalculator->height = 1.6; // m
        $BMICalculator->calculate();
    }

}
// ./vendor/bin/phpunit tests/ErrorsExceptionsTest.php --color --testdox