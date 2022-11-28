<?php 

namespace Github\Src;

class Circle extends Shape {
    const SHAPE_TYPE = 3;
    protected $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
        parent::__construct($length = $this->length, $width = $this->width);
    }
    public function area() {
        return pi() * $this->radius * $this->radius;
    }

    public static function getTypeDescription()
    {
        return "Type: " . Circle::SHAPE_TYPE;
    }

    public function getFullDescription()
    {
        return "Circle<#". self::getId() . ">: " . "$this->name - $this->radius";
    }
}
?>