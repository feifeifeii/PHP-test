<html>
	<meta charset = "utf-8">
	<form action = "update.php" method = "GET">
		姓名：<input type = "text" name = "name" value = "<?=$row['name'];?>"><br>
		帳號：<input type = "text" name = "account" value = "<?=$row['account'];?>"><br>
		密碼：<input type = "text" name = "password" value = "<?=$row['password'];?>"><br>
		信箱：<input type = "text" name = "mail" value = "<?=$row['mail'];?>"><br>
		<input type ="hidden" name ="id" value ="<?=$row['id'];?>">
		<input type ="submit" value ="送出"><br>
	</form>
</html>