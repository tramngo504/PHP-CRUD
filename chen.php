<html>
    <head>
        
</head>
    <body>
        <form action = "xulichen.php" method = "post">
        <table border = "0">
            <caption>Chen thong tin nhan vien</caption>
            <TR>
                <TD>Ma nhan vien:</TD>
                <TD><input type = "Text" name = "idnv" value = ""></TD>
            </TR>
            <TR>
                <TD>Ten nhan vien:</TD>
                <TD><input type = "Text" name = "tennv" value = ""></TD>
            </TR>
            <TR>
                <TD>Phong ban:</TD>
                <TD><select name = "idpb">
                    <option value="PB01">Phong ban 01</option>
                    <option value="PB02">Phong ban 02</option>
                    <option value="PB03">Phong ban 03</option>
                </TD>
            </TR>
            <TR>
                <TD>Dia chi:</TD>
                <TD><input type = "Text" name = "diachi" value = ""></TD>
            </TR>
            <TR>
                <TD><input type = "Submit" name = "submit" value = "OK"></TD>
                <TD><input type = "Reset" value = "Reset"></TD>
            </TR>
        </table>
        </form>
    </body>
</html>