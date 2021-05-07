<?php

$string = "Hello world, I am a engineer";

$findValue = ["world","engineer"];
$replaceValue = ["Sohan", "Web Developer"];

echo str_ireplace($findValue, $replaceValue,$string) . "</br></br>";


$string = "This is sohan and i am learning core php";

echo substr_replace($string, "Al Ahsan ",8,-2);