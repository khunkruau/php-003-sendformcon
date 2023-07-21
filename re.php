<html>
<head>
	<title>รับข้อมูลฟอร์ม เงื่อนไข ควบคุมการแสดงผล</title>
</head>
<body>
<h4>#หน้ารับข้อมูลฟอร์ม เงื่อนไข ควบคุมการแสดงผล</h4>
<?php
	$animal = $_POST["selanimal"];
	$rsex = $_POST["sex"];
	$rfirstname = $_POST["firstname"];
	$rlastname = $_POST["lastname"];
?>
<center>
	<table width="50%" border="1" cellspacing="0">
		<tr>
			<td width="25%" align="center">
					<?php 
						if ($animal=="cow"){
					    	echo "<img src='cow.png' width='45%'>";
						}else {
							echo "<img src='deer.png' width='45%'>";
						}
					?>
			</td><td width="25%" align="center"><?php echo "$rsex$rfirstname $rlastname";?></td>
		</tr>
		
		<tr>
			</td><td width="25%" align="center"><?php echo "$rsex$rfirstname $rlastname";?></td>
			<td width="25%" align="center">
					<?php 
						if ($animal=="cow"){
					    	echo "<img src='cow.png' width='45%'>";
						}else {
							echo "<img src='deer.png' width='45%'>";
						}
					?>
			
		</tr>

	</table>
</center>
</body>
</html>