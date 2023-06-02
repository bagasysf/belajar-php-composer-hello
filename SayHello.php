<?php

use Babang\Data\Customer;

require "./vendor/autoload.php";


$greeting = new Customer("Bambang");
echo $greeting->sayHello("Eko");