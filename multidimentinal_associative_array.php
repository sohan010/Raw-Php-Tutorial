<?php 

	$marks = [

			"Sohan"=>["Math"=>70,"English"=>80,"History"=>60],
			"Panna"=>["Math"=>50,"English"=>63,"History"=>75],
			"Mukta"=>["Math"=>64,"English"=>55,"History"=>80],
	];


	// echo "<pre>";
	// 	print_r($marks);
	// echo "</pre>";

	echo "<table border='1' cellpadding='5px' cellspacing='0'>";

	echo "<tr>";
		echo "<th>Name</th>";
		echo "<th>Math</th>";
		echo "<th>English</th>";
		echo "<th>History</th>";
	echo "</tr>";

		foreach ($marks as $key => $mark) {
		echo "<tr>";
			echo  "<td>$key</td>";
			foreach ($mark as $key2 => $value) {
				echo "<td>$value</td>";
			}

		echo "</tr>";
		}

	echo "</table>";	


 ?>