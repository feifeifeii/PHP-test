
<table border = "1">
	<th>名字</th>
	<th>國文</th>
	<th>英文</th>
	<th>數學</th>
<?php
//土法煉鋼//
	$rachel = [66,73,56];
	$monica = [72,63,63];
	$phoebe = [60,88,72];
	$score = ["Rachel" => $rachel,"Monica" => $monica,"Phoebe" => $phoebe];
	foreach($score as $key => $value){
		echo "<tr><td>$key</td><td>$value[0]</td>
		<td>$value[1]</td><td>$value[2]</td></tr>";
	}
?>


<table border = "1">
	<th>名字</th>
	<th>國文</th>
	<th>英文</th>
	<th>數學</th>
<?php
//用foreach//
	$grades["Rachel"] = ["國文" => 66,"英文" => 73,"數學" => 56];
	$grades["Monica"] = ["國文" => 72,"英文" => 63,"數學" => 63];
	$grades["Pheobe"] =["國文" => 60,"英文" => 88,"數學" => 72];
	foreach($grades as $key => $value){
		echo "<tr><td>$key</td>";
		foreach($value as $k => $v){
			echo"<td>$v</td>";
		}
		echo"</tr>";
	}
?>


<table border = "1">
	<th>名字</th>
	<th>國文</th>
	<th>英文</th>
	<th>數學</th>
<?php
//用for迴圈//
	$grades["Rachel"] = ["國文" => 66,"英文" => 73,"數學" => 56];
	$grades["Monica"] = ["國文" => 72,"英文" => 63,"數學" => 63];
	$grades["Pheobe"] =["國文" => 60,"英文" => 88,"數學" => 72];
	$sum+=$grades[$j][$i]
	for(){
		echo "<tr><td>$key</td>";
		foreach($value as $k => $v){
			echo"<td>$v</td>";
		}
		echo"</tr>";
	}
?>