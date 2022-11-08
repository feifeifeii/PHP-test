<table border = "1">
	<th>姓名</th>
	<td>成績</td>
<?php
	$score = array(
		"Rachel" => 56,
		"Monica" => 63,
		"Phoebe" => 72,
		"Joey" => 47,
		"Chandler" => 83,
		"Ross" => 91
	);
	foreach($score as $key => $value){
		echo "<tr><td>$key</td><td>$value</td></tr>";
	}
?>
</table>