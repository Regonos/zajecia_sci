<?php
require_once "AbstractShape.php";

class Square extends AbstractShape {

    private $a;

    /**
     * @param $a
     */
    public function __construct($color, $a) {
        $this->a = $a;
        parent::__construct($color);
    }

    public function calculateField() {
        return $this->a ** 2;
    }
}
