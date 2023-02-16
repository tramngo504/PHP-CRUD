<?php
	$mapb = $_GET['IDPB'];
	$link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi");
	//Lua chon co so du lieu
	mysqli_select_db($link,"DULIEU");
	$sql = "select * from phongban where IDPB = '$mapb'";
	$result = mysqli_query($link, $sql);
	$row = mysqli_fetch_array($result);
?>
<html lang="en">
 <head>
  <title>Document</title>
 </head>
 <body>
	
	<!--<form action="xulicapnhat.php?IDPB=<?echo $row['IDPB'];?>&Tenpb=<?echo $row['Tenpb'];?>&Mota=<?echo $row['Mota'];?>" method = "post">!-->
	<form action="xulicapnhat.php" method = "post">
  <table border = 0>
	<caption>Login<caption>
	<TR>
	<TD>Ma phong ban </TD>
	<TD><input type = "Text" name = "idpb" value = "<?php echo $row['IDPB'];?>" readonly></TD>
	</TR>
	<TR>
	<TD>Ten phong ban </TD>
	<TD><input type = "Text" name = "tenpb" value = "<?php echo $row['Tenpb'];?>"></TD>
	</TR>
	<TR>
	<TD>Mo ta</TD>
	<TD><input type = "Text" name = "motapb" value = "<?php echo $row['Mota'];?>"></TD>
	</TR>
	<TR> 
	<TD><input type = "Submit" value = "OK"></TD>
	<TD><input type = "Reset" value = "Reset"></TD>
	</TR>
  </table>
  </form>
 </body>
</html>