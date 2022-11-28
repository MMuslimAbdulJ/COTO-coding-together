<?php
namespace Github\Src;
require_once __DIR__ . '/../vendor/autoload.php';
use Github\Src\Circle;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

class CircleTest extends TestCase
{
    /**
     * @dataProvider areaData
     */
    public function test_area($r, $expected)
    {
        $circle = new Circle($r);
        $this->assertEquals($expected, round($circle->area(), 2));
    }

    public function areaData()
    {
        return [
            [1, 3.14],
            [2, 12.57],
            [3.5, 38.48],
            [9, 254.47]
        ];
    }

    public function test_radius_property_visibility()
    {
        $circle = new Circle(5);
        $class = new ReflectionClass($circle);
        $property = $class->getProperty('radius');

        $this->assertTrue($property->isProtected());
    }

    public function test_inherits_from_shape()
    {
        $circle = new Circle(5);
        $this->assertEquals('Github\Src\Shape', get_parent_class($circle));
    }

    public function test_shape_type() {
        $this->assertSame(3, Circle::SHAPE_TYPE);
    }

    public function test_getTypeDescription()
    {
        $this->assertEquals('Type: 3', Circle::getTypeDescription());
    }

    public function test_getFullDescription() {
        $circle = new Circle(13);

        $id = $circle->getId();
        $name = str_shuffle(time());
        $circle->name = $name;

        $this->assertEquals('Circle<#' . $id . '>: ' . $name . ' - 13', $circle->getFullDescription());
    }
}
