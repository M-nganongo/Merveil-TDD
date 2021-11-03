<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class DecimalTest extends TestCase
{
    public function testNumeroUn()
    {
        $this->assertEquals('', Decimal::decimalToRoman(0));
        $this->assertEquals('I', Decimal::decimalToRoman(1));
        $this->assertEquals('IV', Decimal::decimalToRoman(4));
        $this->assertEquals('V', Decimal::decimalToRoman(5));
        $this->assertEquals('IX', Decimal::decimalToRoman(9));

        $this->assertEquals('X', Decimal::decimalToRoman(10));
    }
}
