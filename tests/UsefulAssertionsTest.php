<?php
use PHPUnit\Framework\TestCase;

class UsefulAssertionsTest extends  TestCase {

    /**
     * @covers UsefulAssertionsTest::testAssertSame
     */    
    public function testAssertSame()
    {
        $expected = 'baz';
        $result = 'baz';
        $this->assertSame($expected,$result);
    }

    /**
     * @covers UsefulAssertionsTest::testAssertEquals
     */    
    public function testAssertEquals()
    {
        $expected = 1;
        $result = 1;        
        $this->assertEquals($expected,$result);
    }

    /**
     * @covers UsefulAssertionsTest::testAssertEmpty
     */     
    public function testAssertEmpty()
    {
        $this->assertEmpty([]);
    }

    /**
     * @covers UsefulAssertionsTest::testAssertNull
     */  
    public function testAssertNull()
    {
        $this->assertNull(null);
    }

    /**
     * @covers UsefulAssertionsTest::testAssertGreaterThan
     */  
    public function testAssertGreaterThan()
    {
        $expected = 2;
        $actual = 3;
        $this
        ->assertGreaterThan($expected, $actual);
    }
    /**
     * @covers UsefulAssertionsTest::testAssertFalse
     */  
    public function testAssertFalse()
    {
        $this->assertFalse(false);
    }

    /**
     * @covers UsefulAssertionsTest::testAssertTrue
     */      
    public function testAssertTrue()
    {
        $this->assertTrue(true);
    }

    /**
     * @covers UsefulAssertionsTest::testAssertCount
     */     
    public function testAssertCount()
    {
        $this->assertCount(3, [1,2,3]);
    }

    /**
     * @covers UsefulAssertionsTest::testAssertContains
     */   
    public function testAssertContains()
    {
        $this->assertContains(4, [1, 2, 3,4]);
    }

    /**
     * @covers UsefulAssertionsTest::testAssertStringContainsString
     */       
    public function testAssertStringContainsString()
    {
        $searchFor = 'foo';
        $searchIn = 'foo';
        $this->assertStringContainsString($searchFor, $searchIn);
    }

    /**
     * @covers UsefulAssertionsTest::testAssertInstanceOf
     */         
    public function testAssertInstanceOf()
    {
        $this->assertInstanceOf(RuntimeException::class, new RuntimeException);
    }

    /**
     * @covers UsefulAssertionsTest::testAssertArrayHasKey
     */         
    public function testAssertArrayHasKey()
    {
        $this->assertArrayHasKey('baz', ['baz' => 'bar']);
    }


    /**
     * @covers UsefulAssertionsTest::testAssertDirectoryIsWritable
     */         
    public function testAssertDirectoryIsWritable()
    {
        $this->assertDirectoryIsWritable('/var/www/html/phpunit-wrong');
    }

    /**
     * @covers UsefulAssertionsTest::testAssertFileIsWritable
     */       
    public function testAssertFileIsWritable()
    {
        $this->assertFileIsWritable('/var/www/html/phpunit-wrong/writable.txt');
    }

}
