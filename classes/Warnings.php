<?php

class Warnings
{
    static $warnings;

    static function newWarning($warning)
    {
        self::$warnings[count(self::$warnings)] = $warning;
    }
    static function getWarning()
    {
        return self::$warnings;
    }
}