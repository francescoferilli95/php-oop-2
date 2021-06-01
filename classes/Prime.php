<?php
require_once __DIR__ . '/Product.php';

/**
 *  PRIME CLASS
 */
class Prime extends Product {
    public $specialPrice;

    public function __construct($_name, $_text, $_specialPrice) {
        parent::__construct($_name, $_text);

        $this->specialPrice = $_specialPrice;
    }
}