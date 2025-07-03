<?php

require_once "data/Person.php";

$tegar = new Person("Tegar", "Tangerang");
$tegar->name = "Tegar";
$tegar->sayHello("Budi");

$joko = new Person("Joko", null);
$joko->name = "Joko";
$joko->sayHello(null);

$tegar->info();