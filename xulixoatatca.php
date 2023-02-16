<?php
    $link = mysqli_connect("localhost", "root", "");
    mysqli_select_db($link, "DULIEU");
    if(isset($_POST['submit']))
    {
        $checkbox = $_POST['check'];
        for($i = 0; $i<count($checkbox); $i++)
        {
            $id = $checkbox[$i];
            echo $id;
            $sql = "delete from nhanvien where IDNV ='$id'";
            echo $sql;
            $rs = mysqli_query($link, $sql);
        }
    }
    mysqli_close($link);
    header("Location:xulixoa.php");
?>