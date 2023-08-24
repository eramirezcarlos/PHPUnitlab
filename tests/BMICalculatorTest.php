<?php
use PHPUnit\Framework\TestCase;

class BMICalculatorTest extends  PHPUnit\Framework\TestCase {

    /**
     * @covers BMICalculator::getTextResultFromBMI
     */
    public function testUnderweightBMITextResult()
    {
        $expected = 'Underweight';
        $BMICalculator = new BMICalculator;
        $BMICalculator->BMI = 10;
        $result = $BMICalculator->getTextResultFromBMI();
        $this->assertSame($expected, $result);

    }

    /**
     * @covers BMICalculator::testNormalBMITextResult
     */    


    public function testNormalBMITextResult()
    {
        $expected = 'Normal';
        $BMICalculator = new BMICalculator;
        $BMICalculator->BMI = 24;
        $result = $BMICalculator->getTextResultFromBMI();
        $this->assertSame($expected, $result);

    }

    /**
     * @covers BMICalculator::testOverweightBMITextResult
     */    

    public function testOverweightBMITextResult()
    {
        $expected = 'Overweight';
        $BMICalculator = new BMICalculator;
        $BMICalculator->BMI = 28;
        $result = $BMICalculator->getTextResultFromBMI();
        $this->assertSame($expected, $result);

    }

    /**
     * @covers BMICalculator::testCorrectBMIValue
     */        
    public function testCorrectBMIValue()
    {
        $expected = 39.1;
        $BMICalculator = new BMICalculator;
        $BMICalculator->mass = 100; // kg
        $BMICalculator->height = 1.6; // m
        $result = $BMICalculator->calculate();
        $this->assertEquals($expected, $result);
    }
}
