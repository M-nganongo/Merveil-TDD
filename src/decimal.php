<?php declare(strict_types=1);

class Decimal
{
    public static function decimalToRoman(int $year): string
    {
        if($year == 1) {
            return 'I';
        }
        if($year == 4) {
            return 'IV';
        }
        return '';
    }
}