<?php 
	//Khai bao ket noi
	$link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi");
	//Lua chon co so du lieu
	mysqli_select_db($link,"DULIEU");
	$sql = "select * from nhanvien";
	$result = mysqli_query($link, $sql);
	echo '<table border = "1" width = "100%">';
	echo '<caption>Du lieu truy xuat tu bang Nhan su</Caption>';
	//In tieu de cua bang
	echo'<TR><TH>Ma so</TH><TH>Ho ten</TH><TH>Ngay sinh</TH><TH>Dia chi</TH></TR>';
	while ($row = mysqli_fetch_array($result))
	{
		echo '<TR><TD>'.$row['IDNV'].'</TD><TD>'.$row['hoten'].'</TD><TD>'.$row['IDPB'].'</TD><TD>'.$row['diachi'].'</TD></TR>';
	}
	echo '</TABLE>';
	//Giai phong tap cac ban ghi trong $result
	mysqli_free_result($result);
	mysqli_close($link);
?>