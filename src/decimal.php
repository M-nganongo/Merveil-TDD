<?php declare(strict_types=1);

class Decimal
{
    public static function decimalToRoman(int $year): string
    {

        $tableau = [
            10 => "X",
            9 => "IX",
            8 => "VIII",
            7 => "VII",
            6 => "VI",
            5 => "V",
            4 => "IV",
            3 => "III",
            2 => "II",
            1 => "I"
        ];

        foreach($tableau as $key => $value) {
            if($year === $key) {
                return $value;
            }
        }
        return '';
    }
}