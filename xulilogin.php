
<html>
	<head>

	</head>
	<body>
		<?php
	$user = $_REQUEST["username"];
	$pass = $_REQUEST["password"];
	if($user == "" && $pass == "")
	{
		header("Location:login.htm");
	}
	else
	{
		$link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi");
		$db_select = mysqli_select_db($link, "DULIEU");
		$rs = mysqli_query($link,"select * from admin where username = '$user' and password = '$pass'");
		//echo mysqli_num_rows($rs);
		if((mysqli_num_rows($rs) == 0))
		{
			header("Location:login.htm");
		}
		else {
			header("Location:index.php?ID=1");}
		//giai phong tap ghi trong rs
		mysqli_free_result($rs);
		mysqli_close($link);
	}
?>
	</body>
</html>