<?php

enum Color
{
    case red;
    case green;

    //case testHex;

    public function getColor(): string
    {
        return match ($this) {
            Color::green => 'green',
            Color::red => 'red',
            //Color::testHex => '#4444B7'
        };
    }
}