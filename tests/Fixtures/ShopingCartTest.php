<?php
use PHPUnit\Framework\TestCase;


class ShopingCartTest extends  TestCase {

    protected $cart;
    protected static $db_connection = false;

    protected function setUp(): void
    {
        $this->cart = new ShopingCart;
    }

    protected function tearDown(): void
    {
        unset($this->cart);
    }

    public static function setUpBeforeClass(): void
    {
        if (self::$db_connection) {
            return;
        }
        self::$db_connection = new \PDO('sqlite::database.db');
    }

    public static function tearDownAfterClass(): void
    {
        self::$db_connection = null;
        // unlink(':database.db');
    }

    /**
     * @covers ShopingCartTest::testCorrectNumberOfItems
     */    
    public function testCorrectNumberOfItems()
    {
        $expected = 1;
        $this->cart->addItem('one');
        $result = $this->cart->amount;
        $this->assertEquals($expected, $result);
    }

    /**
     * @covers ShopingCartTest::testCorrectProductName
     */   
    public function testCorrectProductName()
    {
        $this->cart->addItem('Apple');
        $this->assertContains('Apple', $this->cart->cartItems);
    }
  
}
