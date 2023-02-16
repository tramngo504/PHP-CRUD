<?php
    $id = $_REQUEST['idnv'];
    $ten = $_REQUEST['tennv'];
    $idpb = $_REQUEST['idpb'];
    $diachi = $_REQUEST['diachi'];
    $link = mysqli_connect("localhost", "root","") or die("cannot connect");
    mysqli_select_db($link, "DULIEU");
    $result = mysqli_query($link, "select * from nhanvien where IDNV = '$id'");
    if(mysqli_num_rows($result) == 0)
    {
    $sql = "insert into nhanvien(IDNV, hoten, IDPB, diachi) values('$id', '$ten', '$idpb', '$diachi')";
    $rs = mysqli_query($link, $sql);
    header("Location:xemthongtinnv.php");
    }
    else
    {
        header("Location:chen.php?ID=1");
    }
?>