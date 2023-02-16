<?php
    $id = $_REQUEST['IDNV'];
    $link = mysqli_connect("localhost", 'root', '');
    mysqli_select_db($link, "DULIEU");
    $sql = "delete from nhanvien where IDNV = '$id'";
    $rs = mysqli_query($link, $sql);
    header("Location:xoa_nv.php");
?>