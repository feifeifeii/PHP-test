<?php
	$link = mysqli_connect("127.0.0.1","root","","user")or
	die("無法連結資料庫：".mysqli_error());
	
	$query = "INSERT INTO user(name,mail)
	VALUES('".$_GET['name'].",".$_GET['mail']."')";
	
	$result = mysqli_query($link,$query)or die("無法送出".mysqli_error());
	
	echo"<script>alert('新增成功');</script>";
	echo"<script>location.href = 'list.php'</script>";
?>
