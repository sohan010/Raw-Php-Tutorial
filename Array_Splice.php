<?php

$name = ['Sohan','Anup','Tapash','Badhon','kamrul','Popy'];

$colors = ['white','green'];

array_splice($name,2,count($name),$colors);


echo "<pre>";
    print_r($name);
echo "</pre>";
