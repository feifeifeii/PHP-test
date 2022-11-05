<?php
	echo "<h3>a++</h3>";
	$a = 5;
	echo "應該是 5 ：".$a++."<br>\n";
	echo "應該是 6 ：".$a."<br>\n";
	echo "<h3>++a</h3>";
	$a = 5;
	
	echo "應該是 6 ：".++$a."<br>\n";
	echo "應該是 6 ：".$a."<br>\n";
	echo "<h3>a--</h3>";
	$a = 5;
	
	echo "應該是 5 ：".$a--."<br>\n";
	echo "應該是 4 ：".$a."<br>\n";
	echo "<h3>--a</h3>";
	$a = 5;
	
	echo "應該是 4 ：".--$a."<br>\n";
	echo "應該是 4 ：".$a."<br>\n";
?>