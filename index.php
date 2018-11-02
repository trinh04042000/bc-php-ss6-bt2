<?php

interface Colorable
{
    function howToColor();
}

class Square implements Colorable
{
    function howToColor()
    {
        echo "Color all four sides". PHP_EOL;
    }
}

class Rectangle
{

}

$square = new Square();
$square1 = new Square();
$rectangle = new Rectangle();
$shape = [$square, $square1, $rectangle];
foreach ($shape as $shape) {
    if ($shape instanceof Colorable) {
        $shape->howToColor();
    }
}