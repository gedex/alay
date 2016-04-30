<?php

namespace Gedex\Alay;

class Alay
{

    public static $search = ['a', 'A', 'i', 'I', 'e', 'E', 'o', 'O'];

    public static $replacement = [4, 4, 1, 1, 3, 3, 0, 0];

    public static function toAlay($str) {
        return str_replace(self::$search, self::$replacement, $str);
    }

    public static function normalize($str) {
        return str_replace(self::$replacement, self::$search, $str);
    }
}
