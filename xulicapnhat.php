<?php
	$ma = $_REQUEST["idpb"];
	$ten = $_REQUEST["tenpb"];
	$mota = $_REQUEST["motapb"];
	$link = mysqli_connect('localhost', 'root', '') or die ('Cannot connect');
	mysqli_select_db($link, "DULIEU");
	$sql = "UPDATE phongban SET Tenpb = '$ten', Mota = '$mota' WHERE IDPB = '$ma'";
	echo $sql;
	$rs = mysqli_query($link, $sql);
	header("Location:capnhat.php");
?>
