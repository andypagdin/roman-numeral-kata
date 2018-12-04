<?php

interface RomanNumeral
{
    public function convert(int $number);
}

class RomanNumeralConverter implements RomanNumeral
{
    /**
     * Define the roman numeral lookup array, in decending order by numeral value.
     * 
     * @var array
     */
    protected static $lookup = [
        1000 => 'M',
        900 => 'CM',
        500 => 'D',
        400 => 'CD',
        100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I'
    ];

    public function convert(int $number) {
        $result = '';

        foreach (static::$lookup as $key => $value) {
            while ($number >= $key) {
                $number -= $key;
                $result .= $value;
            }
        }

        return $result;
    }
}
