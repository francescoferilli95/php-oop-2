<?php
require_once __DIR__ . '/User.php';

/**
 *  PREMIUM CLASS
 */
class Premium extends User {
    private $level;

    public function __construct($_name, $_lastName, $_age, $_level = 1) {
        parent::__construct($_name, $_lastName, $_age);
        $this->level = $_level;
    }

    protected function calcDiscount() {
        if($this->age > 45) {
            $this->sale = 20;
        } elseif($this->level > 2) {
            $this->sale = 25;
        } else {
            $this->sale = 0;
        }
    }
}