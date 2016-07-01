<?php
class shoppingcart {
  public $cart;
  public $test;
  function __construct() {
    $this->cart = array();
  }

  function addItem($id, $quantity) {
  $this->cart[$id] = $quantity;
  }

  function getCart() {
    print_r($this->cart);
  }

}
?>
