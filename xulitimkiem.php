<?php
	$txt = $_REQUEST['txb'];
	$danhmuc = $_REQUEST['danhmuc'];
	if($txt == "")
	{
		header("Location:timkiem.php");
	}
	else
	{
		//Ket noi csdl
		$link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi");
		$db_select = mysqli_select_db($link,"DULIEU");
		$sql = "select * from nhanvien where $danhmuc = '$txt'";
		//echo $sql;
		$rs = mysqli_query($link, $sql);
		if(mysqli_num_rows($rs) == 0){
			echo "Khong tim thay ket qua!";}
		else
		{
			echo '<table border = "1" width = "100%"';
			echo '<caption>Du lieu nhan vien</caption>';
			echo '<TR><TH>IDNV</TH><TH>Ho ten</TH><TH>IDPB</TH><TH>Dia chi</TH></TR>';
			while($row = mysqli_fetch_array($rs))
			{
				echo '<TR><TD>'.$row['IDNV'].'</TD><TD>'.$row['hoten'].'</TD><TD>'.$row['IDPB'].'</TD><TD>'.$row['diachi'].'</TD></TR>';
			}
			echo '</TABLE>';
		}
		mysqli_free_result($rs);
		mysqli_close($link);
		
	}
?>