<?php 

$names = array('1','Al Ahsan','sopnilsohan03@gmail.com','Dhaka, Bangladesh','01874636209');

$markup = "<table border='1'>";
		$markup.= "<thead>";
			$markup.= "<tr>";
				$markup.= "<th>"."SL#"."</th>";
				$markup.= "<th>"."Name"."</th>";
				$markup.= "<th>"."Email"."</th>";
				$markup.= "<th>"."Address"."</th>";
				$markup.= "<th>"."Phone"."</th>";
			$markup.= "</tr>";
		$markup.= "</thead>";

		$markup.= "<tbody>";

			$markup.= "<tr>";
			foreach ($names as $key => $value): 
				$markup.= "<td>"."$value"."</td>";
			endforeach;
			$markup.= "</tr>";

		$markup.= "</tbody>";
	
$markup.= "</table>";

echo $markup;
