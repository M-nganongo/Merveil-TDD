<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class DecimalTest extends TestCase
{
    public function testNumeroUn()
    {
        $this->assertEquals(true, Decimal::decimalToRoman(1));
    }
}
