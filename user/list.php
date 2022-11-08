<html>
<meta charset = "utf-8">
<title>list</title>
	<table border = "1">
		<th>id</th>
		<th>名稱</th>
		<th>帳號</th>
		<th>密碼</th>
		<th>信箱</th>
		<th>建立日期</th>
		<th>動作</th>
<?php
	$link = mysqli_connect("127.0.0.1","root","","user")or 	die("無法連結資料庫：".mysqli_error());
	$query = "select * from user";
	$result = mysqli_query($link,$query)or die("無法送出".mysqli_error());
?>
<?php
	while($row = mysqli_fetch_array($result)){
?>                                             
		<tr>
			<td><?=$row['id'];?></td>
			<td><?=$row['name'];?></td>
			<td><?=$row['account'];?></td>
			<td><?=$row['password'];?></td>
			<td><?=$row['mail'];?></td>
			<td><?=$row['datetime'];?></td>
			<td>
				<a href="edit.php?id=<?=$row['id'];?>"><img src="edit.png" width="20px"></a>
				<a href="delete.php?id=<?=$row['id'];?>"><img src="delete.png" width="20px"></a>
			</td>
		</tr><br>
<?php
		}
?>
</html>