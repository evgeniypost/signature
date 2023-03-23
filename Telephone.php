<?php

require_once 'UserData.php';

class Telephone implements UserData
{
    private static function format($tel)
    {
        $telephone = str_replace('+', '', $tel);
        $telephone = substr($telephone, 0, 3) . " (" . substr($telephone, 3, 2) . ") " .
            substr($telephone, 5, 3) . "-" . substr($telephone, 8, 2) . "-" .
            substr($telephone, 10, 2);
        return $telephone;

    }

    public static function handle($arr, $attr)
    {
        foreach ($arr as $v) {
            echo "<p><a href='$attr:$v'>" . self::format($v) . "</a></p>";
        }
    }
}