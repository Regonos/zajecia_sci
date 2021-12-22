<?php
require_once "AbstractShape.php";

class Rectangle extends AbstractShape {

    private $a;
    private $b;

    /**
     * @param $a
     * @param $b
     */
    public function __construct($color, $a, $b) {
        $this->a = $a;
        $this->b = $b;
        parent::__construct($color);
    }

    public function calculateField() {
        return $this->a * $this->b;
    }
}
