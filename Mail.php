<?php

require_once 'UserData.php';

class Mail implements UserData
{
    public static function handle($arr, $attr)
    {
        foreach ($arr as $v) {
            echo "<p><a href='$attr:$v'>$v</a></p>";
        }
    }
}