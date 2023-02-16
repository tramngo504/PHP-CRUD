<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>T3</title>
 </head>
 <body bgcolor="navy" >
		<a target = "t3" href = "login.htm"><font color="white" >Trang chu</font></a>
		<BR>
        <?php if($_REQUEST['ID'] == '1')
        {
        ?>
        <a target = "t3" href = "login.htm"><font color="white">Dang nhap</font></a>
        <BR>
        <?php } 
        //else 
        ?>
		<a target = "t3" href = "xemthongtinnv.php"><font color="white">Xem nhan vien</font></a>
		<BR>
		<a target = "t3" href = "xemthongtinpb.php"><font color="white">Xem phong ban</font></a>
		<BR>
        <a  target = "t3"  href= "timkiem.php"><font color="white">Tim kiem</font></a>
        <BR>
        <?php if($_REQUEST['ID'] == '1')
        {
        ?>
        <a  target = "t3"  href= "capnhat.php"><font color="white">Cap nhat phong ban</font></a>
        <BR>
        <a  target = "t3"  href= "chen.php"><font color="white">Them nhan vien</font></a>
        <BR>
        <a  target = "t3"  href= "xoa_nv.php"><font color="white">Xoa thong tin</font></a>
        <BR>
        <a  target = "t3"  href= "xoatatca.php"><font color="white">Xoa tat ca</font></a>
        <BR>
        <?php }
        ?>
 </body>
</html>
