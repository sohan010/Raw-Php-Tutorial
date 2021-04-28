<?php


$foods = ['mango','apple','guava','grapes',93];

// if (in_array('93', $foods)) {
// 	echo "Value Found :". in_array('apple', $foods,true);
// }else{
// 	echo "Value Not Found !";
// }

echo array_search(93, $foods);