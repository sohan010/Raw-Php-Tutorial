<?php
include_once 'custom_pre_function.php';


$employees = [

        ['id'=>1,'first_name'=>"Al",'last_name'=>'Ahsan'],
        ['id'=>2,'first_name'=>"Mizanur",'last_name'=>'Sawon'],
        ['id'=>3,'first_name'=>"Panna",'last_name'=>'Akter']

];
$newArray = array_column($employees, 'last_name','id');
custom_pre($newArray);



$cars = ["Toyota","Suzuki","Hyundai","Mazda","Hammer","NIssan","Mitsubishi","Ford","Kia"];
$afterChunk = array_chunk($cars ,2);

custom_pre($afterChunk );


