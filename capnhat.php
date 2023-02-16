<?php
	$link = mysqli_connect("localhost", "root", "") or die ("Khong the ket noi");
	//lua chon co so du lieu
	mysqli_select_db($link, "DULIEU");
	$sql = "select * from phongban";
	$result = mysqli_query($link, $sql);
	echo '<TABLE border = "1" width = "100%">';
	//in tieu de cua bang
	echo '<caption>Phong ban</caption>';
	echo '<TR><TH>Ma phong ban</TH><TH>Ten phong ban</TH><TH>Mo ta</TH><TH>Cap nhat</TH></TR>';
	while($row = mysqli_fetch_array($result))
	{
		$id = $row['IDPB'];
		echo '<TR><TD>'.$row['IDPB'].'</TD><TD>'.$row['Tenpb'].'</TD><TD>'.$row['Mota'].'</TD><TD align = "center">
		<A HREF = "http://localhost/CNWeb/form_capnhat.php?IDPB='.$id.'">xxx</A></TD></TR>';
	}
	echo '</TABLE>';
	//giai phong tap cac ban ghi trong $rs
	mysqli_free_result($result);
	mysqli_close($link);
?>