<?php
	//lay ma phong ban tu trang xemthongtinpb.php
	$mapb = $_REQUEST['IDPB'];
	$link = mysqli_connect('localhost', 'root', '') or die('Khong the ket noi');
	$db_selected = mysqli_select_db($link,"DULIEU");
	if($mapb == "")
	{
		$rs = mysqli_query($link,"SELECT * FROM NHANVIEN");
	}
	else 
	{
		$rs = mysqli_query($link,"SELECT * FROM NHANVIEN WHERE IDPB= '$mapb'");
	}
	echo '<table border = "1" width = "100%">';
	echo '<caption>Du lieu bang nhan vien</caption>';
	echo '<TR><TH>IDNV</TH><TH>Ho ten</TH><TH>IDPB</TH><TH>Dia chi</TH></TR>';
	//Hien thi tung hang
	while($row = mysqli_fetch_array($rs))
	{
		echo '<TR><TD>'.$row['IDNV'].'</TD><TD>'.$row['hoten'].'</TD><TD>'.$row['IDPB'].'</TD><TD>'.$row['diachi'].'</TD></TR>';	
	}
	echo '</TABLE>';
	mysqli_free_result($rs);
	mysqli_close($link);
?>