<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Indexx</title>
  <?php 
  if(isset($_REQUEST['ID']))
  {
	  $idd = $_REQUEST['ID'];
  }
  else $idd = 0;
  if($idd == 1) 
 {
	echo '<script type="text/javascript">
	if (top != self) top.location.href = location.href;
	</script>'; 
 }?>
  <FRAMESET ROWS = "100,*">
		<FRAME NAME = "t1" src = "T1.htm" scrolling="no">
		<FRAMESET COLS = "150,*,150">
			<?php 
				if($idd == 1)
				{
			?>
			<FRAME NAME = "t2" target = "t3" src = "T22.php?ID=1" >
			<?php 
			} else {?>
			<FRAME NAME = "t2" target = "t3" src = "T22.php?ID=0">
			<?php }?>
			<FRAME NAME = "t3" target = "_self" src = "login.htm" >
			<FRAME NAME = "t4" target = "_self" src = "TA.htm" scrolling="no">
		</FRAMESET>
	</FRAMESET> 
 </head>
 <body >

 </body>
</html>
