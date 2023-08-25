<?php
use PHPUnit\Framework\TestCase;


class ShopingCartTestWithTraitsTest extends  TestCase {

    use DatabaseTrait;
    use ShoppingCartFixtureTrait;

    /**
     * @covers ShopingCartTestWithTraitsTest::testCorrectNumberOfItems
     */     
    public function testCorrectNumberOfItems()
    {
        $expected = 1;
        $this->cart->addItem('one');
        $result = $this->cart->amount;
        $this->assertEquals($expected, $result);
    }
    /**
     * @covers ShopingCartTestWithTraitsTest::testCorrectProductName
     */   
    public function testCorrectProductName()
    {
        $this->cart->addItem('Apple');
        $this->assertContains('Apple', $this->cart->cartItems);
    }
  
}
