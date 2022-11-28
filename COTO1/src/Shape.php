<?php

namespace Github\Src;

class Shape {
    const SHAPE_TYPE = 1;
    public $name;
    
    protected $length, $width;

    private $id;

    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
        $this->id = uniqid();
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function getId() {
        return $this->id;
    }

    public function area() {
        return $this->length * $this->width;
    }

    public static function getTypeDescription() {
        return "Type: " . Shape::SHAPE_TYPE;
    }

    public function getFullDescription() {
        return "Shape<#" . self::getId() . ">: " . "$this->name - $this->length x $this->width";
    }
    
}
?>