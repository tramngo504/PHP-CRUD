<?php
   /* $link = mysqli_connect("localhost", "root", "") or die ("Cannot connect");
    mysqli_select_db($link, "DULIEU");
    $sql = "select * from nhanvien";
    $rs = mysqli_query($link, $sql);
    echo '<table border = "1" width = "100%">';
    echo '<caption>Du lieu nhan vien</caption>';
    echo '<TR><TH>IDNV</TH><TH>Ten nhan vien</TH><TH>Dia chi</TH><TH>Xoa</TH></TR>';
    while($row = mysqli_fetch_array($rs))
    {
        $id = $row['IDNV'];
        echo '<TR><TD>'.$row['IDNV'].'</TD><TD>'.$row['hoten'].'</TD><TD>'.$row['diachi'].'</TD><TD align = "center">
        <a href = "http://localhost/CNWeb/xulixoa.php?IDNV='.$id.'"></TD></TR>';
    }
    echo '</table>';
    mysqli_free_result($rs);
    mysqli_close($link);*/
?>
<html>
    <head>
        
    </head>
    <body>
        <form action="xulixoatatca.php" method = "post">
    <table border = "1" width = "100%">
    <caption>Du lieu nhan vien</caption>
    <TR><TH>IDNV</TH><TH>Ten nhan vien</TH><TH>Dia chi</TH><TH>Xoa</TH></TR>
    <?php
        $link = mysqli_connect("localhost", "root", "") or die ("Cannot connect");
        mysqli_select_db($link, "DULIEU");
        $sql = "select * from nhanvien";
        $rs = mysqli_query($link, $sql);
        while($row = mysqli_fetch_array($rs))
    {
        $id = $row['IDNV'];
    ?>
    <TR><TD><?php echo $row['IDNV'];?></TD><TD><?php echo $row['hoten'];?></TD><TD><?php echo $row['diachi'];?></TD><TD align = "center">
        <input type = "checkbox" name = "check[]" value = "<?php echo $row['IDNV']?>"></TD></TR>
    <!-- <input type = "checkbox" name = "check"> -->
    <?php }?>
    </table>
    <?php
    mysqli_free_result($rs);
    mysqli_close($link);
    ?>
    <input type = "Submit" name = "submit" value = "Xoa tat ca">
    </form>
</body>
</html>