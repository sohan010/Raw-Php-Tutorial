<?php

$employees =
			 [
				["1","Sohan","Laravel Developer",25000],
				["2","Anup","Software Engineer",60000],
				["3","Mr.Raj","Actor in Film",18000],
				["4","Kamrul Islam","Job Holder",15000],
				["5","Rony Ghosh","Business Man",22000],
			];

		$length = count($employees);
		 // echo $length;

		// for ($row=0; $row <$length; $row++) { 
			
		// 	for ($col=0; $col <$length-1 ; $col++) { 
		// 		echo $employees[$row][$col]. " ";
		// 	}

		// 	echo "<br>";
		// }

		echo "<table border='1'cellpadding='5' cellspacing='0'>";
		echo "<thead>";
			echo "<th>SL</th>";
			echo "<th>Name</th>";
			echo "<th>Designation</th>";
			echo "<th>Salary</th>";
		echo"</thead>";

		echo"<tbody>";
		foreach ($employees as $key => $value) {
		echo "<tr>";
			foreach ($value as $key => $data) {
				echo "<td>".$data."</td>";
			}
			echo "<br>";
		echo "</tr>";
		}

		echo "</tbody>";
		echo "</table>";
 


			// echo "<pre>";
			// 	echo print_r($employees);
			// echo "</pre>";