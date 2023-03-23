<?php

require_once 'Color.php';
require_once 'Mail.php';
require_once 'Telephone.php';

class HandlerSignature
{
    public static function paint(Color $color)
    {
        $c = $color->getColor();
        echo "<div style='color: $c'>";
        echo "<p>" . $_POST['text'] . "</p>";
        echo "<p>" . $_POST['name'] . "</p>";
        Telephone::handle($_POST['tel'], 'tel');
        Mail::handle($_POST['email'], 'mailto');
        echo "</div>";
    }
}