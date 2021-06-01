<?php
/**
 *  USER CLASS
 */
class User {
    protected $name;
    protected $lastName;
    protected $age;
    protected $sale;

    public function __construct($_name, $_lastName, $_age) {
        $this->name = $_name;
        $this->lastName = $_lastName;
        $this->age = $_age;
    }

    public function getFullName() {
        return $this->name . ' ' . $this->lastName;
    }

    protected function calcDiscount() {
        $this->sale = $this->age > 30 ? 10 : 0;
    }

    public function getSale() {
        $this->calcDiscount();

        return $this->sale;
    }
}