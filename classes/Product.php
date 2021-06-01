<?php
/**
 *  PRODUCT CLASS
 */
class Product {
    public $name;
    public $price;
    public $text;

    public function __construct($_name, $_text) {
        $this->name = $_name;
        $this->text = $_text;
    }

    public function getName() {
        return $this->name;
    }

    public function setPrice($price) {
        if(is_numeric($price)) {
            $this->price = $price;
        } elseif(!is_numeric($price)) {
            throw new Exception($price . ' is not a number.');
        }
    }

    public function getPrice() {
        return $this->price;
    }
}