<?php
require_once "Shape.php";

abstract class AbstractShape implements Shape {

    private $color;

    /**
     * @param $color
     */
    protected function __construct($color) {
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }
}
