<?php
use PHPUnit\Framework\TestCase;

class DependenciesTest extends  TestCase {

    private $value;

    /**
     * @covers DependenciesTest::testFirstTest
     */       
    public function testFirstTest()
    {
        $this->value = 1;
        $this->assertEquals(1,$this->value);
        return $this->value;
    }

    /**
     * @depends testFirstTest
     * @covers DependenciesTest::testDependency1
     */
    public function testDependency1($value)
    {
        $value++;
        $expected = 2;
        $result = $value;
        $this->assertEquals($expected,$result);
        return $value;
    }

    /**
     * @depends testDependency1
     * @covers DependenciesTest::testDependency2
     */
    public function testDependency2($value)
    {
        $value++;
        $expected = 2;
        $result = $value;
        $this->assertEquals($expected,$result);
    }

}

// vendor/bin/phpunit tests/DependenciesTest.php --color --testdox