<?php
	echo "<table>";
			echo "<tr>";
	for ($i = 0; $i <= 100; $i++) {

		for ($j = 0; $j <= 100; $j++) {
			if ($i == 0 && $j == 0) {
				echo "<td> </td>";
			} else if ($i == 0) {
				echo "<td>" .$j. "</td>";
			} else if ($j == 0) {
				echo "<td>" .$i. "</td>";
			}else{
			$k = $i * $j;
			echo "<td>$k</td>";}
		}
		echo "</tr>";
	}

	echo "</table>";

?>
