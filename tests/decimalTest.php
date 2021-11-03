<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class DecimalTest extends TestCase
{
    public function testNumeroUn()
    {
        $this->assertEquals('', Decimal::decimalToRoman(0));
        $this->assertEquals('I', Decimal::decimalToRoman(1));
        $this->assertEquals('IV', Decimal::decimalToRoman(4));
    }
}
