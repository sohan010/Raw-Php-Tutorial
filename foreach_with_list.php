<?php



	$marks = [

			[1,"Sohan","Software Developer",50000],
			[2,"Mukta","Teacher",30000],
			[3,"Panna","Housewife",20000]
	];


	// foreach ($marks as $key => $value) {

	// 	foreach ($value as $key => $data) {
	// 		echo $data." ";
	// 	}

	// 	echo "<br>";
	// }

foreach ($marks as $key => list($a,$b,$c,$d)) {
	echo $a.", ".$b.", ".$c.", ".$d."<br> ";
}
