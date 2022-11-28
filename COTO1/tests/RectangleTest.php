<?php
namespace Github\Src;
require_once __DIR__ . '/../src/Rectangle.php';
use Github\Src\Rectangle;
use PHPUnit\Framework\TestCase;

class RectangleTest extends TestCase
{
    public function test_inherits_from_shape()
    {
        $rectangle = new Rectangle(2,5);
        $this->assertEquals('Github\Src\Shape', get_parent_class($rectangle));
    }

    public function test_shape_type() {
        $this->assertSame(2, Rectangle::SHAPE_TYPE);
    }

    public function test_getTypeDescription()
    {
        $this->assertEquals('Type: 2', Rectangle::getTypeDescription());
    }

    public function test_getFullDescription() {
        $rectangle = new Rectangle(6, 7);

        $id = $rectangle->getId();
        $name = str_shuffle(time());
        $rectangle->name = $name;

        $this->assertEquals('Rectangle<#' . $id . '>: ' . $name . ' - 6 x 7', $rectangle->getFullDescription());
    }
}
