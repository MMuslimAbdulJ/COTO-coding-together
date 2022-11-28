<?php
namespace Github\Src;

class Rectangle extends Shape {
    const SHAPE_TYPE = 2;
    public static function getTypeDescription()
    {
        return "Type: " . Rectangle::SHAPE_TYPE;
    }
    public function getFullDescription()
    {
        return "Rectangle<#" . self::getId() . ">: " . "$this->name - $this->length x $this->width";
    }
}

?>