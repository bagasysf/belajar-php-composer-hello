<?php
namespace Babang\Data;

class Customer {

  public function __construct(private string $name = "Tamu") {}

  public function sayHello(string $name) {
    echo "Hello $name, my name is $this->name" . PHP_EOL;
  }
}