<?php
use PHPUnit\Framework\TestCase;

class EmailTest extends  TestCase {

    /**
     * @dataProvider emailsProvider
     * @covers EmailTest::testValidEmail
     */
    public function testValidEmail($email)
    {
        $this->assertMatchesRegularExpression('/^.+\@\S+\.\S+$/', $email);
    }

    /**
     * @dataProvider numbersProvider
     * @covers EmailTest::testMath
     */
    public function testMath($a, $b, $expected)
    {
        $result = $a*$b;
        $this->assertEquals($expected, $result);
    }

    /**
     * @covers EmailTest::emailsProvider
     */   
    public static function emailsProvider()
    {
        return [
            ['dsds@ffs.df'],
            ['dsds@ffs.dffdfd'],
            ['dsds@ffs'],
        ];
    }

    /**
     * @covers EmailTest::numbersProvider
     */ 
    public static function numbersProvider()
    {
        return [
            [1,2,2],
            [2,2,4],
            [3,3,9],
        ];
    }

}

// vendor/bin/phpunit tests/EmailTest.php --color --testdox
