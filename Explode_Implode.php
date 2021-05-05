<?php

include_once 'custom_pre_function.php';


$message = "product_155151515151_dnfdnfdj;mkfmdkmdfkmg_51551.jpeg;";
$message2 = "This,is,sohan,i,am,from,dhaka";

$afterExplode = explode(";", $message);
$afterExplode2 = explode(",", $message2);


$colors = ["White","Green","Black","Red","Blue"];

$afterImplode = implode('_',$colors);
echo $afterImplode;


// custom_pre($afterExplode);
// custom_pre($afterExplode2);

//custom_pre($colors);

