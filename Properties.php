<?php

require_once "data/Person.php";

$person =  new Person();
$person->name = "Tegar";
$person->address = "Tangerang";
$person->country = "Indonesia";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 =  new Person();
$person2->name = "Budi";
$person2->address = null;

echo "Name : $person2->name" . PHP_EOL;
echo "Address : $person2->address" . PHP_EOL;
echo "Country : $person2->country" . PHP_EOL;

var_dump($person2);

// error
//$person2->name = null;
//$person2->name = [];
//$person2->name = (int) 1; //type junggling
//var_dump($person2);