<?php
use PHPUnit\Framework\TestCase;

class BMICalculatorTest extends  PHPUnit\Framework\TestCase {

    /**
     * @covers BMICalculator::testShowsUnderweightWhenBmiLessThan18
     */
    public function testShowsUnderweightWhenBmiLessThan18()
    {
        $expected = 'Underweight';
        $BMICalculator = new BMICalculator;
        $BMICalculator->BMI = 10;
        $result = $BMICalculator->getTextResultFromBMI();
        $this->assertSame($expected, $result);

    }

    /**
     * @covers BMICalculator::testShowsNormalWhenBmiBetween1825
     */    
    public function testShowsNormalWhenBmiBetween1825()
    {
        $expected = 'Normal';
        $BMICalculator = new BMICalculator;
        $BMICalculator->BMI = 24;
        $result = $BMICalculator->getTextResultFromBMI();
        $this->assertSame($expected, $result);

    }

    /**
     * @covers BMICalculator::testShowsOverweightWhenBmiGreaterThan25
     */    

    public function testShowsOverweightWhenBmiGreaterThan25()
    {
        $expected = 'Overweight';
        $BMICalculator = new BMICalculator;
        $BMICalculator->BMI = 28;
        $result = $BMICalculator->getTextResultFromBMI();
        $this->assertSame($expected, $result);

    }

    /**
     * @covers BMICalculator::testCanCalculateCorrectBmi
     */        
    public function testCanCalculateCorrectBmi()
    {
        $expected = 39.1;
        $BMICalculator = new BMICalculator;
        $BMICalculator->mass = 100; // kg
        $BMICalculator->height = 1.6; // m
        $result = $BMICalculator->calculate();
        $this->assertEquals($expected, $result);
    }


    
}
