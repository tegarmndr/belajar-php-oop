<?php

require_once "data/Person.php";

$tegar = new Person();
$tegar->name = "Tegar";
$tegar->sayHello("Budi");

$joko = new Person();
$joko->name = "Joko";
$joko->sayHello(null);

$tegar->info();