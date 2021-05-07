<?php
include_once 'custom_pre_function.php';

$name = "this is bangladesh and i am loving it";

// $action = substr($name,34,15);
// echo $action;

//echo strlen($name);
// $newArray= str_word_count($name,1);
// custom_pre($newArray);
echo substr_count($name,'a',8,8);